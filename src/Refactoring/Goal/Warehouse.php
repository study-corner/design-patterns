<?php

declare(strict_types=1);

namespace App\Refactoring\Goal;

class Warehouse
{
    private int $daysToShip = 14;

    public function getDaysToShip(): int
    {
        return $this->daysToShip;
    }
}
