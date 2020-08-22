<?php

namespace App\Command\Behavioral\Strategy;

use App\Behavioral\Strategy\Concept\ArrayCompositor;
use App\Behavioral\Strategy\Concept\Composition;
use App\Behavioral\Strategy\Concept\SimpleCompositor;
use App\Behavioral\Strategy\Concept\TeXCompositor;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConceptCommand extends Command
{
    public static string $name = 'behavioral:strategy:concept';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $quick = new Composition(new SimpleCompositor());
        $slick = new Composition(new TeXCompositor());
        $iconic = new Composition(new ArrayCompositor());

        $quick->repair();
        $slick->repair();
        $iconic->repair();

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }
}