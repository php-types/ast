<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Dto;

use PhpTypes\Ast\NodeInterface;

final class StructMember
{
    private function __construct(
        public readonly NodeInterface $type,
        public readonly bool $optional,
    ) {
    }

    public static function required(NodeInterface $type): self
    {
        return new self($type, false);
    }

    public static function optional(NodeInterface $type): self
    {
        return new self($type, true);
    }
}
