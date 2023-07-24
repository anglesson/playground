<?php

namespace Anglesson\Playground\DesignPatterns\Composite;

class Composite implements Component
{
    /**@var array<Component> $components */
    public array $components = [];

    public function __construct(array $components)
    {
        $this->components = $components;
    }

    public function add(Component $component): void
    {
        $this->components[] = $component;
    }

    public function getChild(int $index): mixed
    {
        $array = array_values($this->components);
        return $array[$index];
    }

    public function operation(): void
    {
        array_map(fn(Component $component) => $component->operation(), $this->components);
    }

    public function remove(int $index): void
    {
        $this->components = array_slice($this->components, $index, 1);
    }
}
