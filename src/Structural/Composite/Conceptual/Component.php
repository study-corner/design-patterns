<?php

namespace App\Structural\Composite\Conceptual;

abstract class Component
{
    protected Component $parent;

    public function getParent(): Component
    {
        return $this->parent;
    }

    public function setParent(Component $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function add(Component $component): void
    {

    }

    public function remove(Component $component): void
    {

    }

    public function isComposite(): bool
    {
        return false;
    }

    abstract public function operation(): string;
}