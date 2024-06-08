<?php
//problem solving 9 remove number that the number of it's repeatead is odd 
function removeoddrepeate(array$array)
{
   $length=count($array);
   $result=0;
    for ($i=0; $i <$length; $i++) 
    {
        for ($j=0; $j < $length ; $j++) { 
            if ($array[$i] == $array[$j]) 
            {
                $result+=1;
            } 
            
        }

        if ($result%2 ==0  || $result == 1) {
            $newArray[]=$array[$i];                    
            $result=0;
        }
        $result=0;

        
    }
    return $newArray;
}
$editArray=removeoddrepeate([1,1,1,2,3,4,5,8,8]);
print_r($editArray);

//problem solving 10 count number in string
function countNumber($string)
{
    $number=str_split($string);
    return    array_sum($number);    
}
echo countNumber("1234");

//problem solving 11   number divisor

function getDivisor ($n) 
{
    for ($i=1; $i <$n +1 ; $i++) 
    { 
      if ($n%$i ==0) 
      {
        $divisor[]=$i;
      }        
    }
    return $divisor;
}

print_r(getDivisor(100));



//problem solving 12   return the longest palindromic substring
function longestPalindrome($s) {
    $arrayString=str_split($s);
    $length=strlen($s);
    $result='';

    for ($i=0; $i <$length-1 ; $i++) { 

        for ($j=$length -1; $j >$i ; $j--) { 

            if ($arrayString[$i] == $arrayString[$j]) {
                $longest=array_slice($arrayString,$i,$j-$i+1);
                if (array_reverse($longest) == $longest  && strlen(implode($longest)) > $result ) {
                    $result=implode($longest);
                }
             }

        }
return $result;
      }
    
        
}

echo longestPalindrome("sasa") ;