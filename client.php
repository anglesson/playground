<?php

require __DIR__ . '/vendor/autoload.php';

use Anglesson\Playground\DesignPatterns\AbstractFactory\ConcreteFactory1;
use Anglesson\Playground\DesignPatterns\AbstractFactory\ConcreteFactory2;

$factory1 = new ConcreteFactory1();
$factory2 = new ConcreteFactory2();

$factory1->createProductA()->sayHello();
$factory1->createProductB()->sayHello();

$factory2->createProductA()->sayHello();
$factory2->createProductB()->sayHello();
