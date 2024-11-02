<?php 

/* problem solcing 49.
function canArrange($arr, $k) {
    $freq = array_fill(0, $k, 0); // Initialize frequency array
    
    // Count frequency of each remainder
    for($i = 0; $i < sizeof($arr); $i++){
        $rem = $arr[$i] % $k;
        if($rem < 0) {
            $rem += $k; // Handle negative remainders
        }
        $freq[$rem]++;
    }
    
    // Check if remainder 0 has an even frequency
    if($freq[0] % 2 != 0) {
        return false;
    }

    // Check pairs of remainders
    for($i = 1; $i <= intdiv($k, 2); $i++) {
        if($i == $k - $i) { // Special case for k/2 when k is even
            if($freq[$i] % 2 != 0) {
                return false;
            }
        } else if($freq[$i] != $freq[$k - $i]) {
            return false;
        }
    }

    return true;
}

// print_r(canArrange([1,2,3,2],8)) ;




/* problem solcing 50.

function arrayRankTransform($arr) {
     $arrayRank=[];
     $oldarr=$arr;
     $arr=array_unique($arr);
     sort($arr);

    for ($i=0; $i <count($oldarr) ; $i++) { 
        $arrayRank[]=array_search($oldarr[$i],$arr)+1;

    }
return $arrayRank;
}
// print_r(arrayRankTransform([10,10,20,30]));





/* problem solcing 51.

function minSubarray($nums, $p) {
    $totalSum = array_sum($nums);
    $target = $totalSum % $p;
    if ($target === 0) return 0;

    $prefixSum = 0;
    $minLength = PHP_INT_MAX;
    $seen = array(0 => -1);

    
    for ($i = 0; $i < count($nums); $i++) {                                                                                            
     $prefixSum = ($prefixSum + $nums[$i]) % $p;                                                                                                
        if (isset($seen[($prefixSum - $target + $p) % $p])) {                                    
           $minLength = min($minLength, $i - $seen[($prefixSum - $target + $p) % $p]);                                    

        }

        $seen[$prefixSum] = $i;

    }

            return $minLength === count($nums) ? -1 : $minLength;
            
                                                                                                                                    
}





print_r(minSubarray([2,6,2],10));


/* problem solcing 52.

function dividePlayers($skill) {
    sort($skill);
    if (sizeof($skill) % 2 != 0) {
        return -1 ;
    }

    for ($i=0; $i <count($skill) / 2 ; $i++) { 
        $arraySkill[]=$skill[$i] + $skill[count($skill)-1-$i];
        $output[]=$skill[$i] * $skill[count($skill)-1-$i];
    }
      $arraySkill= array_unique($arraySkill);
      if (sizeof($arraySkill) == 1) {
return         array_sum($output);
    }
    return -1 ;

}

// print_r(dividePlayers([1,1,2,3]));
