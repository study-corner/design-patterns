<?php

namespace App\Structural\Composite\Equipment;

class Cabinet extends Equipment
{
    public function wattPower(): int
    {
        return 5;
    }

    public function netPrice(): int
    {
        return 150;
    }

    public function discountPrice(): int
    {
        return 25;
    }
}