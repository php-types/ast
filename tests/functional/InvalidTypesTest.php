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
    public function testInvalidType(string $typeString, string|null $expectedMessage = null): void
    {
        $this->expectException(SyntaxError::class);
        if ($expectedMessage !== null) {
            $this->expectExceptionMessage($expectedMessage);
        }

        Parser::parse($typeString);
    }

    /**
     * @return iterable<string, array{0: string, 1?: string}>
     */
    public function invalidTypes(): iterable
    {
        yield 'Empty string' => [''];
        yield 'Nothing after array brace' => ['array{'];
        yield 'Only whitespace after array brace' => ['array{ '];
        yield 'Missing closing curly brace in struct' => ['array{foo: string'];
        yield 'Missing closing curly brace in tuple' => ['array{string, int'];
        yield 'Missing comma in tuple' => ['array{string int}', 'Expected ?, : or }, got int'];
        yield 'Closing brace instead of closing curly in tuple' => ['array{string, int)', 'Expected , or }, got )'];
        yield 'Missing comma in struct' => ['array{foo: string bar: int}', 'Expected , or }, got bar'];
        yield 'Missing colon in struct entry' => ['array{foo string}', 'Expected ?, : or }, got string'];
        yield 'Missing closing bracket in generic identifier' => ['list<string'];
        yield 'Missing return type in callable' => ['callable():'];
        yield 'Missing closing brace in callable' => ['callable(:void'];
        yield 'Nothing after open brace in callable' => ['callable('];
        yield 'Nothing after first callable parameter' => ['callable(string'];
        yield 'Open brace after first callable parameter' => ['callable(string{', 'Expected "=", "," or ")", got "{"'];
        yield 'Missing closing quote in single quote string literal' => ["'foo"];
        yield 'Missing closing quote in double quote string literal' => ['"foo'];
        yield 'Closing single quote for double quote string literal' => ['"foo\''];
        yield 'Closing double quote for single quote string literal' => ["'foo\""];
        yield 'Missing right side in intersection' => ['string &'];
        yield 'Missing right side in union' => ['string |'];
        yield 'Missing left side in intersection' => ['& string'];
        yield 'Missing left side in union' => ['| string'];
        yield 'Missing type in parameter list' => ['callable(string, , int): void'];
        yield 'Unexpected closing brace in type argument list' => ['array<string), int>', 'Expected , or >, got )'];
        yield 'Unexpected end of struct member list after comma' => ['array{foo: string,'];
        yield 'Unexpected end of struct member list after key' => ['array{foo'];
        yield 'Unexpected end after optional struct member key' => ['array{foo?'];
        yield 'Unexpected end after second member key' => ['array{foo: string, bar'];
        yield 'Struct key with type argument' => ['array{list<int>: string}'];
        yield 'Tuple as struct member key' => ['array{array{bool}: string}'];
        yield 'Minus in int literal' => ['42-23'];
        yield 'Just a minus' => ['-'];
        yield 'Minus identifier' => ['-foo'];
    }
}
