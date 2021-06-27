<?php

declare(strict_types=1);

namespace App\Refactoring\Goal;

class Order
{
    private Warehouse $warehouse;
    private ?PriorityDelegate $priorityDelegate;

    public function __construct(Warehouse $warehouse, ?PriorityDelegate $priorityDelegate = null)
    {
        $this->warehouse = $warehouse;
        $this->priorityDelegate = $priorityDelegate;
    }

//    public function getDaysToShip(): int
//    {
//        return $this->warehouse->getDaysToShip();
//    }

    public function getDaysToShip(): int
    {
        return $this->isPriorityDelegate()
            ? $this->priorityDelegate->getDaysToShip()
            : $this->warehouse->getDaysToShip();
    }

    public function isPriorityDelegate(): bool
    {
        return null !== $this->priorityDelegate;
    }
}
