<?php

namespace Choult\UTDR;

class MultiplierTest extends \PHPUnit\Framework\TestCase
{
    public function testMultiply()
    {
        $multiplier = new Multiplier();

        $this->assertEquals(10, $multiplier->multiply(2, 5));
    }
}
