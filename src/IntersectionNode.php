<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use function sprintf;

final class IntersectionNode implements NodeInterface
{
    public function __construct(
        public readonly NodeInterface $left,
        public readonly NodeInterface $right,
    ) {
    }

    public function __toString(): string
    {
        return sprintf('%s & %s', $this->left, $this->right);
    }
}
