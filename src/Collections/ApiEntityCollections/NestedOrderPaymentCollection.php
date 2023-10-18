<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\NestedOrderPayment;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class NestedOrderPaymentCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof NestedOrderPayment;
    }
}
