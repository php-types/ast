<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use Stringable;

final class Token implements Stringable
{
    private function __construct(public readonly TokenKind $kind, public readonly string $contents = '')
    {
    }

    public static function string(string $contents): self
    {
        return new self(TokenKind::String, $contents);
    }

    public static function integer(int $value): self
    {
        return new self(TokenKind::Integer, (string)$value);
    }

    public static function whitespace(): self
    {
        return new self(TokenKind::Whitespace);
    }

    public static function lt(): self
    {
        return new self(TokenKind::OpenAngle);
    }

    public static function gt(): self
    {
        return new self(TokenKind::CloseAngle);
    }

    public static function colon(): self
    {
        return new self(TokenKind::Colon);
    }

    public static function comma(): self
    {
        return new self(TokenKind::Comma);
    }

    public static function openParen(): self
    {
        return new self(TokenKind::OpenParen);
    }

    public static function closeParen(): self
    {
        return new self(TokenKind::CloseParen);
    }

    public static function openBrace(): self
    {
        return new self(TokenKind::OpenBrace);
    }

    public static function closeBrace(): self
    {
        return new self(TokenKind::CloseBrace);
    }

    public static function pipe(): self
    {
        return new self(TokenKind::Pipe);
    }

    public static function ampersand(): self
    {
        return new self(TokenKind::Ampersand);
    }

    public static function questionMark(): self
    {
        return new self(TokenKind::QuestionMark);
    }

    public static function identifier(string $contents): self
    {
        return new self(TokenKind::Identifier, $contents);
    }

    public static function equals(): self
    {
        return new self(TokenKind::Equals);
    }

    public function __toString(): string
    {
        return match ($this->kind) {
            TokenKind::String => '"' . $this->contents . '"',
            TokenKind::Integer => $this->contents,
            TokenKind::Whitespace => ' ',
            TokenKind::OpenAngle => '<',
            TokenKind::CloseAngle => '>',
            TokenKind::Colon => ':',
            TokenKind::Comma => ',',
            TokenKind::OpenParen => '(',
            TokenKind::CloseParen => ')',
            TokenKind::OpenBrace => '{',
            TokenKind::CloseBrace => '}',
            TokenKind::Pipe => '|',
            TokenKind::Ampersand => '&',
            TokenKind::QuestionMark => '?',
            TokenKind::Identifier => $this->contents,
            TokenKind::Equals => '=',
        };
    }
}
