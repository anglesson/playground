<?php
namespace App\TDD\Dollar;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($to);
    }
}
