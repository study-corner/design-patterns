<?php

declare(strict_types=1);

namespace App\Refactoring\Goal;

class PriorityPlan
{
    private int $daysToShip = 3;

    public function getDaysToShip(): int
    {
        return $this->daysToShip;
    }
}
