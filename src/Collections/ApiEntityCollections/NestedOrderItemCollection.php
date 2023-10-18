<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\NestedOrderItem;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class NestedOrderItemCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof NestedOrderItem;
    }
}
