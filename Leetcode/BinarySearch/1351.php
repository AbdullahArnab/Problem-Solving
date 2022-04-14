<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $count = 0;
        foreach($grid as $row) {
            $firstIndex = $this->binarySearch($row);
            $count += count($row) - $firstIndex;
        }
        return $count;
    }

    function binarySearch($row) {
        $left = 0;
        $right = count($row) - 1;
        while($left <= $right) {
            $mid = floor(($left + $right)/2);
            if($row[$mid] < 0) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }
}