<?php

namespace App\Structural\Composite\Concept;

abstract class Glyph
{
    abstract public function draw(Window $window): void;

    abstract public function bounds(Rect $rect): void;

    abstract public function intersects(Point $point): bool;

    public function insert(Glyph $glyph, int $position): void
    {

    }

    public function remove(Glyph $glyph): void
    {

    }

    abstract public function child(int $position): Glyph;

    abstract public function parent(): Glyph;
}