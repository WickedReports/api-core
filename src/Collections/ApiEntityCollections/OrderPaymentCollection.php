<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\OrderPayment;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class OrderPaymentCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof OrderPayment;
    }
}
