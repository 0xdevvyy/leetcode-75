<?php

class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $count = count($flowerbed);

        for($i = 0; $i < $count; $i++){
            if($flowerbed[$i] == 0 && ($i == 0 || $flowerbed[$i - 1] == 0)
                && ($i == $count -1 || $flowerbed[$i + 1] == 0 )
            ){
                $flowerbed[$i] = 1;
                $n--;

                if($n == 0 ){
                    return true;
                }
            }
            
        }
        return $n <= 0;
    }

    //it is a O(n) linear runtime and O(1) constant space
}