<?php

namespace App\Structural\Composite\Equipment;

abstract class Equipment
{
    private string $name;
    protected int $wattPower = 0;
    protected int $netPrice = 0;
    protected int $discountPrice = 0;
    protected \SplObjectStorage $children;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->children = new \SplObjectStorage();
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function wattPower(): int;

    abstract public function netPrice(): int;

    abstract public function discountPrice(): int;

    abstract public function namesList(): string;

    public function add(Equipment $equipment): void
    {

    }

    public function remove(Equipment $equipment): void
    {

    }

    public function setWattPower(int $wattPower): self
    {
        $this->wattPower = $wattPower;

        return $this;
    }

    public function setNetPrice(int $netPrice): self
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    public function setDiscountPrice(int $discountPrice): self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }
}