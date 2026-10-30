<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {

       for($i = 0; $i < count($nums); $i++){
            if($nums[$i] === 0){
                unset($nums[$i]); 
                $nums[] = 0;
            }
       }
    } //i can do the comparing each pointer and shifting the value until it goes to the end, 
}