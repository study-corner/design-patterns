<?php

declare(strict_types=1);

namespace App\Refactoring\Booking;

class Booking
{
    protected Show $show;
    protected \DateTimeInterface $date;

    public function __construct(Show $show, \DateTimeInterface $date)
    {
        $this->show = $show;
        $this->date = $date;
    }

    public function hasTalkback(): bool
    {
        return
            $this->show->hasOwnProperty('talkback')
            && !$this->isPeakDay();
    }

    public function getBasePrice(): float
    {
        $result = $this->show->getPrice();
        if ($this->isPeakDay()) {
            $result += round($result * 0.15, 2);
        }

        return $result;
    }

    protected function isPeakDay(): bool
    {
        return $this->date->format('N') >= 6;
    }
}
