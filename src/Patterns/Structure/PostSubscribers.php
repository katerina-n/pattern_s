<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\EditionInterface;
use App\Patterns\Interfaces\ObserverInterface;
use App\Patterns\Interfaces\Person;

class PostSubscribers implements Person, ObserverInterface
{
    public $name = 'person';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param EditionInterface $edition
     */
    public function getEdition(EditionInterface $edition)
    {
        print_r($edition->getName().' send to '.$this->name);
    }
}