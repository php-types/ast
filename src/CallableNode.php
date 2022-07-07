<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use PhpTypes\Ast\Dto\CallableParameter;

final class CallableNode implements NodeInterface
{
    /**
     * @param list<CallableParameter> $parameterTypes
     */
    public function __construct(
        public readonly NodeInterface $returnType,
        public readonly array $parameterTypes = [],
    ) {
    }

    public function __toString(): string
    {
        return sprintf(
            'callable(%s): %s',
            implode(', ', $this->parameterTypes),
            $this->returnType,
        );
    }
}
