<?php

namespace Anglesson\Playground\DesignPatterns\Composite;

class OtherLeaf1 implements Component
{

    public function operation(): void
    {
        echo 'Operation Leaf 1'.PHP_EOL;
    }
}
