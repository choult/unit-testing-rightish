<?php

declare(strict_types=1);

namespace Choult\UTDR;

class Multiplier
{
    private $adder;

    public function __construct(Adder $adder)
    {
        $this->adder = $adder;
    }

    public function multiply(int $a, int $b): int
    {
        $val = 0;
        for ($i = 0; $i < $b; $i++) {
            $val = $this->adder->add($val, $a);
        }

        return $val;
    }
}
