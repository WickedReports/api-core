<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\OrderItem;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class OrderItemCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderItem;
    }
}
