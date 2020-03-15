<?php

namespace App\Patterns\Structure;

use App\Patterns\Abstractions\ArithmeticComposite;

class CompositeAddition extends ArithmeticComposite
{
    private $composites = [];

    /**
     * CompositeAddition constructor.
     * @param ArithmeticComposite ...$arithmetic
     */
    public function __construct(ArithmeticComposite...$arithmetic)
    {
        $this->composites = array_merge($this->composites, $arithmetic);
    }


    /**
     * @return float|int
     */
    public function compute()
    {
        return array_sum($this->composites);
    }

    /*
     *
     */
    public function appendChild(ArithmeticComposite $arithmetic)
    {
        array_push($this->composites, $arithmetic);
    }

    /**
     * @param ArithmeticComposite $arithmetic
     */
    public function removeChild(ArithmeticComposite $arithmetic)
    {
        unset($this->composites[array_search($arithmetic, $this->composites)]);
    }
}