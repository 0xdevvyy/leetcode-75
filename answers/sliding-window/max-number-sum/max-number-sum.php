<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
       $len = count($nums);
        $sum = 0;


        for($i = 0; $i < $k; $i++){
            $sum += $nums[$i];
        }


        $maxAvg = $sum / $k;

        for($i = $k; $i < $len; $i++){

            $sum += $nums[$i];
            $sum -= $nums[$i - $k];

            $avg = $sum / $k;
            $maxAvg = max($maxAvg, $avg);
        }

        return $maxAvg; 
    }
    //the time coomplexity is linear or O(n) and the space is constant space
}