<?php
/**
 * Given a string, find the first non-repeating character in it and return it's index. If it doesn't exist, return -1.
 * solution 2 taking less time than solution 1 
 */
//Solution -1
class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function firstUniqChar($s) {
      $index = -1;
      if(!$s){
        return $index;
      }
      $splitString = str_split($s);
      
      foreach($splitString as $i=>$v){
        
        $c = 0;
        foreach($splitString as $ii=>$vs){
        
           if($v == $vs) {
           
            $c++;
           }
        }

        if($c == 1){
         
           return $i;
           break; 
        }
      }

      return $index;
  }
}

$obj = new Solution();
//echo $obj->firstUniqChar("aabb");
//Solution -2
function find_non_repeat($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
       return $i;
     }
  }

  return -1;
}

echo find_non_repeat("leetcode")."\n";
