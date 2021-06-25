<?php

declare(strict_types=1);

namespace App\Tests\Refactoring;

use App\Refactoring\PremiumBookingClient;
use PHPUnit\Framework\TestCase;

class PremiumBookingClientTest extends TestCase
{
    public function testCalculatePrice()
    {
        $bookingClient = new PremiumBookingClient();
        $this->assertEquals(14, $bookingClient->calculatePrice());
    }
}
