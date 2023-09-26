<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\Product;

final class ProductCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Product;
    }
}
