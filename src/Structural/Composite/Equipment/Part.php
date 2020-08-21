<?php

namespace App\Structural\Composite\Equipment;

class Part extends Equipment
{
    public function wattPower(): int
    {
        return $this->wattPower;
    }

    public function netPrice(): int
    {
        return $this->netPrice;
    }

    public function discountPrice(): int
    {
        return $this->discountPrice;
    }

    public function namesList(): string
    {
        return $this->getName();
    }
}