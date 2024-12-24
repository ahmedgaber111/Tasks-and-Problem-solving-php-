<?php 

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
 print_r( canArrange([1,2,3,4,5,10,6,7,8,9],5));


function lengthOfLongestSubstring($s) {
	$start = 0;    //current starting position of search
    $length = 0; //current max length of substring
    for($i = 0; $i < strlen($s); $i++){
        $char = $s[$i];
        if(isset($arr[$char]) && $arr[$char] >= $start){
            $start = $arr[$char] + 1;
        } elseif($i - $start === $length) {
            $length++;
        }
        $arr[$char] = $i;
    }
    return $length;
}
print_r( lengthOfLongestSubstring("ssaxcsw"));






function sortPeople($names, $heights) {
      $s=array_combine($heights,$names);
      ksort($s) ;
      $s= array_reverse($s);
       return $s;
}
 print_r( sortPeople(["Mary","John","Emma"],[180,165,170]));










 
function quickSort($array) {
    $length = count($array);

    if ($length <= 1) {
        return $array;
    } else {
        $pivot = $array[0];
        $left = $right = array();

        for ($i = 1; $i < $length; $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }

        return array_merge(
            quickSort($left), 
            array($pivot), 
            quickSort($right)
        );
    }
}

// Driver code
$array = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);
$sortedArray = quickSort($array);

echo "Original Array: " . implode(", ", $array) . "\n";
echo "Sorted Array: " . implode(", ", $sortedArray);





    function checkIfExist($arr) {
        $set = [];

        foreach ($arr as $num) {
            if (in_array($num * 2, $set)) {
            return true;
            }
            if (in_array($num / 2, $set)) {
                return true;
            }
            $set[] = $num;
        }

        return false;
    }
$arr = [10,2,5,3];
echo  checkIfExist($arr);