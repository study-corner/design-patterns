<?php

declare(strict_types=1);

namespace App\Refactoring;

class Show extends ValueObject
{
    private float $price;

    public function __construct(float $price = 0.0, array $properties = [])
    {
        parent::__construct($properties);
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
