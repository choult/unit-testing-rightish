<?php

declare(strict_types=1);

namespace Choult\UTDR;

class Multiplier
{
    public function multiply(int $a, int $b): int
    {
        $adder = new Adder();
        $val = 0;
        for ($i = 0; $i < $b; $i++) {
            $val = $adder->add($val, $a);
        }

        return $val;
    }
}
