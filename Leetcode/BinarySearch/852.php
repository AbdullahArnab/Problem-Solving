<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $left = 0;
        $right = count($arr) - 1;
        while($left <= $right) {
            $mid = floor(($left + $right) / 2);
            if ($arr[$mid] < $arr[$mid-1]) {
                $right = $mid -1;
            } else if ($arr[$mid] < $arr[$mid+1]) {
                $left = $mid + 1;
            } else {
                return $mid;
            }
        }
        return $mid;
    }
}