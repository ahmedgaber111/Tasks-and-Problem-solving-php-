<?php 
/*
problem solving 25
75 Sort Colors
Given an array nums with n objects colored red, white, or blue,
sort them in-place so that objects of the same color are adjacent,
with the colors in the order red, white, and blue.We will use the integers 0, 1, and 2
to represent the color red,white, and blue, respectively.
You must solve this problem without using the library's sort function.
*/

function sortColors(&$nums) {
 $colors=["red"=>"0","white"=>"1","blue"=>"2"];
 $arrayreds=[];
 $arraywhites=[];
 $arrayblues=[];    
 $a=0;

 while ($a < count($nums)) {
  if ($nums[$a] == $colors["red"]) {
       $arrayreds[]=$nums[$a];
  }elseif ($nums[$a] == $colors["white"]) {
    $arraywhites[]=$nums[$a];
  }else {
    $arrayblues[]=$nums[$a];    
  }
  $a++;


 }       
 return $nums=array_merge($arrayreds,$arraywhites,$arrayblues);

}

// $nums=[2,0,2,1,1,0,1];
// print_r(sortColors($nums));

/*
problem solving 26
2037. Minimum Number of Moves to Seat Everyone
There are n availabe seats and n students standing in a room.
You are given an array seats of length n,
where seats[i] is the position of the ith seat.
You are also given the array students of length n,
where students[j] is the position of the jth student.
*/

function minMovesToSeat($seats, $students) {
 
  sort($seats);
  sort($students);
  $moves=0;
  for ($i=0; $i <count($seats) ; $i++) { 
       if ($seats[$i] > $students[$i]) {
           $moves+=$seats[$i]- $students[$i];
       }else {
        $moves+=$students[$i]-$seats[$i] ;
       }
  }
  return $moves;
}

echo minMovesToSeat([3,1,5],[2,7,4]);

/*
problem solving 27
945. Minimum Increment to Make Array Unique
*/


function minIncrementForUnique($nums) {
  sort($nums);
  $moves=0;
  $arrayUnique=[];
  if (count($nums) == 1) {
    return $moves;
  }
  for ($a=0; $a <count($nums) ; $a++) {  
     if (in_array($nums[$a],$arrayUnique)) {
       $dif=abs($arrayUnique[$a-1]  - $nums[$a]) + 1 ;
        $arrayUnique[$a]=$nums[$a]+$dif;
        sort($arrayUnique);
         $arrayUnique;
         $moves+=$dif;
      }else {
      $arrayUnique[$a]=$nums[$a];

      sort($arrayUnique);      
     }
  }
 return $moves;
  
  }



print_r(minIncrementForUnique([2,2,2]));


/*
problem solving 28
633. Sum of Square Numbers
*/
function judgeSquareSum($c) {
  for ($a = 0; $a * $a <= $c; $a++) {
      $b = sqrt($c - $a * $a);
      if (intval($b) == $b) {
          return true;
      }
  }

  return false;
}
echo judgeSquareSum(8);