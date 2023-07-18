<?php

namespace Wickedreports\ApiCore\Collections;

use Wickedreports\ApiCore\Exception\ValidationException;

abstract class AbstractValidCollection implements
    \Iterator,
    \Countable,
    \ArrayAccess
{
    protected array $collection = [];
    private int $position = 0;

    /**
     * @param iterable $items
     * @throws ValidationException
     */
    public function __construct(iterable $items)
    {
        $this->setCollection($items);
    }

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

    /**
     * @throws ValidationException
     */
    public function add($item): void
    {
        if (!$this->isValidItem($item)) {
            throw new ValidationException('Invalid item.');
        }

        $this->collection[] = $item;
    }

    /**
     * Method works as validator per collection element. We can check classname, but we should not deal with
     * field values validations here -> that would go against Single responsibility. Field values validation should be
     * implemented in separate class/service.
     */
    abstract protected function isValidItem($item): bool;

    /**
     * @param iterable $items
     * @throws ValidationException
     */
    private function setCollection(iterable $items): void
    {
        foreach ($items as $key => $item) {
            try {
                $this->add($item);
            } catch (ValidationException $e) {
                throw new ValidationException('Invalid list item: ' . $key);
            }
        }
    }
}
