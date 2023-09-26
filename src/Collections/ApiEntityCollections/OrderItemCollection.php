<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\OrderItem;

final class OrderItemCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderItem;
    }
}
