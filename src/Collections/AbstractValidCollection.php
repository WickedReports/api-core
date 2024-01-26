<?php

namespace Wickedreports\ApiCore\Collections;

use ArrayIterator;
use Wickedreports\ApiCore\Exception\ValidationException;

abstract class AbstractValidCollection extends ArrayIterator
{
    /**
     * @param iterable $items
     * @throws ValidationException
     */
    public function __construct(iterable $items = [])
    {
        foreach ($items as $key => $item) {
            if (!$this->isValidItem($item)) {
                throw new ValidationException('Invalid list item: ' . $key);
            }
        }

        parent::__construct($items);
    }

    /**
     * Method works as validator per collection element. We can check classname, but we should not deal with
     * field values validations here -> that would go against Single responsibility. Field values validation should be
     * implemented in separate class/service.
     */
    abstract protected function isValidItem($item): bool;

    public function last()
    {
        $arrayCopy = $this->getArrayCopy();

        return array_pop($arrayCopy);
    }

    /**
     * @throws ValidationException
     */
    public function add($item): void
    {
        if (!$this->isValidItem($item)) {
            throw new ValidationException('Invalid item.');
        }

        $this->append($item);
    }
}
