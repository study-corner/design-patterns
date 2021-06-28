<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class AfricanSwallow extends Bird
{
    private ?int $numberOfCoconut;

    public function __construct(BirdData $data)
    {
        parent::__construct($data);
        $this->numberOfCoconut = $data->getNumberOfCoconut();
    }

    public function getAirSpeedVelocity(): int
    {
        return 40 - 2 * $this->numberOfCoconut;
    }
}
