<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ProductB2 extends AbstractProductB
{
    public function sayHello(): void
    {
        echo 'Hello! I`m a ProductB2' . PHP_EOL;
    }
}
