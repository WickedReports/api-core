<?php

namespace Wickedreports\ApiCore\Collections\ApiEntityCollections;

use Wickedreports\ApiCore\Collections\AbstractValidCollection;
use Wickedreports\ApiCore\ApiEntity\Contact;

final class ContactCollection extends AbstractValidCollection
{
    protected function isValidItem($item): bool
    {
        return $item instanceof Contact;
    }
}
