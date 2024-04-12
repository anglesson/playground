<?php

namespace App\TDD\Dollar;

use PHPUnit\Framework\TestCase;

class DollarTest extends TestCase
{
    public function testMutiplication()
    {
        $five = Money::dollar(5);

        self::assertEquals(Money::dollar(10), $five->times(2));
        self::assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        self::assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        self::assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testCurrency()
    {
        self::assertEquals("USD", Money::dollar(1)->currency());
        self::assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testSimpleAddition()
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        self::assertEquals(Money::dollar(10), $reduced);
    }

    public function testPlusReturnsSum()
    {
        $five = Money::dollar(5);
        $result = $five->plus($five);
        $sum = $result;

        self::assertEquals($five, $sum->augend);
        self::assertEquals($five, $sum->augend);
    }

    public function testReduceSum()
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, "USD");
        self::assertEquals(Money::dollar(7), $result);
    }

    public function testReduceMoney()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), "USD");
        self::assertEquals(Money::dollar(1), $result);
    }
}
