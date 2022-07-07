<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Util;

final class StringUtil
{
    public static function indent(string $string): string
    {
        $lines = explode("\n", $string);
        foreach ($lines as &$line) {
            $line = self::indentLine($line);
        }
        return implode("\n", $lines);
    }

    public static function indentLine(string $line): string
    {
        return '    ' . $line;
    }
}
