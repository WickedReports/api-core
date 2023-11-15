<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\ApiEntity\Contact;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

class ContactCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Contact;
    }
}
