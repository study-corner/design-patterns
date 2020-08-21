<?php

namespace App\Structural\Composite\Equipment;

class Card extends Part
{
    protected int $wattPower = 1;
    protected int $netPrice = 250;
    protected int $discountPrice = 225;
}