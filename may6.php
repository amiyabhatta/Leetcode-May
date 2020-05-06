<?php
/**
 * Given an array of size n, find the majority element. The majority element is the element that appears more than ⌊ n/2 ⌋ times.

 * You may assume that the array is non-empty and the majority element always exist in the array.
 *
 * E.g 
 * Input: [3,2,3]
 * Output: 3
 * Input: [2,2,1,1,1,2,2]
 * Output: 2
 */
class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function majorityElement($nums) {
     $mj = count($nums) / 2;
     $vals = array_count_values($nums);
     
     $tempArry = [];
     foreach($vals as $key=>$value){
       if($value > $mj){
         return $key;
         break;
       }
     }
  }
}

$obj = new Solution();
echo $obj->majorityElement([3,2,3]);


