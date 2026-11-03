<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function maxVowels($s, $k) {
        $vowels = ['a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true];


        $count = 0;
        $max = 0;


        for($i = 0; $i < $k; $i++){
            if(isset($vowels[$s[$i]])){
                $count++;
            }
        }


        $max = $count;


        for($i = $k; $i < strlen($s); $i++){
            $count += isset($vowels[$s[$i]]) ? 1 : 0;
            $count -= isset($vowels[$s[$i - $k]]) ? 1 : 0;
            $max = max($max, $count);
        }

        return $max;
    }//it is O(n) and constant space;
}