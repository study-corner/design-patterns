<?php

namespace App\Creational\FactoryMethod\Refactor;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}