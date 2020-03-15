<?php

namespace App\Patterns\Interfaces;

interface Observable
{
    public function sendEdition(EditionInterface $edition);
}