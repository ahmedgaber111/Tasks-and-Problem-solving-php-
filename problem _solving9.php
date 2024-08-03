<?php 

/*
problem solving 33
1509. Minimum Difference Between Largest and Smallest Value in Three Moves
*/


function passThePillow($n, $time) {
 $determine=(integer)($time/($n-1)); //odd
 $time % ($n-1) ;

//echo (integer)($time/$n); //even
if ($determine % 2 == 0) {
  if ($time % ($n-1) == 0) {
      return 1;
  }
      return $time % ($n-1) +1;
}elseif ($determine % 2 != 0) {
  if ($time % ($n-1) == 0) {
    return $n;
}
  return  $n  - $time % ($n-1);  
}
}
print_r(passThePillow(4,5));




/*
problem solving 34

1248. Count Number of Nice Subarrays
Given an array of integers nums and an integer k. A continuous subarray is called nice if there are k odd numbers on it.
Return the number of nice sub-arrays.
*/
function numberOfSubarrays($nums, $k) {  
  $curr = $result = 0;
  $counts = [1];
  foreach ($nums as $num) {
            $curr += $num % 2;
            $result += $counts[$curr - $k] ?? 0;           
            $counts[$curr] = ($counts[$curr] ?? 0) + 1;
  }

  return $result;
}

print_r(numberOfSubarrays([2,1,2,2,1],1));

/*
problem solving 35

1052. Grumpy Bookstore Owner

here is a bookstore owner that has a store open for n minutes.
Every minute, some number of customers enter the store. 
You are given an integer array customers of length n where 
customers[i] is the number of the customer that enters the store at the start of 
the ith minute and all those customers leave after the end of that minute.
On some minutes, the bookstore owner is grumpy. 
You are given a binary array grumpy where grumpy[i] is 1 
if the bookstore owner is grumpy during the ith minute, and is 0 otherwise.
When the bookstore owner is grumpy, the customers of that minute are not satisfied,
otherwise, they are satisfied.The bookstore owner knows a secret technique to keep 
themselves not grumpy for minutes consecutive minutes, but can only use it once.
Return the maximum number of customers that can be satisfied throughout the day.
*/

function maxSatisfied($customers, $grumpy, $minutes) {
    $satisfied = 0;
    $max_add_satisfied = 0;
    $add_satisfied = 0;
    
    for ($i = 0; $i < count($customers); $i++) {
        if ($grumpy[$i] == 0) {
            $satisfied += $customers[$i];
        } else {
            $add_satisfied += $customers[$i];
        }
        if ($i >= $minutes && $grumpy[$i - $minutes] == 1) {
            $add_satisfied -= $customers[$i - $minutes];
        }
        $max_add_satisfied = max($max_add_satisfied, $add_satisfied);
    }
    
    return $satisfied + $max_add_satisfied;
}


print_r(maxSatisfied([1],[0],1)) ;

/*
problem solving 36

1518. Water Bottles
There are numBottles water bottles that are initially full of water.
You can exchange numExchange empty water bottles from the market with one full water bottle.
The operation of drinking a full water bottle turns it into an empty bottle.
Given the two integers numBottles and numExchange,
return the maximum number of water bottles you can drink.


*/


function numWaterBottles($numBottles, $numExchange) {
    $result=$numBottles;
    $rest=0;
while ($numBottles >0) {

    if ((integer)($numBottles /$numExchange) > 0) {
           $result+= (integer)($numBottles /$numExchange);      
           $numBottles=(integer)($numBottles /$numExchange) +  $numBottles % $numExchange;
    }  else {
        $numBottles=0;
    }     
}
return $result;
}


echo numWaterBottles(15,4);