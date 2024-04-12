<?php

namespace App\TDD\Dollar;

interface Expression
{
    public function reduce(string $to): Money;
}