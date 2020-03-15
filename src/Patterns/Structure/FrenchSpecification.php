<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SpecificationsInterface;

class FrenchSpecification implements SpecificationsInterface
{
    /**
     * @return FrenchSoundTrack
     */
    public function createSoundTrack()
    {
        return new FrenchSoundTrack();
    }

    /**
     * @return FrenchSubtitle
     */
    public function createSubtitle()
    {
        return new FrenchSubtitle();
    }
}