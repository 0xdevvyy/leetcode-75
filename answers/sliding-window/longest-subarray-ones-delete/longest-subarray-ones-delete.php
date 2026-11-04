<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
         $zero = 0; 
        $left = 0;
        $maxLength = 0;


        for($right = 0; $right < count($nums); $right++){
            if($nums[$right] === 0){
                $zero++;
            }

            while($zero > 1){
                if($nums[$left] === 0){
                    $zero--;
                }

                $left++;
            }
            $maxLength = max($maxLength, $right - $left);
        }


        return $maxLength;
    }
}