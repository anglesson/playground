<?php

namespace Anglesson\Playground\DesignPatterns\Composite;

class Leaf implements Component
{
    public function operation(): void
    {
        echo 'Operation Leaf'.PHP_EOL;
    }
}
