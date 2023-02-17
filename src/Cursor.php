<?php

declare(strict_types=1);

namespace PhpTypes\Ast;

use Generator;

/**
 * @template T
 */
final class Cursor
{
    /** @var T|null  */
    private mixed $current = null;
    /** @var Generator<mixed, T> */
    private readonly Generator $items;

    /**
     * @param iterable<mixed, T> $items
     */
    public function __construct(iterable $items)
    {
        if (!$items instanceof Generator) {
            $items = self::toGenerator($items);
        }
        $this->items = $items;
        foreach ($this->items as $item) {
            $this->current = $item;
            break;
        }
    }

    /**
     * @return T | null
     */
    public function consume(): mixed
    {
        $current = $this->current;
        $this->items->next();
        $this->current = $this->items->current();
        return $current;
    }

    /**
     * @return T | null
     */
    public function peek(): mixed
    {
        return $this->current;
    }

    /**
     * @template K
     * @template V
     * @param iterable<K, V> $iterable
     * @return Generator<K, V>
     */
    private static function toGenerator(iterable $iterable): Generator
    {
        yield from $iterable;
    }
}
