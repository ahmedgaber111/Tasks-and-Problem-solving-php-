<?php 
/* problem solving 13
Given an array nums of distinct integers, 
return all the possible permutations. You can return the answer in any order.
*/
function permute($arr,$i,$n) {
    if ($i == $n)
        print_r($arr) ;
    else {
         for ($j = $i; $j < $n; $j++) {
           swap($arr,$i,$j);
           permute($arr, $i+1, $n);
           swap($arr,$i,$j); // backtrack.
        }
    }
 }

 function swap(&$arr,$i,$j) {
     $temp = $arr[$i];
     $arr[$i] = $arr[$j];
     $arr[$j] = $temp;
 }   


 $arr = [1,2,3];
echo permute($arr,0,count($arr)); 
/* problem solving 14 find the subarray with the largest sum, and return its sum.
*/
function maxSubArray($nums) {
    $length=count($nums);
    $maxSubarray[]=$nums[0];
    for ($i=0; $i <$length ; $i++) { 
        for ($j=$i; $j <$length ; $j++) { 
            if (array_sum($maxSubarray) < array_sum(array_slice($nums,$i,$j - $i+1)) ) {
                $maxSubarray=array_slice($nums,$i,$j - $i+1);
            }
            $maxSubarray;
        }
    }
    return array_sum($maxSubarray);
}
$nums = [5,4,-10,7,8,10];
print_r( maxSubArray($nums));

/*
problem solving 15
 The score of a string is defined as the sum of the absolute difference
  between the ASCII values of adjacent characters.
*/
function scoreOfString($s) {
    $length=strlen($s);
    $sum=0;
    for ($i=0; $i <$length-1 ; $i++) { 
    $sum+=abs( ord($s[$i]) - ord($s[$i+1]));
}        
return $sum;
}

echo scoreOfString("zaz");

/*
problem solving 16
 reverse string
*/
function reverseString(&$s) {
     return $s=array_reverse($s);
}
$s=["h","e","l","l","o"];
print_r(reverseString($s));