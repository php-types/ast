<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Tests\Functional;

use PhpTypes\Ast\Exception\SyntaxError;
use PhpTypes\Ast\Parser;
use PHPUnit\Framework\TestCase;

final class InvalidTypesTest extends TestCase
{
    /**
     * @dataProvider invalidTypes
     */
    public function testInvalidType(string $typeString): void
    {
        $this->expectException(SyntaxError::class);

        Parser::parse($typeString);
    }

    /**
     * @return iterable<string, array{string}>
     */
    public function invalidTypes(): iterable
    {
        yield 'Empty string' => [''];
        yield 'Missing closing curly brace in struct' => ['array{foo: string'];
        yield 'Missing closing curly brace in tuple' => ['array{string, int'];
        yield 'Missing comma in tuple' => ['array{string int}'];
        yield 'Missing comma in struct' => ['array{foo: string bar: int}'];
        yield 'Missing colon in struct entry' => ['array{foo string}'];
        yield 'Missing closing bracket in generic identifier' => ['list<string'];
        yield 'Missing return type in callable' => ['callable():'];
        yield 'Missing closing brace in callable' => ['callable(:void'];
        yield 'Missing closing quote in single quote string literal' => ["'foo"];
        yield 'Missing closing quote in double quote string literal' => ['"foo'];
        yield 'Closing single quote for double quote string literal' => ['"foo\''];
        yield 'Closing double quote for single quote string literal' => ["'foo\""];
        yield 'Missing right side in intersection' => ['string &'];
        yield 'Missing right side in union' => ['string |'];
        yield 'Missing left side in intersection' => ['& string'];
        yield 'Missing left side in union' => ['| string'];
        yield 'Missing type in parameter list' => ['callable(string, , int): void'];
    }
}
