<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $n = count($nums);

        $start = 0;
        $end = $n - 1;

        $leftProduct = 1;
        $rightProduct = 1;

        $output = array_fill(0, $n, 1);

        while ($start < $n && $end >= 0) {
            $output[$start] *= $leftProduct;
            $output[$end] *= $rightProduct;

            $leftProduct *= $nums[$start];
            $rightProduct *= $nums[$end];

            $start++;
            $end--;
        }

        return $output;

       
        
    }
}