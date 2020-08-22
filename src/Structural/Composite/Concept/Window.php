<?php

namespace App\Structural\Composite\Concept;

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class Window
{
    private OutputInterface $output;

    public function __construct()
    {
        $this->output = new ConsoleOutput();
    }

    public function drawCharacter(): void
    {
        $this->output->writeln('Character');
    }

    public function drawRectangle(): void
    {
        $this->output->writeln('Rectangle');
    }

    public function drawPolygon(): void
    {
        $this->output->writeln('Polygon');
    }
}