<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\NestedOrderPayment;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

class NestedOrderPaymentCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof NestedOrderPayment;
    }
}
