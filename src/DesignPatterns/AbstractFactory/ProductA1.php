<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ProductA1 extends AbstractProductA
{
    public function sayHello(): void
    {
        echo 'Hello! I`m a ProductA1' . PHP_EOL;
    }
}
