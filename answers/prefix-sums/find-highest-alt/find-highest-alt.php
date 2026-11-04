<?php


class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $altitude = 0;
        $maxNum = 0;



        foreach($gain as $n){
            $altitude += $n;

            $maxNum = max($maxNum, $altitude);
        }


        return $maxNum;
    } //this is linear time O(n) and constant space O(1)
}