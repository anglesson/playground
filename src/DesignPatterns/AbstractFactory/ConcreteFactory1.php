<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

class ConcreteFactory1 extends AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB1();
    }
}
