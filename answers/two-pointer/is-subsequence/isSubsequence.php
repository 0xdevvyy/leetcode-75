<?php


class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        //note: i can do this code by using the same solution in increasing triplet subsequence

        $first = 0;
        $second = 0;

        while($first < strlen($s) && $second < strlen($t) ){
            if($s[$first] == $t[$second]){
                $first++;
            }
            $second++;
        }

        return $first === strlen($s);

    }
}