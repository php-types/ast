<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

enum TokenKind
{
    case String;
    case Integer;
    case Whitespace;
    case OpenAngle;
    case CloseAngle;
    case Colon;
    case Comma;
    case OpenParen;
    case CloseParen;
    case OpenBrace;
    case CloseBrace;
    case Pipe;
    case Ampersand;
    case QuestionMark;
    case Identifier;
    case Equals;
}
