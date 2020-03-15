<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SoundTrackInterface;

class FrenchSoundTrack implements SoundTrackInterface
{
    public function getSoundTrackLanguage()
    {
        return 'fr';
    }
}