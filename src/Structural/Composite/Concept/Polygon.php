<?php

namespace App\Structural\Composite\Concept;

class Polygon extends Glyph
{
    public function draw(Window $window): void
    {
        $window->drawPolygon();
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