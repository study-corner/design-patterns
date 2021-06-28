<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class Bird
{
    protected ?string $plumage;
    private string $name;
    protected ?SpeciesDelegate $speciesDelegate = null;

    public function __construct(BirdData $data)
    {
        $this->name = $data->getName();
        $this->plumage = $data->getPlumage();
        $this->speciesDelegate = $this->selectSpeciesDelegate($data);
    }

    private function selectSpeciesDelegate(BirdData $data): ?SpeciesDelegate
    {
        switch ($data->getType()) {
            case 'EuropeanSwallow':
                return new EuropeanSwallowDelegate();
            default:
                return null;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPlumage(): string
    {
        return $this->plumage ?? 'average';
    }

    public function getAirSpeedVelocity(): ?int
    {
        return null !== $this->speciesDelegate
            ? $this->speciesDelegate->getAirSpeedVelocity()
            : null;
    }
}
