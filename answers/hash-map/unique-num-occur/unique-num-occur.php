<?php


class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $occurence = []; //will be the set or hash map

        foreach($arr as $val){
            isset($occurence[$val]) ? $occurence[$val]++: $occurence[$val] = 1;
        }

        return count($occurence) === count(array_unique($occurence));

    }//O(n) runtime and constant space
}