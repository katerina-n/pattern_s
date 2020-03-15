<?php

namespace App\Patterns\Structure;

use App\Patterns\Abstractions\ArithmeticComposite;

class Addition extends ArithmeticComposite
{
    private $x;
    private $y;

    /**
     * Addition constructor.
     * @param float $x
     * @param float $y
     */
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function compute()
    {
        return $this->x + $this->y;
    }
}