<?php

namespace Choult\UTDR;

class AdderTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd12()
    {
        $adder = new Adder();
        $this->assertEquals(3, $adder->add(1, 2));
        $this->assertSame(3, $adder->add(1, 2));
        $this->assertGreaterThan(2, $adder->add(1, 2));
    }
}
