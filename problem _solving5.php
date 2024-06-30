<?php 

/*problem solving 17
Return the minimum number of characters that need to be appended to the end
*/
function appendCharacters($s, $t) {
    $s = str_split($s);
    foreach ($s as $i) {
        if ($i == $t[0]) {
            $t = substr($t, 1);
            if ($t == '') break;
        }
    }
    return strlen($t);
}
//echo appendCharacters("aaa","aaa");

/*problem solving 18
Return the minimum number of characters that need to be appended to the end
*/
function longestPalindrome($s) {
    $output = 0;
    $freq = array_fill(0, 128, 0);
    for ($i = 0, $len = strlen($s); $i < $len; $i++) {
        $char = ord($s[$i]);
       $freq[$char]++;
        $freq[$char];
        if ($freq[$char] % 2 == 0) {
            $output += 2;
        }
    }
   return $len > $output ? $output + 1 : $output;
}
//echo longestPalindrome("aabc");


/*problem solving 19
return an array of all characters that show up in all strings within the words (including duplicates). You may return the answer in any order.
*/


function commonChars($words) {
    $common = array_count_values(str_split($words[0]));
      foreach($words as $word) {
          $split = array_count_values(str_split($word));
          $new_set = [];
          foreach($split as $key => $value) {
              if(isset($common[$key])) {
                  $new_set[$key] = min($value, $common[$key]);
              }
          }
          $common = $new_set;
      }
      $new_arr = [];
      foreach($common as $key => $value) {
          for($x = 0; $x < $value; $x++) {
              $new_arr[] = $key; 
          }
      }
      return $new_arr;
  }
print_r( commonChars(["besla","sabel","rosler"]));


/*problem solving 20
 Alice has some number of cards and she wants to rearrange the cards into groups so that each group is of size groupSize, and consists of groupSize consecutive cards.
Given an integer array hand where hand[i] is the value written on the ith card and an integer groupSize, return true if she can rearrange the cards, or false otherwise.

*/

function isNStraightHand($hand, $groupSize)
    {
            while(!empty($hand))
 		{
 			$start = min($hand);
 			for($i=0;$i<$groupSize;$i++)
 			{
 				$key = array_search($start, $hand);
 				if($key !== false)
 				{
 					unset($hand[$key]);
 					$start++;
 				}
 				else
 				{
 					return false;
 				}
 			}
 		}
 		return true;
    }


print_r(isNStraightHand([1,2,2],1));