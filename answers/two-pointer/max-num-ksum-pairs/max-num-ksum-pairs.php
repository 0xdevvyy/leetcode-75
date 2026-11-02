<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxOperations($nums, $k) {
        sort($nums);
        $left = 0;
        $right = count($nums) - 1;

        $res = 0;

        while($left < $right) {
            
            $sum = $nums[$left] + $nums[$right];


            if($sum === $k){
                unset($nums[$left], $nums[$right]);
                $left++;
                $right--;
                $res++;
            }elseif($sum < $k){
                $left++;
            }else{
                $right--;
            }

        }

        return $res;
    }
}