<?php

namespace App\Structural\Composite\Concept;

class Rectangle extends Glyph
{
    public function draw(Window $window): void
    {
        $window->drawRectangle();
    }

    public function bounds(Rect $rect): void
    {

    }

    public function intersects(Point $point): bool
    {
        return false;
    }

    public function child(int $position): Glyph
    {

    }

    public function parent(): Glyph
    {

    }
}