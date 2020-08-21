<?php

namespace App\Structural\Composite\Equipment;

class Chassis extends CompositeEquipment
{
    protected int $wattPower = 1;
    protected int $netPrice = 175;
    protected int $discountPrice = 50;
}