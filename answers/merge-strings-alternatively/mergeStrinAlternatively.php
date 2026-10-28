<?php 

class Solution {
    //second answer
    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $i = 0;
        $output = '';

        while ($i < strlen($word1) || $i < strlen($word2)) {
            $output .= ($i < strlen($word1)) ? $word1[$i] : '';
            $output .= ($i < strlen($word2)) ? $word2[$i] : '';

            $i++;
        }

        return $output;
    }
    //or this one just checking if i is less than the length of the word then the loop will stop, and if word1 does have more characters than word2 the word1 will still keep iterating and added to output because it is an or operation
}