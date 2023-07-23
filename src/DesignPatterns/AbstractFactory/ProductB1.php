<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ProductB1 extends AbstractProductB
{
    public function sayHello(): void
    {
        echo 'Hello! I`m a ProductB1' . PHP_EOL;
    }
}
