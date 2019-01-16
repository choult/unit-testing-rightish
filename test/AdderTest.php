<?php

declare(strict_types=1);

namespace Choult\UTDR;

/**
 * @coversDefaultClass \Choult\UTDR\Adder
 */
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
     *
     * @covers ::add
     */
    public function testAdd(int $a, int $b, int $expected)
    {
        $adder = new Adder('My adder');
        $this->assertEquals($expected, $adder->add($a, $b));
    }

    public function constructProvider(): array
    {
        return [
            'My made up name' => [
                'name' => 'Rumplestumpleskin',
            ],
            'Blank name' => [
                'name' => '',
            ]
        ];
    }

    /**
     * @dataProvider constructProvider
     *
     * @covers ::__construct
     */
    public function testConstruct(string $name)
    {
        $adder = new Adder($name);
        $this->assertEquals($name, $adder->getName());
    }

    /**
     * @dataProvider constructProvider
     *
     * @covers ::setName
     * @covers ::getName
     */
    public function testGetSetName(string $name)
    {
        $adder = new Adder('should never see');
        $adder->setName($name);
        $this->assertEquals($name, $adder->getName());
    }
}
