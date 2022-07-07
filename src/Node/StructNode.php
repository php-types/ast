<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

use PhpTypes\Ast\Node\Dto\StructMember;

final class StructNode implements NodeInterface
{
    /**
     * @param array<non-empty-string, StructMember> $members
     */
    public function __construct(public readonly array $members)
    {
    }

    public function __toString(): string
    {
        $members = [];
        foreach ($this->members as $name => $member) {
            $members[] = sprintf(
                '    %s%s: %s,',
                $name,
                $member->optional ? '?' : '',
                $member->type,
            );
        }
        if ($members === []) {
            return 'array{}';
        }
        return "array{\n" . implode("\n", $members) . "\n}";
    }
}
