<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\Order;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class OrderCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Order;
    }
}
