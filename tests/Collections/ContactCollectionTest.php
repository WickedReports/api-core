<?php

namespace Wickedreports\ApiCore\Tests\Collections;

use PHPUnit\Framework\TestCase;
use Wickedreports\ApiCore\ApiEntity\Contact;
use Wickedreports\ApiCore\Collections\ApiEntityCollections\ContactCollection;

class ContactCollectionTest extends TestCase
{
    public function testIterator(): void
    {
        $collection = new ContactCollection(
            $this->contactIterator()
        );

        $this->assertCount(1, $collection);

    }

    private function contactIterator(): \Iterator
    {
        yield $this->createMock(Contact::class);
    }
}
