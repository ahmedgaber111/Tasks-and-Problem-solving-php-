<?php 

/* problem solcing 45.

function rotate(&$nums, $k) {
     $len   = count($nums);
     $k    %= $len;
     $res   = array_slice($nums, 0, $len-$k);
     $slice = array_slice($nums, $len - $k, $k);
     $nums  = array_merge($slice, $res);
    return $nums;
}

$nums=[1,2,3,4];
print_r(rotate($nums,2));



/* problem solcing 46.

 function threeSum($nums) {
         sort( $nums );
         $arr = [];
         $count = count($nums);
 
         foreach($nums as $k=>$n){
             if($k > 0 && $n === $nums[$k-1]){
                 continue;
             }
 
             $l = $k +1;
             $r = $count -1;
 
             while($l < $r){
                 $sum = $n + $nums[$l] + $nums[$r];
 
                 if($sum > 0){
                     $r--;
                 }elseif($sum < 0){
                     $l++;
                 }else{
                     $arr[] = [$n, $nums[$l], $nums[$r]];
                     $l++;
                     while($nums[$l] == $nums[$l-1] && $l<$r){
                         $l++;
                     }
                 }
             }
         }
 
         return $arr;
     }

/* problem solcing 47.

    function search($nums, $target) {
       if(in_array($target , $nums))
       { 
        return array_search($target , $nums); 
       }
       else return -1;
    }



/* problem solcing 48.

    function searchRange($nums, $target) {

        if (in_array($target,$nums)) {
          $CountTarget=array_count_values($nums)[$target];  
 
            $FirstIndex=array_search($target,$nums);    
             $nums=array_reverse($nums);
             array_search($target,$nums);
             $LastIndex=count($nums)-array_search($target,$nums)-1;    

             return             $OutPut=[$FirstIndex,$LastIndex];
        }
        return [-1,-1];
    }


    print_r(searchRange([5,7,7,8,10],8));



    