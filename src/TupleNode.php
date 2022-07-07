<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

final class TupleNode implements NodeInterface
{
    /**
     * @param list<NodeInterface> $elements
     */
    public function __construct(public readonly array $elements)
    {
    }

    public function __toString(): string
    {
        return 'array{' . implode(', ', $this->elements) . '}';
    }
}
