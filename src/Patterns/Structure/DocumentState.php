<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\StateInterface;

class DocumentState
{
    public $state;

    /**
     * DocumentState constructor.
     * @param StateInterface $state
     */
    public function __construct(StateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @param $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function writeState()
    {
        return $this->state->writeState();
    }
}