<?php

declare(strict_types=1);

namespace App\Tests\Refactoring;

use App\Refactoring\Booking;
use App\Refactoring\Extras;
use App\Refactoring\PremiumBooking;
use App\Refactoring\Show;
use PHPUnit\Framework\TestCase;

class PremiumBookingTest extends TestCase
{
    /**
     * @dataProvider hasTalkBackProvider
     * @param array $properties
     * @param bool $expected
     */
    public function testHasTalkback(array $properties, bool $expected)
    {
        $show = new Show(2.9, $properties);
        $date = new \DateTime();
        $extras = new Extras();
        $booking = new PremiumBooking($show, $date, $extras);
        $this->assertEquals($expected, $booking->hasTalkback());
    }

    public function hasTalkBackProvider(): array
    {
        $hasTalkback = [
            'talkback' => true
        ];

        return [
            'has talkback property' => [$hasTalkback, true],
            'dont have talkback property' => [[], false],
        ];
    }

    public function testGetBasePrice()
    {
        $extras = new Extras();
        $show = new Show(10);

        $date = new \DateTime('2021-06-25');
        $booking = new PremiumBooking($show, $date, $extras);
        $this->assertEquals(13, $booking->getBasePrice());

        $date = new \DateTime('2021-06-26');
        $booking = new PremiumBooking($show, $date, $extras);
        $this->assertEquals(14, $booking->getBasePrice());
    }

    /**
     * @dataProvider hasDinnerProvider
     * @param array $properties
     * @param \DateTimeInterface $date
     * @param bool $expected
     */
    public function testHasDinner(array $properties, \DateTimeInterface $date, bool $expected)
    {
        $show = new Show(2.9, $properties);
        $extras = new Extras($properties);
        $booking = new PremiumBooking($show, $date, $extras);
        $this->assertEquals($expected, $booking->hasDinner());
    }

    public function hasDinnerProvider(): array
    {
        $properties = [
            'dinner' => true
        ];

        return [
            'has dinner property' => [$properties, new \DateTime('2021-06-25'), true],
            'dont have dinner property' => [[], new \DateTime('2021-06-26'), false],
        ];
    }
}
