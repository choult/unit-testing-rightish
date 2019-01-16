<?php

namespace Choult\UTDR;

class AdderTest extends \PHPUnit\Framework\TestCase
{
    public function testAddOneTwoEqualsThree()
    {
        $adder = new Adder();
        $this->assertEquals(3, $adder->add(1, 2));
        $this->assertSame(3, $adder->add(1, 2));
        $this->assertGreaterThan(2, $adder->add(1, 2));
    }

    public function testAddFiveSixEqualsEleven()
    {
        $adder = new Adder();
        $this->assertSame(11, $adder->add(5, 6));
    }

    public function testAddMinusOneFiveEqualsFour()
    {
        $adder = new Adder();
        $this->assertSame(4, $adder->add(-1, 5));
    }

    public function testAddZeroZeroEqualsZero()
    {
        $adder = new Adder();
        $this->assertSame(0, $adder->add(0, 0));
    }
}
