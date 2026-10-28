<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = [
            'a' => true,
            'e' => true,
            'i' => true,
            'o' => true,
            'u' => true,
            'A' => true,
            'E' => true,
            'I' => true,
            'O' => true,
            'U' => true,
        ];

        $start = 0;
        $end = strlen($s) - 1;

        while ($start < $end) {
            if (!isset($vowels[$s[$start]])) {
                $start++;
            } elseif (!isset($vowels[$s[$end]])) {
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
    } //the first solution the time complexity of it is O(n2) or O of n squared, now i change the solution to a hashmap(associative array) instead of looking at it at !in_array so the time complexity will be O(n) or linear runtime 
}
