<?php

namespace App\Structural\Composite\Equipment;

class Cabinet extends CompositeEquipment
{
    protected int $wattPower = 1;
    protected int $netPrice = 150;
    protected int $discountPrice = 25;
}