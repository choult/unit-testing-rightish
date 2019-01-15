<?php

namespace Choult\Logger;

interface Formatter
{
    public function format(string $text): string;
}
