<?php

declare(strict_types=1);

namespace PhpTypes\Ast\Node;

use PhpTypes\Ast\Node\Dto\StructMember;

use function explode;
use function implode;

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
            $typeLines = explode("\n", (string)$member->type);
            foreach ($typeLines as $i => &$line) {
                if ($i === 0) {
                    continue;
                }
                $line = '    ' . $line;
            }
            $members[] = sprintf(
                '    %s%s: %s,',
                $name,
                $member->optional ? '?' : '',
                implode("\n", $typeLines),
            );
        }
        if ($members === []) {
            return 'array{}';
        }
        return "array{\n" . implode("\n", $members) . "\n}";
    }
}
