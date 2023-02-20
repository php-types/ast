<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use PhpTypes\Ast\Exception\SyntaxError;

use function in_array;

final class Lexer
{
    private const NON_IDENTIFIER_CHARS = ['<', '>', ':', ',', '(', ')', '{', '}', '|', '&', '?', '='];

    /**
     * @param Cursor<string> $chars
     * @return iterable<int, Token>
     */
    public static function lex(Cursor $chars): iterable
    {
        while (true) {
            $char = $chars->peek();
            if ($char === null) {
                return;
            }
            if (is_numeric($char)) {
                yield self::integer($chars);
                continue;
            }
            if (self::isWhitespace($char)) {
                yield self::whitespace($chars);
                continue;
            }
            if ($char === '"' || $char === "'") {
                yield self::string($chars);
                continue;
            }
            $token = match ($char) {
                '<' => Token::lt(),
                '>' => Token::gt(),
                ':' => Token::colon(),
                ',' => Token::comma(),
                '(' => Token::openParen(),
                ')' => Token::closeParen(),
                '{' => Token::openBrace(),
                '}' => Token::closeBrace(),
                '|' => Token::pipe(),
                '&' => Token::ampersand(),
                '?' => Token::questionMark(),
                '=' => Token::equals(),
                '-' => Token::minus(),
                default => null,
            };
            if ($token !== null) {
                $chars->consume();
                yield $token;
                continue;
            }
            yield self::identifier($chars);
        }
    }

    /**
     * @param Cursor<string> $chars
     */
    private static function string(Cursor $chars): Token
    {
        $quote = $chars->consume();
        $contents = '';
        while (true) {
            $char = $chars->consume();
            if ($char === null) {
                throw new SyntaxError('Unterminated string');
            }
            if ($char === $quote) {
                break;
            }
            $contents .= $char;
        }
        return Token::string($contents);
    }

    /**
     * @param Cursor<string> $chars
     */
    private static function integer(Cursor $chars): Token
    {
        $contents = '';
        while (true) {
            $char = $chars->peek();
            if (!is_numeric($char)) {
                break;
            }
            $contents .= $chars->consume();
        }
        return Token::integer((int)$contents);
    }

    /**
     * @param Cursor<string> $chars
     */
    private static function whitespace(Cursor $chars): Token
    {
        while (true) {
            $char = $chars->peek();
            if ($char === null || !self::isWhitespace($char)) {
                break;
            }
            $chars->consume();
        }
        return Token::whitespace();
    }

    private static function isWhitespace(string $char): bool
    {
        return $char === ' ' || $char === "\t" || $char === "\n";
    }

    /**
     * @param Cursor<string> $chars
     */
    private static function identifier(Cursor $chars): Token
    {
        $contents = '';
        while (true) {
            $char = $chars->peek();
            if ($char === null || self::isWhitespace($char) || !self::isIdentifierChar($char)) {
                break;
            }
            $contents .= $chars->consume();
        }
        return Token::identifier($contents);
    }

    public static function isIdentifierChar(string $char): bool
    {
        return !in_array($char, self::NON_IDENTIFIER_CHARS, true);
    }
}
