<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $maxCandies = max($candies);

        return array_map(
            fn($candy) => ($candy + $extraCandies) >= $maxCandies,
            $candies
        );
    }
} //the space and time complexity is O(n) or linear