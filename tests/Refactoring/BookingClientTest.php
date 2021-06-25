<?php

declare(strict_types=1);

namespace App\Tests\Refactoring;

use App\Refactoring\BookingClient;
use PHPUnit\Framework\TestCase;

class BookingClientTest extends TestCase
{
    public function testCalculatePrice()
    {
        $bookingClient = new BookingClient();
        $this->assertEquals(11.5, $bookingClient->calculatePrice());
    }
}
