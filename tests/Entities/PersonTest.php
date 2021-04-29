<?php

namespace Test\Entities;

use App\Entities\Book;
use App\Entities\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testClassName()
    {
        $person = new Person;
        $this->assertInstanceOf(Person::class, $person);
    }
}
