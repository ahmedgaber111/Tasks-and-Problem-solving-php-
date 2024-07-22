<?php 
/*
problem solving 29
1550. Three Consecutive Odds
Given an integer array arr, return true
if there are three consecutive odd numbers in the array.Otherwise, return false.
*/
function threeConsecutiveOdds($arr) {
  $result=0;
  $a=0;
 while ($a <= count($arr)) {
     if ($arr[$a] % 2 != 0) {
         $result++;
         if ($result >= 3) {
          return true;
         }
     }elseif ($arr[$a] % 2 == 0 && count($arr) - $a < 3 ) {
         return false;
     }else {
         $result=0;
     }
     $a++;
 }       

}

//echo threeConsecutiveOdds([1,2,34,3,4,5,7,23,12]);

/*
problem solving 30
350. Intersection of Two Arrays II
Given an integer array arr, return true
if there are three consecutive odd numbers in the array.Otherwise, return false.
*/

function intersect($nums1, $nums2) {
    if (count($nums1) < count($nums2)) {
      for ($i=0; $i <count($nums1) ; $i++)
      { 
        if (in_array($nums1[$i],$nums2)) 
        {
          unset($nums2[array_search($nums1[$i],$nums2)]);
            $intersectionarray[]=$nums1[$i];
        }
      }
        } else {
      for ($i=0; $i <count($nums2) ; $i++)
      { 
        if (in_array($nums2[$i],$nums1)) 
        {
            unset($nums1[array_search($nums2[$i],$nums1)]);
            $intersectionarray[]=$nums2[$i];
        }
      }
 }
 if (isset($intersectionarray)) {
  return $intersectionarray;
 }else {
   return [];
 }
}

print_r(intersect([4,3,9,3,1,9,7,6,9,7],[5,0,8]));


/*
problem solving 31
330. Patching Array
Given an integer array arr, return true
if there are three consecutive odd numbers in the array.Otherwise, return false.
*/
function minPatches($nums, $n) {
  $miss = 1;
  $result = 0;
  $index = 0;
  while ($miss <= $n) {
      if ($index < count($nums) && $nums[$index] <= $miss) {
          $miss += $nums[$index];
          $index++;
      } else {
          $miss += $miss;
          $result++;
      }
  }

  return $result;
}

print_r(minPatches([1,3],3));

/*
1509. Minimum Difference Between Largest and Smallest Value in Three Moves
*/
function minDifference($nums) {
  sort($nums);
  if (count($nums) < 5) {
       return 0;
  }else 
  {
    $cuts1=array_slice($nums,0,count($nums)-3);
    $result=abs(max($cuts1) - min($cuts1));
    for ($i=0; $i <= 3 ; $i++) { 
         $cuts=array_slice($nums,$i,count($nums)-3);
          if (abs(max($cuts) - min($cuts)) < $result) {
            $result=abs(max($cuts) - min($cuts));
           }

                   }

    }
return $result;
  
  }


print_r(minDifference([20,66,68,57,45,18,42,34,37,58]



));
