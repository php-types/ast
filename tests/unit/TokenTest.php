<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Tests\Unit;

use PhpTypes\Ast\Token;
use PHPUnit\Framework\TestCase;

final class TokenTest extends TestCase
{
    /**
     * @dataProvider toStringCases
     */
    public function testToString(Token $token, string $expected): void
    {
        $actual = (string)$token;

        self::assertSame($expected, $actual);
    }

    /**
     * @return iterable<string, array{Token, string}>
     */
    public function toStringCases(): iterable
    {
        yield 'String' => [Token::string('foo'), '"foo"'];
        yield 'Integer' => [Token::integer(42), '42'];
        yield 'Whitespace' => [Token::whitespace(), ' '];
        yield 'OpenAngle' => [Token::openAngle(), '<'];
        yield 'CloseAngle' => [Token::closeAngle(), '>'];
        yield 'Colon' => [Token::colon(), ':'];
        yield 'Comma' => [Token::comma(), ','];
        yield 'OpenParen' => [Token::openParen(), '('];
        yield 'CloseParen' => [Token::closeParen(), ')'];
        yield 'OpenBrace' => [Token::openBrace(), '{'];
        yield 'CloseBrace' => [Token::closeBrace(), '}'];
        yield 'Pipe' => [Token::pipe(), '|'];
        yield 'Ampersand' => [Token::ampersand(), '&'];
        yield 'QuestionMark' => [Token::questionMark(), '?'];
        yield 'Identifier' => [Token::identifier('array'), 'array'];
        yield 'Equals' => [Token::equals(), '='];
        yield 'Minus' => [Token::minus(), '-'];
    }
}
