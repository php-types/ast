<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

final class UnionNode implements NodeInterface
{
    public function __construct(
        public readonly NodeInterface $left,
        public readonly NodeInterface $right,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s | %s', $this->left, $this->right);
    }
}
