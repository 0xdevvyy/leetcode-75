<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
       $first = 0;

        foreach($nums as $i => $num) {
            if ($num !== 0) {
                $nums[$i] = 0;
                $nums[$first++] = $num;
            }
        }
       
    }
}