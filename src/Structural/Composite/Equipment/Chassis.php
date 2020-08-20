<?php

namespace App\Structural\Composite\Equipment;

class Chassis extends Equipment
{
    public function wattPower(): int
    {
        return 3;
    }

    public function netPrice(): int
    {
        return 175;
    }

    public function discountPrice(): int
    {
        return 50;
    }
}