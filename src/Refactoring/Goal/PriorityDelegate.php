<?php

declare(strict_types=1);

namespace App\Refactoring\Goal;

class PriorityDelegate
{
    private PriorityPlan $priorityPlan;

    public function __construct(PriorityPlan $priorityPlan)
    {
        $this->priorityPlan = $priorityPlan;
    }

    public function getDaysToShip(): int
    {
        return $this->priorityPlan->getDaysToShip();
    }
}
