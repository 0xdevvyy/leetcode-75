<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function increasingTriplet($nums) {
        $first = PHP_INT_MAX; //1
        $second = PHP_INT_MAX;
        

        for($n = 0; $n < count($nums); $n++){
            if($nums[$n] <= $first){
                $first = $nums[$n];
            } elseif($nums[$n] <= $second){
                $second = $nums[$n];
            }else{
                return true;
            }
        }

        return false;
    }
    //O(n) linear,  and O(1) constant space
}

