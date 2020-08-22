<?php

namespace App\Behavioral\Strategy\Concept;

interface Compositor
{
    /**
     * @param Coord|null $natural
     * @param Coord|null $stretch
     * @param Coord|null $shrink
     * @param int        $componentCount
     * @param int        $lineWidth
     * @param array      $breaks
     *
     * @return int
     */
    public function compose(
        Coord $natural = null, Coord $stretch = null, Coord $shrink = null,
        int $componentCount = 0, int $lineWidth = 0, array $breaks = []
    ): int;
}