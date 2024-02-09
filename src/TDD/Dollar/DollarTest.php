<?php

namespace App\TDD\Dollar;

use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function testMutiplication()
    {
        $five = new Dollar(5);

        self::assertEquals(new Dollar(10), $five->times(2));
        self::assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
