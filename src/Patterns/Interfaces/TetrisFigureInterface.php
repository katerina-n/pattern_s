<?php

namespace App\Patterns\Interfaces;

interface TetrisFigureInterface
{
    public function getCountTile();
    public function setCountTile($count);
    public function coordinate($x, $y);
    public function name();
}