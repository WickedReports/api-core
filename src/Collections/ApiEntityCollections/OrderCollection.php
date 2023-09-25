<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\Order;

final class OrderCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Order;
    }
}