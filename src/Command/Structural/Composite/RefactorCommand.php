<?php

namespace App\Command\Structural\Composite;

use App\Structural\Composite\Refactor\Component;
use App\Structural\Composite\Refactor\Composite;
use App\Structural\Composite\Refactor\Leaf;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RefactorCommand extends Command
{
    public static string $name = 'structural:refactor
    ';

    private OutputInterface $output;

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;

        $simple = new Leaf();
        $output->writeln('Client: I\'ve got a simple component:');
        $this->clientCode($simple);

        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf());
        $branch1->add(new Leaf());
        $branch2 = new Composite();
        $branch2->add(new Leaf());
        $tree->add($branch1);
        $tree->add($branch2);
        $output->writeln('Client: Now I\'ve got a composite tree:');
        $this->clientCode($tree);

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }

    private function clientCode(Component $component): void
    {
        $result = "RESULT: ".$component->operation();

        $this->output->writeln($result);
    }
}