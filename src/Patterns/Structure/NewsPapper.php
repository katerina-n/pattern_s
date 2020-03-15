<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\EditionInterface;

class NewsPapper implements EditionInterface
{
    public $name = 'newsPaper';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}