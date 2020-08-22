<?php

namespace App\Command\Behavioral\Strategy;

use App\Behavioral\Strategy\Refactor\ConcreteStrategyA;
use App\Behavioral\Strategy\Refactor\ConcreteStrategyB;
use App\Behavioral\Strategy\Refactor\Context;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RefactorCommand extends Command
{
    public static string $name = 'behavioral:strategy:refactor';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $strategyA = new ConcreteStrategyA();
        $strategyB = new ConcreteStrategyB();

        $context = new Context($strategyA);
        $context->doSomeBusinessLogic();

        $context->setStrategy($strategyB);
        $context->doSomeBusinessLogic();

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }
}