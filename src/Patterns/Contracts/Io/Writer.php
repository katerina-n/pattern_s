<?php

namespace App\Patterns\Contracts\Io;

interface Writer
{
    public function write(string $string);
    public function writeln(string $string);
}
