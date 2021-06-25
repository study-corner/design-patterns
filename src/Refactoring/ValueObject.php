<?php

declare(strict_types=1);

namespace App\Refactoring;

class ValueObject
{
    private array $properties;

    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
    }

    public function hasOwnProperty(string $property): bool
    {
        return array_key_exists($property, $this->properties);
    }
}
