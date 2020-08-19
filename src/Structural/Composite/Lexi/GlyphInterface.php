<?php

namespace App\Structural\Composite\Lexi;

interface GlyphInterface
{
    public function draw(Window $window);
    public function bounds(Rect $rect);
    public function intersects(Point $point): bool;
    public function insert(GlyphInterface $glyph, int $int);
    public function remove(GlyphInterface $glyph);
    public function child(int $int): GlyphInterface;
    public function parent(int $int): GlyphInterface;
}