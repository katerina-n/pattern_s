<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SpecificationsInterface;

class EnglishSpecification implements SpecificationsInterface
{
    /**
     * @return EnglishSoundTrack
     */
    public function createSoundTrack()
    {
        return new EnglishSoundTrack();
    }

    /**
     * @return EnglishSubtitle
     */
    public function createSubtitle()
    {
        return new EnglishSubtitle();
    }
}