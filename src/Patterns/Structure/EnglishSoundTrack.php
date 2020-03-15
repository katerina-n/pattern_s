<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SoundTrackInterface;

class EnglishSoundTrack implements SoundTrackInterface
{
    public function getSoundTrackLanguage()
    {
        return 'en';
    }
}