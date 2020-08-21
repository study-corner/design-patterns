<?php

namespace App\Structural\Composite\Equipment;

class Bus extends CompositeEquipment
{
    protected int $wattPower = 1;
    protected int $netPrice = 70;
    protected int $discountPrice = 65;
}