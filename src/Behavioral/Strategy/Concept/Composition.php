<?php

namespace App\Behavioral\Strategy\Concept;

class Composition
{
    private Compositor $compositor;
    /**
     * @var \SplObjectStorage|Component[]
     */
    private \SplObjectStorage $components;
    private int $componentCount = 0;
    private int $lineWidth = 0;
    private int $lineBreaks = 0;
    private int $lineCount = 0;

    public function __construct(Compositor $compositor)
    {
        $this->compositor = $compositor;
    }

    public function repair(): void
    {
        $natural = new Coord();
        $stretchability = new Coord();
        $shrinkability = new Coord();
        $componentCount = 0;
        $breaks = 0;

        $breakCounts = $this->compositor->compose(
            $natural, $stretchability, $shrinkability,
            $componentCount, $this->lineWidth
        );
    }
}