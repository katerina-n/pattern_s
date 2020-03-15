<?php

namespace App\Patterns\Structure;

use App\Patterns\Interfaces\Sorting;

class QuickSorting implements Sorting
{
    /**
     * @param array $array
     * @return array
     */
    public function sorting(array $array)
    {
        return $this->quick_sort($array);
    }


    /**
     * @param $my_array
     * @return array
     */
    private function quick_sort($my_array)
    {
        $loe = $gt = array();
        if(count($my_array) < 2)
        {
            return $my_array;
        }
        $pivot_key = key($my_array);
        $pivot = array_shift($my_array);
        foreach($my_array as $val)
        {
            if($val <= $pivot)
            {
                $loe[] = $val;
            }elseif ($val > $pivot)
            {
                $gt[] = $val;
            }
        }
        return array_merge($this->quick_sort($loe),array($pivot_key=>$pivot),$this->quick_sort($gt));
    }
}