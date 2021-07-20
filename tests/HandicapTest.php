<?php

use GolfHandicap\Handicap;
use PHPUnit\Framework\TestCase;

class HandicapTest extends TestCase
{

    public function testGetDifferential()
    {
        $scores = [75, 83, 105, 85, 95, 83];
        $handicap = new Handicap($scores);

        $this->assertEquals(1,$handicap->getDifferential());

        array_push($scores,88);
        $handicap = new Handicap($scores);
        $this->assertEquals(2,$handicap->getDifferential());
    }

    public function testGetHandicap()
    {
        $scores = [75, 83, 105, 85, 95, 83];
        $handicap = new Handicap($scores);
        $this->assertEquals(12.16, $handicap->getHandicap());
    }
}
