<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\OrderPayment;

final class OrderPaymentCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderPayment;
    }
}