<?php

declare(strict_types=1);

namespace App\Refactoring;

class BookingClient
{
    public function calculatePrice(): float
    {
        $show = new Show(10);
        $date = new \DateTime('2021-06-26');

        $booking = $this->createBooking($show, $date);

        return $booking->getBasePrice();
    }

    private function createBooking(Show $show, \DateTime $date): Booking
    {
        return new Booking($show, $date);
    }
}
