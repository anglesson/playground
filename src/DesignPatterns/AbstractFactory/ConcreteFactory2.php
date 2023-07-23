<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ConcreteFactory2 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}
