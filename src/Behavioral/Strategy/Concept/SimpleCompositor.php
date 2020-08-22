<?php

namespace App\Behavioral\Strategy\Concept;

use Symfony\Component\Console\Output\ConsoleOutput;

class SimpleCompositor extends AbstractCompositor
{
    public function compose(Coord $natural = null, Coord $stretch = null, Coord $shrink = null, int $componentCount = 0, int $lineWidth = 0, array $breaks = []): int
    {
        $output = new ConsoleOutput();
        $output->writeln('Simple compositor');

        return 0;
    }
}