<?php

namespace App\Command\Structural\Composite;

use App\Structural\Composite\Equipment\Bus;
use App\Structural\Composite\Equipment\Cabinet;
use App\Structural\Composite\Equipment\Card;
use App\Structural\Composite\Equipment\Chassis;
use App\Structural\Composite\Equipment\Equipment;
use App\Structural\Composite\Equipment\FloppyDisk;
use App\Structural\Composite\Equipment\Hdd;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class EquipmentCommand extends Command
{
    public static string $name = 'structural:equipment';

    private OutputInterface $output;

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;

        $cabinet = new Cabinet('PC Cabinet');
        $chassis = new Chassis('PC chassis');
        $bus = new Bus('MCA Bus');
        $hdd = new Hdd('HDD 512GB');
        $card = new Card('16Mbs Token Ring');
        $floppyDisk = new FloppyDisk('3.5in Floppy');

        $cabinet->add($chassis);
        $bus->add($card);
        $chassis->add($bus);
        $chassis->add($hdd);
        $chassis->add($floppyDisk);

        $this->printOutput($cabinet);

        $cardImproved = new Card('32Mbs gforce');
        $cardImproved
            ->setWattPower(2)
            ->setNetPrice(255)
            ->setDiscountPrice(235);

        $bus->remove($card);
        $bus->add($cardImproved);

        $this->printOutput($cabinet);

        return 0;
    }

    protected function configure(): void
    {
        $this->setName(self::$name);
    }

    private function printOutput(Equipment $equipment): void
    {
        $wattPower = $equipment->wattPower();
        $netPrice = $equipment->netPrice();
        $discountPrice = $equipment->discountPrice();

        $this->output->writeln($equipment->namesList());
        $this->output->writeln("Watt: $wattPower");
        $this->output->writeln("Net price: $netPrice");
        $this->output->writeln("Discount price: $discountPrice");
        $this->output->writeln('');
    }
}