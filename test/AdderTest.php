<?php

declare(strict_types=1);

namespace Choult\UTDR;

class AdderTest extends \PHPUnit\Framework\TestCase
{
    public function addProvider(): array
    {
        return [
            'One and two should be three' => [
                'a' => 1,
                'b' => 2,
                'expected' => 3
            ],
            'Five and six should be eleven' => [
                'a' => 5,
                'b' => 6,
                'expected' => 11
            ],
            'Minus one and five should be four' => [
                'a' => -1,
                'b' => 5,
                'expected' => 4
            ],
            'Zero and zero should be zero' => [
                'a' => 0,
                'b' => 0,
                'expected' => 0
            ]
        ];
    }

    /**
     * @dataProvider addProvider
     */
    public function testAdd(int $a, int $b, int $expected)
    {
        $adder = new Adder('My adder');
        $this->assertEquals($expected, $adder->add($a, $b));
    }
}
