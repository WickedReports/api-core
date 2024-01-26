<?php

namespace Wickedreports\ApiCore\Tests\Collections;

use PHPUnit\Framework\TestCase;
use Wickedreports\ApiCore\Collections\AbstractValidCollection;

class AbstractValidCollectionTest extends TestCase
{
    public function testAdd(): void
    {
        $collection = $this->getMockForAbstractClass(
            AbstractValidCollection::class
        );
        $collection->method('isValidItem')->willReturn(true);

        foreach (range(1, 5) as $value) {
            $collection->add($value);
            $this->assertEquals($value, $collection->last());
        }
    }

    public function testAttempts(): void
    {
        $collection = $this->getMockForAbstractClass(
            AbstractValidCollection::class
        );
        $collection->method('isValidItem')->willReturn(true);
        $data = range(1, 5);

        foreach ($data as $value) {
            $collection->add($value);
        }
        $collectionCount = $collection->count();

        for ($attempt = 0; $attempt < $collectionCount; $attempt++) {
            foreach ($collection as $key => $item) {
                $this->assertEquals($data[$key], $item);
                // emulate only one collection processing of each attempt
                $collection->offsetUnset($attempt);
            }
        }

        $this->assertCount(0, $collection);
    }
}
