<?php

declare(strict_types=1);

namespace Choult\UTDR;

class AdderTest extends \PHPUnit\Framework\TestCase
{
    public function addProvider(): array
    {
        return [
            [1, 2, 3],
            [5, 6, 11],
            [-1, 5, 4],
            [0, 0, 0]
        ];
    }

    /**
     * @dataProvider addProvider
     */
    public function testAdd(int $a, int $b, int $expected)
    {
        $adder = new Adder();
        $this->assertEquals($expected, $adder->add($a, $b));
    }
}
