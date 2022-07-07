<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

final class StringLiteralNode implements NodeInterface
{
    public function __construct(public readonly string $value)
    {
    }

    public function __toString(): string
    {
        return "'" . $this->value . "'";
    }
}
