<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class EuropeanSwallow extends Bird
{
    public function __construct(BirdData $data)
    {
        parent::__construct($data);
    }

    public function getAirSpeedVelocity(): int
    {
        return $this->speciesDelegate->getAirSpeedVelocity();
    }
}
