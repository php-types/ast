<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use function sprintf;

final class IdentifierNode implements NodeInterface
{
    /**
     * @param non-empty-string $name
     * @param list<NodeInterface> $typeArguments
     */
    public function __construct(
        public readonly string $name,
        public readonly array $typeArguments = [],
    ) {
    }

    public function __toString(): string
    {
        $generic = $this->typeArguments === []
            ? ''
            : sprintf('<%s>', implode(', ', $this->typeArguments));
        return $this->name . $generic;
    }
}
