<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\StateInterface;

class RejectState implements StateInterface
{
    /**
     * @return string
     */
    public function writeState()
    {
        return 'reject';
    }
}