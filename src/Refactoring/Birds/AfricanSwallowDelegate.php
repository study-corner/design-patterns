<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class AfricanSwallowDelegate implements SpeciesDelegate
{
    private ?int $numberOfCoconut;

    public function __construct(BirdData $data)
    {
        $this->numberOfCoconut = $data->getNumberOfCoconut();
    }

    public function getAirSpeedVelocity(): int
    {
        return 40 - 2 * $this->numberOfCoconut;
    }
}
