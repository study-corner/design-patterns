<?php

declare(strict_types=1);

namespace App\Refactoring\Booking;

class PremiumBooking extends Booking
{
    private Extras $extras;

    public function __construct(Show $show, \DateTimeInterface $date, Extras $extras)
    {
        parent::__construct($show, $date);
        $this->extras = $extras;
    }

    public function hasTalkback(): bool
    {
        return $this->show->hasOwnProperty('talkback');
    }

    public function getBasePrice(): float
    {
        return round(parent::getBasePrice() + $this->extras->getPremiumFee());
    }

    public function hasDinner(): bool
    {
        return $this->extras->hasOwnProperty('dinner')
            && !$this->isPeakDay();
    }
}
