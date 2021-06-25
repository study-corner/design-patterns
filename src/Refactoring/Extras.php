<?php

declare(strict_types=1);

namespace App\Refactoring;

class Extras extends ValueObject
{
    private float $premiumFee = 2.5;

    public function __construct(array $properties = [])
    {
        parent::__construct($properties);
    }

    public function getPremiumFee(): float
    {
        return $this->premiumFee;
    }
}
