<?php

declare(strict_types=1);

namespace App\Tests\Refactoring;

use App\Refactoring\Booking;
use App\Refactoring\Show;
use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
    /**
     * @dataProvider hasTalkBackProvider
     * @param array $properties
     * @param bool $expected
     */
    public function testHasTalkback(array $properties, bool $expected)
    {
        $show = new Show(2.9, $properties);
        $date = new \DateTime('2021-06-25');
        $booking = new Booking($show, $date);
        $this->assertEquals($expected, $booking->hasTalkback());
    }

    public function testIsNotPeakDay()
    {
        $properties = [
            'talkback' => true
        ];
        $show = new Show(2.9, $properties);
        $date = new \DateTime('2021-06-26');
        $booking = new Booking($show, $date);
        $this->assertFalse($booking->hasTalkback());
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
        $show = new Show(10);
        $date = new \DateTime('2021-06-25');
        $booking = new Booking($show, $date);
        $this->assertEquals(10, $booking->getBasePrice());

        $date = new \DateTime('2021-06-26');
        $booking = new Booking($show, $date);
        $this->assertEquals(11.5, $booking->getBasePrice());
    }
}
