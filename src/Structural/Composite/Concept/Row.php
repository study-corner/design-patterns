<?php

namespace App\Structural\Composite\Concept;

class Row extends Glyph
{
    /**
     * @var Glyph[]|array
     */
    private array $children = [];

    public function getChildren()
    {
        return $this->children;
    }

    public function draw(Window $window): void
    {
        foreach ($this->children as $child) {
            $glyph = current($child);
            $glyph->draw($window);
        }
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
        return $this->children[$position];
    }

    public function parent(): Glyph
    {
        // TODO: Implement parent() method.
    }

    public function insert(Glyph $glyph, int $position): void
    {
        if (isset($this->children[$position])) {
            unset($this->children[$position]);
        }
        $this->children[$position] = [spl_object_hash($glyph) => $glyph];
    }

    public function remove(Glyph $glyph): void
    {
        $glyphHash = spl_object_hash($glyph);
        foreach ($this->children as $position => [$itemHash =>$item]) {
            if ($glyphHash === $itemHash) {
                unset($this->children[$position]);
                break;
            }
        }
    }
}