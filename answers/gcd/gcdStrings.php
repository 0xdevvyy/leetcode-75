<?php


class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        if ($str1 . $str2 !== $str2 . $str1) {
            return '';
        }

        $a = strlen($str1); //6
        $b = strlen($str2); //3

        while ($b !== 0) {
            $remainder = $a % $b; //remainder
            $a = $b; 
            $b = $remainder;
        }

        return substr($str1, 0, $a); //"AABAAB" starts at index zero and will end at the value of a
    }

    //the space and time complexity is both O(n + m)
}