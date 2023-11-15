<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\OrderItem;

class OrderItemCollection extends NestedOrderItemCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderItem;
    }
}
