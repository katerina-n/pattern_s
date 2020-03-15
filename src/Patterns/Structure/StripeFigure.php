<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\TetrisFigureInterface;

class StripeFigure implements TetrisFigureInterface
{
    /** @var int */
    public $count = 4;

    /**
     * @return int
     */
    public function getCountTile()
    {
        return $this->count;
    }

    /**
     * @param $count
     * @return $this
     */
    public function setCountTile($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param $x
     * @param $y
     * @return array
     */
    public function coordinate($x, $y)
    {
        return [
            [$x, $y],
            [$x, $y+1],
            [$x, $y+2],
            [$x+1, $y+3]
        ];
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'stripe';
    }
}