<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class EuropeanSwallowDelegate implements SpeciesDelegate
{
    public function getAirSpeedVelocity(): int
    {
        return 35;
    }
}
