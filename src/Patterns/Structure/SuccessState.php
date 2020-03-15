<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\StateInterface;

class SuccessState implements StateInterface
{
    /**
     * @return string
     */
    public function writeState()
    {
        return 'success';
    }
}