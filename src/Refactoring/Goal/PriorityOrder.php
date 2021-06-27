<?php

declare(strict_types=1);

namespace App\Refactoring\Goal;

class PriorityOrder extends Order
{
    private PriorityPlan $priorityPlan;

    public function __construct(Warehouse $warehouse, PriorityPlan $priorityPlan)
    {
        parent::__construct($warehouse);
        $this->priorityPlan = $priorityPlan;
    }

    public function getDaysToShip(): int
    {
        return $this->priorityPlan->getDaysToShip();
    }
}
