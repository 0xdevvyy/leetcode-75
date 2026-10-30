<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
       $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $start = 0;
        $end = strlen($s) - 1;

        while($start < $end){
            if(! in_array($s[$start], $vowels, true)){
                $start++;
            } elseif (! in_array($s[$end], $vowels, true )){
                $end--;
            } else {
                $temp = $s[$start];
                $s[$start] = $s[$end];
                $s[$end] = $temp;

                $start++;
                $end--;
            }

        }
        return $s;
    }

    //the space and time complexity is O(n) linear run time or O(n2) O of n squared? because it is still looking at the array and space complexity of O(1) constant space.
}