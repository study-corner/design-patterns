<?php

namespace App\Structural\Composite\Equipment;

abstract class Equipment
{
    private string $name;

    abstract public function add(Equipment $equipment);
    abstract public function remove(Equipment $equipment);
}