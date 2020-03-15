<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\EditionInterface;
use App\Patterns\Interfaces\Observable;
use App\Patterns\Interfaces\ObserverInterface;

class PostOffice implements Observable
{
    public $subscribers = [];

    public function setSubscribers(ObserverInterface $observer)
    {
        $this->subscribers[] = $observer;
    }

    /**
     * @param EditionInterface $edition
     */
    protected function notify(EditionInterface $edition)
    {
        $send = array_map(function(ObserverInterface $subscriber) use ($edition) {
            return $subscriber->getEdition($edition);
        }, $this->subscribers);
    }

    /**
     * @param EditionInterface $edition
     */
    public function sendEdition(EditionInterface $edition)
    {
        return $this->notify($edition);
    }
}