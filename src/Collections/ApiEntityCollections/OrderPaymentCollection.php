<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\OrderPayment;

class OrderPaymentCollection extends NestedOrderPaymentCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderPayment;
    }
}
