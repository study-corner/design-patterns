<?php

namespace App\Structural\Composite\Equipment;

class CompositeEquipment extends Equipment
{
    public function add(Equipment $equipment): void
    {
        $this->children->attach($equipment);
    }

    public function remove(Equipment $equipment): void
    {
        $this->children->detach($equipment);
    }

    public function wattPower(): int
    {
        $total = 0;

        foreach ($this->children as $child) {
            $total += $child->wattPower();
        }

        return $total;
    }

    public function netPrice(): int
    {
        $total = 0;

        foreach ($this->children as $child) {
            $total += $child->netPrice();
        }

        return $total;
    }

    public function discountPrice(): int
    {
        $total = 0;

        foreach ($this->children as $child) {
            $total += $child->discountPrice();
        }

        return $total;
    }
}