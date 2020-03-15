<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SubtitleInterface;

class FrenchSubtitle implements SubtitleInterface
{
    public function getSubtitleLanguage()
    {
        return 'fr';
    }
}