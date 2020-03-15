<?php

namespace App\Patterns\Structure;

class Document
{
    /** @var DocumentState */
    public $state;

    public function setState(DocumentState $state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        print_r($this->state->writeState());
    }
}