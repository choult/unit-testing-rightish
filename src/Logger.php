<?php

namespace Choult;

use Choult\Logger\Formatter;

class Logger
{
    private $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function log(string $text): string
    {
        return date('Y-m-d') . ": " . $this->formatter->format($text);
    }
}
