<?php

namespace App\TDD\Dollar;

class Dollar
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(object $object): bool
    {
        return $this->amount == $object->amount;
    }
}
