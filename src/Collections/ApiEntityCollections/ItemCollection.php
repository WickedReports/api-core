<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\Item;

final class ItemCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Item;
    }
}
