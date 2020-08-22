<?php

namespace App\Structural\Composite\Concept;

class Character extends Glyph
{
    public function draw(Window $window): void
    {
        $window->drawCharacter();
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