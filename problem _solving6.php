<?php 
/*
problem solving 21
[648] Replace Words in leetcod
*/
function replaceWords($dictionary,$sentence) {
    $dictionaryLength=count($dictionary);
    $ArrayOFSentence=explode(" ",$sentence);
    $lengthOFWord=count($ArrayOFSentence);
    usort($dictionary,function($a,$b){
        if($a == $b) return 0;
        return (strlen($a) > strlen($b) ? -1 : 1);
      }
    );

        for ($i=0;   $i < $dictionaryLength ; $i++) {
           for ($j=0; $j < $lengthOFWord ; $j++) { 
        if (strlen($ArrayOFSentence[$j] >= strlen($dictionary[$i])) 
         && $dictionary[$i] ===  substr($ArrayOFSentence[$j],0,strlen($dictionary[$i]))) {
        
            $ArrayOFSentence[$j]=$dictionary[$i];

        }

    } 
  }

  return implode(" ",$ArrayOFSentence);
}

// print_r(replaceWords(["cat","bat","rat"],"the cattle was rattled by the battery"));


/*
problem solving 22
974. Subarray Sums Divisible by K
*/
function checkSubarraySum($nums, $k) {
  
  $reminder = [0 => -1];
  $total = 0;

  foreach($nums as $index=>$v){
          $total += $v;
          $r = $total%$k;
         
          if(!isset($reminder[$r])){
         
            $reminder[$r] = $index;

          }
          elseif($index-$reminder[$r]>1){
             return true;
          }
  }
  return false;
}

// print_r(checkSubarraySum([1,2,4]
// ,6));

/*
problem solving 23
1051. Height Checker  
*/
function heightChecker($heights) {
  $heights1=$heights;
  $indexDiffrent=0;
  sort($heights); 
 for ($i=0; $i <count($heights) ; $i++) { 
        if ($heights[$i] != $heights1[$i]) {
           $indexDiffrent+=1;
        }
 }      
 return $indexDiffrent;
}

//echo heightChecker([5,1,2,3,4]);


/*
problem solving 23
1122. Relative Sort Array 
Given two arrays arr1 and arr2, the elements of arr2 are distinct, and all elements in arr2 are also in arr1.
Sort the elements of arr1 such that the relative ordering of items in arr1 are the same as in arr2.
 Elements that do not appear in arr2 should be placed at the end of arr1 in ascending order.
*/



function relativeSortArray($arr1, $arr2) {
  $a=0;
  $newArray=[];
  $b=0;
  sort($arr1);
  while ($b < count($arr2) ) {
    if (in_array($arr2[$b],$arr1)) {
       $newArray[$a]=$arr2[$b];
      unset($arr1[array_search($arr2[$b],$arr1)]);
      $a++;

 }else
 {
  $b++;   
 }

  }
  sort($arr1);
  return array_merge($newArray,$arr1) ;
}


print_r( relativeSortArray([2,3,1,3,2,4,6,7,9,2,19],[2,1,4,3,9,6]));