<?php
/*
  problem  1
  reverse this words for statment
  */
 $S="i.like.this.progrm.very.much";
 print_r(implode(".",array_reverse(explode(".",$S))));
 echo "</br>";
 echo "</br>";
/*
  problem  2
 remove repeate letter in string
 */

 $S="geeksforgeeks";
 echo$news=implode(array_unique(str_split($S,1)));
 echo "</br>";
 echo "</br>";
 
 

/*
  problem  3
  remove repeate letter in string
 */
$a="aaaabbaa";
echo strstr($a,'aabb',false);
echo substr_replace($a,'aa','0','4');
echo str_replace("aaaa","aa",$a);
echo "</br>";
echo "</br>";

//permute character
 function permute($str,$i,$n) {
    if ($i == $n)
        print "$str\n";
    else {
         for ($j = $i; $j < $n; $j++) {
           swap($str,$i,$j);
           permute($str, $i+1, $n);
           swap($str,$i,$j); // backtrack.
        }
    }
 }
 /*
  problem  4
 function to swap the char at pos $i and $j of $str.
 */

 function swap(&$str,$i,$j) {
     $temp = $str[$i];
     $str[$i] = $str[$j];
     $str[$j] = $temp;
 }   
 
 $str = "ABC";
 permute($str,0,strlen($str)); 



?>