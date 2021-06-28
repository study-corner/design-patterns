<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class NorwegianBlueParrot extends Bird
{
    private ?int $voltage;
    private bool $isNailed;

    public function __construct(BirdData $data)
    {
        parent::__construct($data);
        $this->voltage = $data->getVoltage();
        $this->isNailed = $data->isNailed();
    }

    public function getPlumage(): string
    {
        if ($this->voltage > 100) {
            return 'scorched';
        } else {
            return $this->plumage ?? 'beautiful';
        }
    }

    public function getAirSpeedVelocity(): int
    {
        return ($this->isNailed)
            ? 0
            : 10 + $this->voltage / 10;
    }
}
