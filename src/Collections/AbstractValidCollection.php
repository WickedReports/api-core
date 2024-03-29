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
        parent::__construct();

        foreach ($items as $item) {
            $this->add($item);
        }
    }

    /**
     * Method works as validator per collection element. We can check classname, but we should not deal with
     * field values validations here -> that would go against Single responsibility. Field values validation should be
     * implemented in separate class/service.
     */
    abstract protected function isValidItem($item): bool;

    public function last()
    {
        $last = null;

        foreach ($this as $value) {
            $last = $value;
        }

        return $last;
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
