<?php

declare(strict_types=1);

namespace App\Tests\Refactoring\Bird;

use App\Refactoring\Birds\Bird;
use App\Refactoring\Birds\BirdData;
use App\Refactoring\Birds\BirdsClient;
use App\Refactoring\Birds\EuropeanSwallow;
use PHPUnit\Framework\TestCase;

class BirdClientTest extends TestCase
{
    public function testEuropeanSwallow()
    {
        $data = new BirdData('EuropeanSwallow', 'some');
        $birdsClient = new BirdsClient();
        $bird = $birdsClient->createBird($data);
        $this->assertInstanceOf(Bird::class, $bird);
//        $this->assertInstanceOf(EuropeanSwallow::class, $bird);

        $this->assertEquals(35, $bird->getAirSpeedVelocity());
        $this->assertEquals('average', $bird->getPlumage());
    }
}
