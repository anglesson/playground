<?php

namespace Anglesson\Playground\DesignPatterns\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createProductA(): AbstractProductA;

    abstract public function createProductB(): AbstractProductB;
}

