<?php

namespace Wickedreports\ApiCore\Collections;

abstract class AbstractCollection implements
    \Iterator,
    \Countable,
    \ArrayAccess
{
    protected array $collection = [];
    private int $position = 0;

    public function current()
    {
        return $this->collection[$this->position];
    }

    public function next():void
    {
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->offsetExists($this->position);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function offsetExists($offset): bool
    {
        return isset($this->collection[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->collection[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if ($offset === null) {
            $this->collection[] = $value;

            return;
        }

        $this->collection[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->collection[$offset]);
    }

    public function count(): int
    {
        return count($this->collection);
    }
}
