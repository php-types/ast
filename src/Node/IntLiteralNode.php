<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

final class IntLiteralNode implements NodeInterface
{
    public function __construct(public readonly int $value)
    {
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
