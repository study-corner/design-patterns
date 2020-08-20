<?php

namespace App\Structural\Composite\Equipment;

abstract class Equipment
{
    private string $name;
    protected \SplObjectStorage $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    abstract public function wattPower(): int;

    abstract public function netPrice(): int;

    abstract public function discountPrice(): int;

    public function add(Equipment $equipment): void
    {

    }

    public function remove(Equipment $equipment): void
    {

    }
}