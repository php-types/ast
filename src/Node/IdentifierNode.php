<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

use function sprintf;

final class IdentifierNode implements NodeInterface
{
    /**
     * @param non-empty-string $name
     * @param list<NodeInterface> $typeParameters
     */
    public function __construct(
        public readonly string $name,
        public readonly array $typeParameters = [],
    ) {
    }

    public function __toString(): string
    {
        $generic = $this->typeParameters === []
            ? ''
            : sprintf('<%s>', implode(', ', $this->typeParameters));
        return $this->name . $generic;
    }
}
