<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

interface SpeciesDelegate
{
    public function getAirSpeedVelocity(): int;
}
