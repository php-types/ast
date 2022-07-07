<?php

namespace PhpTypes\Ast;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\ConsoleErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
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
use RuntimeException;

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
        $antlr->addErrorListener(new ConsoleErrorListener());
        return self::fromTypeContext($antlr->typeExpr());
    }

    private static function fromTypeContext(TypeExprContext $ctx): NodeInterface
    {
        return (match (true) {
            $ctx instanceof CallableContext => self::fromCallableContext(...),
            $ctx instanceof IdentifierContext => self::fromIdentifierContext(...),
            $ctx instanceof IntersectionContext => self::fromIntersectionContext(...),
            $ctx instanceof IntLiteralContext => self::fromIntLiteralContext(...),
            $ctx instanceof StringLiteralContext => self::fromStringLiteralContext(...),
            $ctx instanceof StructContext => self::fromStructContext(...),
            $ctx instanceof TupleContext => self::fromTupleContext(...),
            $ctx instanceof UnionContext => self::fromUnionContext(...),
            default => throw new RuntimeException('Failed to parse'),
        })(
            $ctx,
        );
    }

    private static function fromIdentifierContext(
        IdentifierContext $ctx,
    ): NodeInterface {
        $params = [];
        foreach ($ctx->params ?? [] as $param) {
            $params[] = self::fromTypeContext($param);
        }
        return new IdentifierNode($ctx->name->getText(), $params);
    }

    private static function fromTupleContext(
        TupleContext $context,
    ): NodeInterface {
        $params = [];
        foreach ($context->elements ?? [] as $param) {
            $params[] = self::fromTypeContext($param);
        }
        return new TupleNode($params);
    }

    private static function fromIntLiteralContext(
        IntLiteralContext $context,
    ): NodeInterface {
        return new IntLiteralNode((int)$context->getText());
    }

    private static function fromStringLiteralContext(
        StringLiteralContext $context,
    ): NodeInterface {
        $text = $context->getText();
        $text = substr($text, 1, -1);
        return new StringLiteralNode($text);
    }

    private static function fromUnionContext(
        UnionContext $context,
    ): NodeInterface {
        return new UnionNode(
            self::fromTypeContext($context->left),
            self::fromTypeContext($context->right)
        );
    }

    private static function fromIntersectionContext(
        IntersectionContext $context,
    ): NodeInterface {
        return new IntersectionNode(
            self::fromTypeContext($context->left),
            self::fromTypeContext($context->right)
        );
    }

    private static function fromCallableContext(
        CallableContext $context,
    ): NodeInterface {
        $params = [];
        foreach ($context->paramList()->params ?? [] as $param) {
            $paramType = self::fromTypeContext($param->type);
            $params[] = $param->optional === null
                ? CallableParameter::required($paramType)
                : CallableParameter::optional($paramType);
        }
        return new CallableNode(
            self::fromTypeContext($context->return),
            $params
        );
    }

    private static function fromStructContext(
        StructContext $context,
    ): NodeInterface {
        $members = [];
        foreach ($context->memberList()->members ?? [] as $member) {
            $type = self::fromTypeContext($member->value);
            $members[$member->key->getText()] = $member->optional === null
                ? StructMember::required($type)
                : StructMember::optional($type);
        }
        return new StructNode($members);
    }
}
