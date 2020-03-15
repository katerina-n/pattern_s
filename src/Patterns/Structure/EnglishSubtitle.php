<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\SubtitleInterface;

class EnglishSubtitle implements SubtitleInterface
{
   public function getSubtitleLanguage()
   {
       return 'en';
   }
}