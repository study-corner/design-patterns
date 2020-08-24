<?php

namespace App\Creational\FactoryMethod\Refactor;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        return 'Creator: The same creator\'s code just worked with ' . $product->operation();
    }
}