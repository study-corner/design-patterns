<?php

namespace App\Command\Creational\FactoryMethod;

use App\Behavioral\Strategy\Refactor\ConcreteStrategyA;
use App\Behavioral\Strategy\Refactor\ConcreteStrategyB;
use App\Behavioral\Strategy\Refactor\Context;
use App\Creational\FactoryMethod\Refactor\ConcreteCreator1;
use App\Creational\FactoryMethod\Refactor\ConcreteCreator2;
use App\Creational\FactoryMethod\Refactor\Creator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RefactorCommand extends Command
{
    public static string $name = 'creational:factory-method:refactor';

    private OutputInterface $output;

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;

        $output->writeln('App: Launched with the ConcreteCreator1.');
        $this->clientCode(new ConcreteCreator1());
        $output->writeln('');

        $output->writeln('App: Launched with the ConcreteCreator2.');
        $this->clientCode(new ConcreteCreator2());
        $output->writeln('');

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }

    private function clientCode(Creator $creator): void
    {
        $this->output->writeln(sprintf('Client: I\'m not aware of the creator\'s class, but it still works. %s', $creator->someOperation()));
    }
}