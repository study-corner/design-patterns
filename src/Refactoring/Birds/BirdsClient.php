<?php

declare(strict_types=1);

namespace App\Refactoring\Birds;

class BirdsClient
{
    public function createBird(BirdData $data): Bird
    {
        switch ($data->getType()) {
            case 'EuropeanSwallow':
                return new EuropeanSwallow($data);
            case 'AfricanSwallow':
                return new AfricanSwallow($data);
            case 'NorwegianBlueParrot':
                return new NorwegianBlueParrot($data);
            default:
                return new Bird($data);
        }
    }
}
