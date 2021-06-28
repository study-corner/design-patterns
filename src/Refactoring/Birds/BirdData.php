<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class BirdData
{
    private string $type;
    private string $name;
    private ?string $plumage;
    private ?int $numberOfCoconut;
    private ?int $voltage;
    private bool $isNailed;

    public function __construct(
        string $type,
        string $name,
        ?string $plumage = null,
        int $numberOfCoconut = 0,
        int $voltage = 0,
        bool $isNailed = false
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->plumage = $plumage;
        $this->numberOfCoconut = $numberOfCoconut;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPlumage(): ?string
    {
        return $this->plumage;
    }

    public function getNumberOfCoconut(): ?int
    {
        return $this->numberOfCoconut;
    }

    public function getVoltage(): ?int
    {
        return $this->voltage;
    }

    public function isNailed(): bool
    {
        return $this->isNailed;
    }
}
