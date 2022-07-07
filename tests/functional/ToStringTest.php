<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Tests\Functional;

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
use PHPUnit\Framework\TestCase;

final class ToStringTest extends TestCase
{
    /**
     * @dataProvider toStringCases
     */
    public function testToString(NodeInterface $node, string $expected): void
    {
        self::assertSame($expected, (string)$node);
    }

    /**
     * @return iterable<string, array{NodeInterface, string}>
     */
    public function toStringCases(): iterable
    {
        yield 'Identifier with no arguments' => [
            new IdentifierNode('foo'),
            'foo',
        ];
        yield 'Identifier with a single argument' => [
            new IdentifierNode('foo', [new IdentifierNode('bar')]),
            'foo<bar>',
        ];
        yield 'Identifier with multiple arguments' => [
            new IdentifierNode('foo', [
                new IdentifierNode('bar'),
                new IdentifierNode('baz'),
            ]),
            'foo<bar, baz>',
        ];
        yield 'Int literal' => [
            new IntLiteralNode(42),
            '42',
        ];
        yield 'String literal' => [
            new StringLiteralNode('foo'),
            "'foo'",
        ];
        yield 'Callable without parameters' => [
            new CallableNode(new IdentifierNode('void')),
            'callable(): void',
        ];
        yield 'Callable with a single required parameter' => [
            new CallableNode(
                new IdentifierNode('void'),
                [CallableParameter::required(new IdentifierNode('int'))]
            ),
            'callable(int): void',
        ];
        yield 'Callable with a single optional parameter' => [
            new CallableNode(
                new IdentifierNode('void'),
                [CallableParameter::optional(new IdentifierNode('int'))]
            ),
            'callable(int=): void',
        ];
        yield 'Callable with multiple parameters' => [
            new CallableNode(
                new IdentifierNode('void'),
                [
                    CallableParameter::required(new IdentifierNode('int')),
                    CallableParameter::optional(new IdentifierNode('string')),
                ]
            ),
            'callable(int, string=): void',
        ];
        yield 'Union' => [
            new UnionNode(
                new IdentifierNode('bar'),
                new IdentifierNode('baz'),
            ),
            'bar | baz',
        ];
        yield 'Intersection' => [
            new IntersectionNode(
                new IdentifierNode('bar'),
                new IdentifierNode('baz'),
            ),
            'bar & baz',
        ];
        yield 'Struct without any members' => [
            new StructNode([]),
            'array{}',
        ];
        yield 'Struct with a single required member' => [
            new StructNode([
                               'foo' => StructMember::required(new IdentifierNode('int')),
                           ]),
            <<<EXPECTED
            array{
                foo: int,
            }
            EXPECTED,
        ];
        yield 'Struct with a single optional member' => [
            new StructNode([
                               'foo' => StructMember::optional(new IdentifierNode('int')),
                           ]),
            <<<EXPECTED
            array{
                foo?: int,
            }
            EXPECTED,
        ];
        yield 'Struct with multiple members' => [
            new StructNode([
                               'foo' => StructMember::required(new IdentifierNode('int')),
                               'bar' => StructMember::optional(new IdentifierNode('string')),
                           ]),
            <<<EXPECTED
            array{
                foo: int,
                bar?: string,
            }
            EXPECTED,
        ];
        yield 'Tuple without any elements' => [
            new TupleNode([]),
            'array{}',
        ];
        yield 'Tuple with a single element' => [
            new TupleNode([new IdentifierNode('int')]),
            'array{int}',
        ];
        yield 'Tuple with multiple elements' => [
            new TupleNode([
                              new IdentifierNode('int'),
                              new IdentifierNode('string'),
                          ]),
            'array{int, string}',
        ];
    }
}
