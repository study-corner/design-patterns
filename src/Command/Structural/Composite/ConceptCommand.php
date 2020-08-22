<?php

namespace App\Command\Structural\Composite;

use App\Structural\Composite\Concept\Character;
use App\Structural\Composite\Concept\Polygon;
use App\Structural\Composite\Concept\Rectangle;
use App\Structural\Composite\Concept\Row;
use App\Structural\Composite\Concept\Window;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConceptCommand extends Command
{
    public static string $name = 'structural:concept';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $letterA = new Character();
        $rectangle = new Rectangle();
        $polygon = new Polygon();
        $letterB = new Character();
        $row = new Row();
        $row->insert($letterA, 3);
        $row->insert($rectangle, 1);
        $row->insert($polygon, 3);
        $row->insert($letterB, 2);

        $row->draw(new Window());

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }
}