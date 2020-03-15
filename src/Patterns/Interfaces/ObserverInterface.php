<?php

namespace App\Patterns\Interfaces;

interface ObserverInterface
{
    public function getEdition(EditionInterface $edition);
}