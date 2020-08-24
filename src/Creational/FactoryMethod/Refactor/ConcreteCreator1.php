<?php

namespace App\Creational\FactoryMethod\Refactor;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}