<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use PhpTypes\Ast\Exception\SyntaxError;
use PhpTypes\Ast\Node\CallableNode;
use PhpTypes\Ast\Node\Dto\CallableParameter;
use PhpTypes\Ast\Node\Dto\StructMember;
use PhpTypes\Ast\Node\IdentifierNode;
use PhpTypes\Ast\Node\IntersectionNode;
use PhpTypes\Ast\Node\IntLiteralNode;
use PhpTypes\Ast\Node\NodeInterface;
use PhpTypes\Ast\Node\StringLiteralNode;
use PhpTypes\Ast\Node\StructNode;
use PhpTypes\Ast\Node\TupleNode;
use PhpTypes\Ast\Node\UnionNode;
use function assert;
use function in_array;
use function mb_str_split;
use function sprintf;

final class Parser
{
    public static function parse(string $typeString): NodeInterface
    {
        return self::parseTokens(
            new Cursor(
                Lexer::lex(
                    new Cursor(mb_str_split($typeString))
                )
            )
        );
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseTokens(Cursor $tokens): NodeInterface
    {
        self::skipWhitespace($tokens);
        $node = null;
        while (true) {
            $token = $tokens->consume();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            $node = match ($token->kind) {
                TokenKind::Identifier => match ($token->contents) {
                    'callable' => self::parseCallable($tokens),
                    'array' => self::parseArray($tokens),
                    default => self::parseIdentifier($token->contents, $tokens),
                },
                TokenKind::Integer => new IntLiteralNode((int)$token->contents),
                TokenKind::String => new StringLiteralNode($token->contents),
                TokenKind::Pipe => self::parseUnion($node, $tokens),
                TokenKind::Ampersand => self::parseIntersection($node, $tokens),
                default => throw new SyntaxError(sprintf('Unexpected token "%s"', $token)),
            };
            self::skipWhitespace($tokens);
            $nextToken = $tokens->peek();
            if (in_array($nextToken?->kind, [TokenKind::Pipe, TokenKind::Ampersand], true)) {
                continue;
            }
            return $node;
        }
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseIdentifier(string $name, Cursor $tokens): IdentifierNode
    {
        assert($name !== '');
        $typeParameters = [];
        self::skipWhitespace($tokens);
        $token = $tokens->peek();
        if ($token === null) {
            return new IdentifierNode($name);
        }
        if ($token->kind === TokenKind::OpenAngle) {
            $tokens->consume();
            while (true) {
                self::skipWhitespace($tokens);
                $typeParameters[] = self::parseTokens($tokens);
                self::skipWhitespace($tokens);
                $token = $tokens->peek();
                if ($token === null) {
                    throw new SyntaxError('Unexpected end of input');
                }
                if ($token->kind === TokenKind::CloseAngle) {
                    $tokens->consume();
                    break;
                }
                if ($token->kind !== TokenKind::Comma) {
                    throw new SyntaxError(sprintf('Expected , or >, got %s', $token));
                }
                $tokens->consume();
            }
        }
        return new IdentifierNode($name, $typeParameters);
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseCallable(Cursor $tokens): CallableNode
    {
        self::skipWhitespace($tokens);
        $token = $tokens->peek();
        if ($token?->kind !== TokenKind::OpenParen) {
            return new CallableNode(new IdentifierNode('mixed'));
        }
        $tokens->consume();
        $parameters = [];
        while (true) {
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            if ($token->kind === TokenKind::CloseParen) {
                $tokens->consume();
                break;
            }
            $parameterType = self::parseTokens($tokens);
            if ($tokens->peek()?->kind === TokenKind::Equals) {
                $tokens->consume();
                $parameters[] = CallableParameter::optional($parameterType);
            } else {
                $parameters[] = CallableParameter::required($parameterType);
            }
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            if ($token->kind === TokenKind::CloseParen) {
                $tokens->consume();
                break;
            }
            if ($token->kind !== TokenKind::Comma) {
                throw new SyntaxError(sprintf('Expected , or ), got %s', $token));
            }
            $tokens->consume();
        }
        self::skipWhitespace($tokens);
        $token = $tokens->peek();
        if ($token?->kind !== TokenKind::Colon) {
            return new CallableNode(new IdentifierNode('mixed'), $parameters);
        }
        $tokens->consume();
        self::skipWhitespace($tokens);
        $returnType = self::parseTokens($tokens);
        return new CallableNode($returnType, $parameters);
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseArray(Cursor $tokens): StructNode|TupleNode|IdentifierNode
    {
        $token = $tokens->peek();
        return match ($token?->kind) {
            TokenKind::OpenBrace => self::parseStructOrTuple($tokens),
            TokenKind::OpenAngle => self::parseIdentifier('array', $tokens),
            null => new IdentifierNode('array'),
            default => new IdentifierNode('array'),
        };
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseStructOrTuple(Cursor $tokens): StructNode|TupleNode
    {
        $tokens->consume();
        self::skipWhitespace($tokens);
        $token = $tokens->peek();
        if ($token === null) {
            throw new SyntaxError('Unexpected end of input');
        }
        if ($token->kind === TokenKind::CloseBrace) {
            $tokens->consume();
            return new TupleNode([]);
        }
        $first = self::parseTokens($tokens);
        self::skipWhitespace($tokens);
        $token = $tokens->peek();
        if ($token === null) {
            throw new SyntaxError('Unexpected end of input');
        }
        return in_array($token->kind, [TokenKind::Comma, TokenKind::CloseBrace], true)
            ? self::parseTuple($tokens, $first)
            : self::parseStruct($tokens, $first);
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseTuple(Cursor $tokens, NodeInterface $first): TupleNode
    {
        $elements = [$first];
        while (true) {
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            if ($token->kind === TokenKind::CloseBrace) {
                $tokens->consume();
                break;
            }
            if ($token->kind !== TokenKind::Comma) {
                throw new SyntaxError(sprintf('Expected , or }, got %s', $token));
            }
            $tokens->consume();
            $elements[] = self::parseTokens($tokens);
        }
        return new TupleNode($elements);
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseStruct(Cursor $tokens, NodeInterface $firstKey): StructNode
    {
        $keyNode = $firstKey;
        $members = [];
        while (true) {
            if (!$keyNode instanceof IdentifierNode) {
                throw new SyntaxError(sprintf('Expected identifier, got %s', $keyNode));
            }
            if ($keyNode->typeParameters !== []) {
                throw new SyntaxError(sprintf('Struct keys cannot have type parameters, got %s', $firstKey));
            }
            $key = $keyNode->name;
            $question = $tokens->peek();
            $optional = false;
            if ($question?->kind === TokenKind::QuestionMark) {
                $tokens->consume();
                $optional = true;
            }
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token?->kind !== TokenKind::Colon) {
                throw new SyntaxError(sprintf('Expected : or }, got %s', $token));
            }
            $tokens->consume();
            $type = self::parseTokens($tokens);
            if ($optional) {
                $members[$key] = StructMember::optional($type);
            } else {
                $members[$key] = StructMember::required($type);
            }
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            if ($token->kind !== TokenKind::Comma) {
                throw new SyntaxError(sprintf('Expected , or }, got %s', $token));
            }
            $tokens->consume();
            self::skipWhitespace($tokens);
            $token = $tokens->peek();
            if ($token === null) {
                throw new SyntaxError('Unexpected end of input');
            }
            if ($token->kind === TokenKind::CloseBrace) {
                $tokens->consume();
                break;
            }
            $keyNode = self::parseTokens($tokens);
        }
        return new StructNode($members);
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function skipWhitespace(Cursor $tokens): void
    {
        while (true) {
            $token = $tokens->peek();
            if ($token === null) {
                return;
            }
            if ($token->kind !== TokenKind::Whitespace) {
                return;
            }
            $tokens->consume();
        }
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseIntersection(NodeInterface|null $node, Cursor $tokens): IntersectionNode
    {
        if ($node === null) {
            throw new SyntaxError('Unexpected pipe');
        }
        return new IntersectionNode($node, self::parseTokens($tokens));
    }

    /**
     * @param Cursor<Token> $tokens
     */
    private static function parseUnion(NodeInterface|null $node, Cursor $tokens): UnionNode
    {
        if ($node === null) {
            throw new SyntaxError('Unexpected ampersand');
        }
        return new UnionNode($node, self::parseTokens($tokens));
    }
}
