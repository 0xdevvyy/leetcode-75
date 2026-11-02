<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;

        $res = 0;


        while($left < $right){

            $area = ($left - $right) * min($height[$left], $height[$right]);
            $res = max($res, $area);

            return $height[$left] < $height[$right] ? $left++ : $right--;
        }

        return $res;
        
    }
}