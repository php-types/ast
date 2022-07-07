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
     * @param string $typeString
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
            'callable(): void',
            'callable(string): void',
            'callable(string, int): void',
            'callable(string, int=, bool=): void',
            // Identifier
            'string',
            'list<int>',
            'array<array-key, string>',
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
            // Tuple
            'array{string}',
            'array{string, int}',
            'array{string, int, bool}',
            // Union
            'string | int',
            'string | int | bool',
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
