<?php



class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
       $set1 = array_flip(array_unique($nums1));
        $set2 = array_flip(array_unique($nums2));

        $result = [[], []];

        //or create a result1 and result 2


        foreach($set1 as $num => $value){

            if(!isset($set2[$num])){
                $result[0][] = $num;
            }
        }

        foreach($set2 as $num => $value){

            if(!isset($set1[$num])){
               $result[1][] = $num;
            }
        }


        return $result;
        //then return [$result1, $result2];
    }//O(n + m) same also in the space complexity
}
