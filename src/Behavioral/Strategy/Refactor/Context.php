<?php

namespace App\Behavioral\Strategy\Refactor;

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class Context
{
    private Strategy $strategy;
    private OutputInterface $output;
    private array $data = ['c', 'a', 'd', 'b', 'e'];

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
        $this->output = new ConsoleOutput();
    }

    public function setStrategy(Strategy $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }

    public function doSomeBusinessLogic(): void
    {
        $this->output->writeln('Context: Sorting data using the strategy (not sure how it\'ll do it)');

        $result = $this->strategy->doAlgorithm($this->data);
        $this->output->writeln(implode(',', $result));
        $this->output->writeln('');
    }
}