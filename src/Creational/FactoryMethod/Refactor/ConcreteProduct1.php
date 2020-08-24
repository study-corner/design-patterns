<?php

namespace App\Creational\FactoryMethod\Refactor;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return '{Result of the ConcreteProduct1}';
    }
}