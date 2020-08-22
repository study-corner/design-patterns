<?php

namespace App\Behavioral\Strategy\Refactor;

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}