<?php

namespace App\Patterns\Abstractions;

use App\Patterns\Interfaces\TetrisFigureInterface;

abstract class FigureGenerator
{
    abstract function generateFigure():TetrisFigureInterface;

    /**
     * @return mixed
     */
    public function returnFigure()
    {
        $figure = $this->generateFigure();
        return $figure->name();
    }
}