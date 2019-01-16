<?php

namespace Choult\UTDR;

class MultiplierTest extends \PHPUnit\Framework\TestCase
{
    public function testMultiply()
    {
        $adder = $this->createMock(Adder::class);
        $adder->expects($this->once())
            ->method('add')
            ->with(0, 2)
            ->will($this->returnValue(2));

        $multiplier = new Multiplier($adder);

        $this->assertEquals(2, $multiplier->multiply(2, 1));
    }

    public function testMultiplyBigger()
    {
        $adder = $this->createMock(Adder::class);
        $adder->expects($this->exactly(5))
            ->method('add')
            ->will(
                $this->returnValueMap(
                    [
                        [0, 2, 2],
                        [2, 2, 4],
                        [4, 2, 6],
                        [6, 2, 8],
                        [8, 2, 10]
                    ]
                )
            );

        $multiplier = new Multiplier($adder);

        $this->assertEquals(10, $multiplier->multiply(2, 5));
    }
}
