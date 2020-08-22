<?php

namespace App\Behavioral\Strategy\Refactor;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}