<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\Payment;

final class PaymentCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Payment;
    }
}