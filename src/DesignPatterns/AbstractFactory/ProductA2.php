<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ProductA2 extends AbstractProductA
{
    public function sayHello(): void
    {
        echo 'Hello! I`m a ProductA2' . PHP_EOL;
    }
}
