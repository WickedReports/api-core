<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\Product;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

final class ProductCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Product;
    }
}
