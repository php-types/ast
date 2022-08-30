<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\BailErrorStrategy;
use Antlr\Antlr4\Runtime\Error\Exceptions\ParseCancellationException;
use Antlr\Antlr4\Runtime\InputStream;
use PhpTypes\Ast\Exception\SyntaxError;
use PhpTypes\Ast\Generated\Context\CallableContext;
use PhpTypes\Ast\Generated\Context\IdentifierContext;
use PhpTypes\Ast\Generated\Context\IntersectionContext;
use PhpTypes\Ast\Generated\Context\IntLiteralContext;
use PhpTypes\Ast\Generated\Context\StringLiteralContext;
use PhpTypes\Ast\Generated\Context\StructContext;
use PhpTypes\Ast\Generated\Context\TupleContext;
use PhpTypes\Ast\Generated\Context\TypeExprContext;
use PhpTypes\Ast\Generated\Context\UnionContext;
use PhpTypes\Ast\Generated\PhpTypesLexer;
use PhpTypes\Ast\Generated\PhpTypesParser;
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

/**
 * @phpstan-type Context CallableContext|IdentifierContext|IntersectionContext|IntLiteralContext|StringLiteralContext|StructContext|TupleContext|UnionContext
 */
final class Parser
{
    private function __construct()
    {
    }

    public static function parse(string $typeString): NodeInterface
    {
        $antlr = new PhpTypesParser(
            new CommonTokenStream(
                new PhpTypesLexer(InputStream::fromString($typeString))
            )
        );
        $antlr->setErrorHandler(new BailErrorStrategy());
        try {
            /** @var Context $ctx */
            $ctx = $antlr->typeExpr();
            return self::fromTypeContext($ctx);
        } catch (ParseCancellationException $e) {
            throw new SyntaxError('Syntax error', previous: $e);
        }
    }

    /**
     * @param Context $ctx
     */
    private static function fromTypeContext(
        TypeExprContext $ctx,
    ): CallableNode|IdentifierNode|IntersectionNode|IntLiteralNode|StringLiteralNode|StructNode|TupleNode|UnionNode {
        return match (true) {
            $ctx instanceof CallableContext => self::fromCallableContext($ctx),
            $ctx instanceof IdentifierContext => self::fromIdentifierContext($ctx),
            $ctx instanceof IntersectionContext => self::fromIntersectionContext($ctx),
            $ctx instanceof IntLiteralContext => self::fromIntLiteralContext($ctx),
            $ctx instanceof StringLiteralContext => self::fromStringLiteralContext($ctx),
            $ctx instanceof StructContext => self::fromStructContext($ctx),
            $ctx instanceof TupleContext => self::fromTupleContext($ctx),
            default => self::fromUnionContext($ctx),
        };
    }

    private static function fromIdentifierContext(
        IdentifierContext $ctx,
    ): IdentifierNode {
        $params = [];
        /** @var Context $param */
        foreach ($ctx->params ?? [] as $param) {
            $params[] = self::fromTypeContext($param);
        }
        assert($ctx->name !== null);
        $name = $ctx->name->getText() ?? '';
        assert($name !== '');
        return new IdentifierNode($name, $params);
    }

    private static function fromTupleContext(
        TupleContext $context,
    ): TupleNode {
        $params = [];
        /** @var Context $param */
        foreach ($context->elements ?? [] as $param) {
            $params[] = self::fromTypeContext($param);
        }
        return new TupleNode($params);
    }

    private static function fromIntLiteralContext(
        IntLiteralContext $context,
    ): IntLiteralNode {
        return new IntLiteralNode((int)$context->getText());
    }

    private static function fromStringLiteralContext(
        StringLiteralContext $context,
    ): StringLiteralNode {
        $text = $context->getText();
        $text = substr($text, 1, -1);
        return new StringLiteralNode($text);
    }

    private static function fromUnionContext(
        UnionContext $context,
    ): UnionNode {
        /** @var Context $left */
        $left = $context->left;
        /** @var Context $right */
        $right = $context->right;
        return new UnionNode(
            self::fromTypeContext($left),
            self::fromTypeContext($right)
        );
    }

    private static function fromIntersectionContext(
        IntersectionContext $context,
    ): IntersectionNode {
        /** @var Context $left */
        $left = $context->left;
        /** @var Context $right */
        $right = $context->right;
        return new IntersectionNode(
            self::fromTypeContext($left),
            self::fromTypeContext($right)
        );
    }

    private static function fromCallableContext(
        CallableContext $context,
    ): CallableNode {
        $params = [];
        foreach ($context->paramList()->params ?? [] as $param) {
            /** @var Context $paramType */
            $paramType = $param->type;
            $paramType = self::fromTypeContext($paramType);
            $params[] = $param->optional === null
                ? CallableParameter::required($paramType)
                : CallableParameter::optional($paramType);
        }
        /** @var Context $contextReturn */
        $contextReturn = $context->return;
        return new CallableNode(
            self::fromTypeContext($contextReturn),
            $params
        );
    }

    private static function fromStructContext(
        StructContext $context,
    ): StructNode {
        $members = [];
        foreach ($context->memberList()->members ?? [] as $member) {
            /** @var Context $memberValue */
            $memberValue = $member->value;
            $type = self::fromTypeContext($memberValue);
            assert($member->key !== null);
            $key = $member->key->getText() ?? '';
            assert($key !== '');
            $members[$key] = $member->optional === null
                ? StructMember::required($type)
                : StructMember::optional($type);
        }
        return new StructNode($members);
    }
}
