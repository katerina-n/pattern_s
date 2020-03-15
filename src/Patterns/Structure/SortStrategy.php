<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\Sorting;

class SortStrategy
{
    public $sorting;

    /**
     * SortStrategy constructor.
     * @param Sorting $sorting
     */
    public function __construct(Sorting $sorting)
    {
        $this->sorting = $sorting;
    }

    /**
     * @param array $array
     * @return string
     */
    public function strategySort(array $array)
    {
        $sort = $this->sorting->sorting($array);
        return implode(',', $sort);
    }
}