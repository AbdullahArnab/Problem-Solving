<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        sort($nums);
        if (count($nums) === 0) return [];
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($nums[$mid] === $target) {
                $first = $last = $mid;
                if ($first -1 >=0) {
                    while($first > 0 && $nums[$first] === $nums[$first-1]) {
                        $first -= 1;
                    }
                }
                if ($last != count($nums) -1) {
                    while($last < count($nums) && $nums[$last] === $nums[$last+1]) {
                        $last += 1;
                    }
                } else {
                    return [$mid];
                }
                return range($first, $last);
            }
            if ($target < $nums[$mid]) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        return [];

    }
}