<?php

namespace Anglesson\Playground\DesignPatterns\Composite;

class OtherLeaf2 implements Component
{

    public function operation(): void
    {
        echo 'Operation Leaf 2'.PHP_EOL;
    }
}
