<?php

declare(strict_types=1);

namespace Choult\UTDR;

class Adder
{
    private $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
