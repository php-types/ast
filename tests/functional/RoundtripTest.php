<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Tests\Functional;

use PhpTypes\Ast\Parser;
use PHPUnit\Framework\TestCase;

use function is_int;
use function is_numeric;
use function sprintf;

final class RoundtripTest extends TestCase
{
    /**
     * @dataProvider cases
     */
    public function testRoundtrip(string $typeString, string $expected): void
    {
        $node = Parser::parse($typeString);

        self::assertSame($expected, (string)$node);
    }

    /**
     * @return iterable<string, array{string}>
     */
    public function cases(): iterable
    {
        $cases = [
            // Callable
            'callable' => 'callable(): mixed',
            'callable()' => 'callable(): mixed',
            'callable(): void',
            'callable( ): void' => 'callable(): void',
            'callable() : void' => 'callable(): void',
            'callable(string): void',
            'callable(string, int): void',
            'callable(string, int=, bool=): void',
            'callable(string= ,): void' => 'callable(string=): void',
            'callable( string , int= , bool= ) : void' => 'callable(string, int=, bool=): void',
            // Identifier
            'string',
            'list<int>',
            'array<array-key, string>',
            'array' => 'array<array-key, mixed>',
            'Foo<Bar, Baz, Qux>',
            'Maroon5',
            // Intersection
            'Foo & Bar',
            'Foo & Bar & Baz',
            // Int literal
            '42',
            '0',
            '-42',
            '5',
            // String literal
            "'foo'",
            '"foo"' => "'foo'",
            // Struct
            'array{}',
            'array{ }' => 'array{}',
            <<<'PHP'
            array{
                foo: string,
            }
            PHP,
            <<<'PHP'
            array{
                foo: string,
                bar?: string,
            }
            PHP,
            <<<'PHP'
            array{
                nested: array{
                    foo: string,
                },
            }
            PHP,
            'array{ name : string , age? : int }' => <<<'PHP'
                array{
                    name: string,
                    age?: int,
                }
                PHP,
            'array{name:string,age?:int}' => <<<'PHP'
                array{
                    name: string,
                    age?: int,
                }
                PHP,
            // Tuple
            'array{string}',
            'array{string, int}',
            'array{string, int, bool}',
            'array{ string , int , bool }' => 'array{string, int, bool}',
            // Union
            'string | int',
            'string | int | bool',
            '"foo" | \'bar\'' => "'foo' | 'bar'",
        ];
        foreach ($cases as $from => $to) {
            if (is_int($from)) {
                $from = $to;
                $name = $to;
                if (is_numeric($name)) {
                    $name = 'Number ' . $name;
                }
            } else {
                $name = sprintf('%s -> %s', $from, $to);
            }
            yield $name => [$from, $to];
        }
    }
}
