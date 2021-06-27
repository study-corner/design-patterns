<?php

declare(strict_types=1);

namespace App\Tests\Refactoring\Booking;

use App\Refactoring\Booking\PremiumBookingClient;
use PHPUnit\Framework\TestCase;

class PremiumBookingClientTest extends TestCase
{
    public function testCalculatePrice()
    {
        $bookingClient = new PremiumBookingClient();
        $this->assertEquals(14, $bookingClient->calculatePrice());
    }
}
