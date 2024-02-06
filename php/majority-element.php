<?php

/*
Given an array nums of size n, return the majority element.

The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.
*/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */

    function majorityElement($nums) {
        $maior = array_count_values($nums);
        return array_search(max($maior), $maior);
    }  
}
?>