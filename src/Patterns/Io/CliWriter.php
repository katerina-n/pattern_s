<?php

namespace App\Patterns\Io;

use App\Patterns\Contracts\Io\Writer;

class CliWriter implements Writer
{
    private $stream;

    public function __construct()
    {
        $this->stream = STDOUT;
    }

    public function writeln(string $string)
    {
        fputs($this->stream, $string . PHP_EOL);
    }

    public function write(string $string)
    {
        fputs($this->stream, $string);
    }
}
