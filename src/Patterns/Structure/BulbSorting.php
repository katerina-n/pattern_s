<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\Sorting;

class BulbSorting implements Sorting
{
    /**
     * @param array $array
     * @return array
     */
    public function sorting(array $array)
    {
        for ($i = 0; $i <= count($array) -1; $i++) {
            for ($j = $i + 1; $j <= count($array) - 1; $j++) {
                if ($array[$i] > $array[$j]) {
                    $current = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $current;
                }
            }
        }
        return $array;
    }
}