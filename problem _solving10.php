<?php 

/*
problem solving 37
1438. Longest Continuous Subarray With Absolute Diff Less Than or Equal to Limit
*/

    function longestSubarray($nums, $limit) {
        $result =0;

        if (max($nums) <= $limit) {
            return count($nums);
        }else{
            for ($i=0; $i <count($nums) ; $i++) { 
                for ($j=1; $j <=count($nums)-$i ; $j++) { 
                   $checkArray=array_slice($nums,$i,$j);
                   if (max($checkArray) - min($checkArray) <= $limit ) {
                      if ($result < count($checkArray)){
                        $result =count($checkArray);
                      }
                   }else {
                      break;
                   }
                   
                }
            }       
            if ($result ==0) {
                return 1;
            }else{
                return $result;
            }

        }

    }


echo longestSubarray([8,2,4,7],4);


/*
problem solving 38

2678. Number of Senior Citizens

The first ten characters consist of the phone number of passengers.
The next character denotes the gender of the person.
The following two characters are used to indicate the age of the person.
The last two characters determine the seat allotted to that person.
*/


function countSeniors($details) {
 $count=0;
    foreach ($details as $key => $value) {
         $age=$value[11].$value[12];
        if ($age > 60) {
               $count++;
        }
    
    }
    return $count;
}

//echo countSeniors(["7868190130M7522","5303914400F9211","9273338290F4010"]);


/*
problem solving 39

1460. Make Two Arrays Equal by Reversing Subarrays

You are given two integer arrays of equal length target and arr. In one step, 
you can select any non-empty subarray of arr and reverse it.
 You are allowed to make any number of steps.
Return true if you can make arr equal to target or false otherwise.
*/




function canBeEqual($target, $arr) {
    return array_count_values($target) == array_count_values($arr);

}


print_r(canBeEqual([1,2,3,4],[2,4,1,3])) ;


/*
problem solving 40

2053. Kth Distinct String in an Array
A distinct string is a string that is present only once in an array.

Given an array of strings arr, and an integer k, 
return the kth distinct string present in arr.
If there are fewer than k distinct strings, return an empty string "".
Note that the strings are considered in the order in which they appear in the array.
*/
function kthDistinct($arr, $k) {
    $result=0;
    $newArray=array_count_values($arr);
    for ($i=0; $i <count($arr) ; $i++) { 
         if ($newArray[$arr[$i]] == 1) {
            $result+=1;
            if ($result == $k) {
                return $arr[$i];
            }
         }
    }
        return "";
}

echo kthDistinct(["A","s","s","w"],3);