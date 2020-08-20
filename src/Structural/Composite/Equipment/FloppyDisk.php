<?php

namespace App\Structural\Composite\Equipment;

class FloppyDisk extends Equipment
{
    public function wattPower(): int
    {
        return 1;
    }

    public function netPrice(): int
    {
        return 50;
    }

    public function discountPrice(): int
    {
        return 25;
    }
}