<?php

namespace Anglesson\Playground\DesignPatterns\FactoryMethod;

class ConcreteCreator extends Creator
{
    public function factoryMethodForProduct(): Product
    {
        return new ConcreteProduct();
    }
}
