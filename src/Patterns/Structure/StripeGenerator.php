<?php

namespace App\Patterns\Structure;

use App\Patterns\Abstractions\FigureGenerator;
use App\Patterns\Interfaces\TetrisFigureInterface;

class StripeGenerator extends FigureGenerator
{
    /**
     * @return TetrisFigureInterface
     */
    public function generateFigure(): TetrisFigureInterface
    {
        return new StripeFigure();
    }
}