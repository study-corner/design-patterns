<?php

declare(strict_types=1);

namespace App\Refactoring;

class PremiumBookingClient
{
    public function calculatePrice(): float
    {
        $show = new Show(10);
        $date = new \DateTime('2021-06-26');
        $extras = new Extras();
        $booking = $this->createPremiumBooking($show, $date, $extras);

        return $booking->getBasePrice();
    }

    private function createPremiumBooking(Show $show, \DateTime $date, Extras $extras): PremiumBooking
    {
        return new PremiumBooking($show, $date, $extras);
    }
}
