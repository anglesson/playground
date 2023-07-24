<?php

require __DIR__ . '/vendor/autoload.php';

use Anglesson\Playground\DesignPatterns\AbstractFactory\ConcreteFactory1;
use Anglesson\Playground\DesignPatterns\AbstractFactory\ConcreteFactory2;
use Anglesson\Playground\DesignPatterns\Composite\Composite;
use Anglesson\Playground\DesignPatterns\Composite\Leaf;
use Anglesson\Playground\DesignPatterns\Composite\OtherLeaf1;
use Anglesson\Playground\DesignPatterns\Composite\OtherLeaf2;
use Anglesson\Playground\DesignPatterns\FactoryMethod\ConcreteCreator;

# Abstract Factory
$factory1 = new ConcreteFactory1();
$factory2 = new ConcreteFactory2();

$factory1->createProductA()->sayHello();
$factory1->createProductB()->sayHello();

$factory2->createProductA()->sayHello();
$factory2->createProductB()->sayHello();

# Factory Method Structure
$concreteFactory = new ConcreteCreator();
$concreteFactory->anyOperation();

# Composite
$component = new Leaf(); // You can use one Component
$component = new Composite([new OtherLeaf1(), new OtherLeaf2()]); // OR a group of Components
$component->operation(); // This operation will not change
