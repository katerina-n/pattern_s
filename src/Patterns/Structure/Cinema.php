<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\CinemaInterface;

class Cinema implements CinemaInterface
{
    /**
     * @param $language
     * @return string
     */
    public function createSpecification($language)
    {
        if (trim($language) == 'fr') {
            $frenchFactory = new FrenchSpecification();
            $soundTrack = $frenchFactory->createSoundTrack();
            $subtitle = $frenchFactory->createSubtitle();
        } elseif (trim($language) == 'en') {
            $englishFactory = new EnglishSpecification();
            $soundTrack = $englishFactory->createSoundTrack();
            $subtitle = $englishFactory->createSubtitle();
        }

        return $soundTrack->getSoundTrackLanguage().' '.$subtitle->getSubtitleLanguage();
    }
}