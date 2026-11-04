<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
       $zero = 0; 
        $left = 0;
        $maxLength = 0;


        for($right = 0; $right < count($nums); $right++){
            if($nums[$right] === 0){
                $zero++;
            }

            while($zero > $k){
                if($nums[$left] === 0){
                    $zero--;
                }

                $left++;
            }
            $maxLength = max($maxLength, $right - $left + 1);
        }


        return $maxLength;
    }
}