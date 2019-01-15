<?php

namespace Choult\Logger\Formatter;

use Choult\Logger\Formatter;

class Chunked implements Formatter
{
    private $chunkLength;
    
    private $separator;
    
    public function __construct(int $chunkLength, string $separator)
    {
        $this->chunkLength = $chunkLength;
        $this->separator = $separator;
    }
    
    public function format(string $text): string
    {
        return chunk_split($text, $this->chunkLength, $this->separator);
    }
}
