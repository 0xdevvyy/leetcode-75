<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(' ', trim($s));
        $reverse = "";

        for ($i = count($words) - 1; $i >= 0; $i--) {
            if ($words[$i] !== '') {
                $reverse .= $words[$i] . ' ';
            }
        }

        return trim($reverse);
    }
    //it is a linear space and time complexity, bukas nanaman para sa medium problem
}

