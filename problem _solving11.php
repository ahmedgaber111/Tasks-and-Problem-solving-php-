<?php 

/* problem solcing 41.
 Two Sum
Given an array of integers nums and an integer target,
return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution,
and you may not use the same element twice.
*/
function twoSum($nums, $target) {
     foreach($nums as $key1 => $value1){ 
     $value2 = $target - $value1;
      $key2 = array_search($value2,$nums); 
     if(in_array($value2,$nums)){
          if($key1 != $key2){ 
         return [$key1,$key2];                 
           }  
      }
 }
 
     }
 

/* problem solcing 42.
Median of Two Sorted Arrays

Given two sorted arrays nums1 and nums2 of size m and n respectively,
return the median of the two sorted arrays.
The overall run time complexity should be O(log (m+n)).
*/


function findMedianSortedArrays($nums1, $nums2) {

     $array=array_merge($nums1,$nums2);
     $newarray=sort($array);

     $count=count($array);
     if ($count % 2 ==  0) {
          $med=$count/2;
          $median[0]=$array[$med-1];
          $median[1]=$array[$med];
          return array_sum($median)/2;
     } else {
          $med=($count+1)/2;
          $median=$array[$med-1];
          return $median;

     }
}
     print_r( findMedianSortedArrays([1,4],[2,4,4]));


/* problem solcing 43.
 Median of Two Sorted Arrays
Given two sorted arrays nums1 and nums2 of size m and n respectively,
return the median of the two sorted arrays.
The overall run time complexity should be O(log (m+n)).
*/


     function maxArea($height) {
          $result=0;
          $count=count($height); 
          $left=0;
          $right=$count - 1;
          for ($i=0; $i <$count -1 ;  $i++) { 
               if ($left == $right) {
                    break;
               }
               if ($height[$left] < $height[$right]) {
                    
                    $newResult = $height[$left] * ($count - ($i+1));
                    $left++;
                    if ($newResult > $result) {
                         $result =$newResult;
                    }
               } else {
                    $newResult = $height[$right] * ($count - ($i+1));
                    $right--;
                    if ($newResult > $result) {
                         $result =$newResult;
                    }
                    
               }
          }

          return $result;
     }     

 

 print_r( maxArea([1,8,6,2,5,4,8,3,7]));

/* Remove Duplicates from Sorted Array
*/

function removeDuplicates(&$nums) {
     $b = count($nums);
     $nums=array_unique($nums);
  }