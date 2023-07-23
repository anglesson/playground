<?php

namespace Anglesson\Playground\DesignPatterns\FactoryMethod;

abstract class Creator
{
    public function anyOperation(): void
    {
        echo 'any operation'.PHP_EOL;
    }

    abstract function factoryMethodForProduct(): Product;
}
