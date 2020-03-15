<?php

namespace App\Patterns\Abstractions;

abstract class ArithmeticComposite
{
    abstract function compute();

    /**
     * @param ArithmeticComposite $arithmetic
     */
    public function appendChild(ArithmeticComposite $arithmetic)
    {

    }

    /**
     * @param ArithmeticComposite $arithmetic
     */
    public function removeChild(ArithmeticComposite $arithmetic)
    {

    }
}