<?php

//problem solving 6   anagram
function anagram($v1,$v2)
{
    $lengthV1=strlen($v1);
    $lengthV2=strlen($v2);
    $arrayV1=str_split($v1,"1");
    $arrayV2=str_split($v2,"1");

    $var1=array_unique($arrayV1);
    $var2=array_unique($arrayV2);
    $var3=array_unique(array_merge($var1,$var2));
    if (count($var1) == count($var2) && $lengthV1 == $lengthV2 ) {
            if (count($var1) == count($var3)  && count($var2) == count($var3)) 
            {
              echo  "yes is anagram";
            }else
            {
                echo "no this not anagram";
            }
    }
    else
    {
        echo "no this not anagram"."</br>";

    }


}

//Test 1
$var1="ahmedgaber";
$var2="gaberahmedahmed";
anagram($var1,$var2);

//Test 2
$var3="ahmedgaberahmed";
$var4="gaberahmedahmed";


anagram($var3,$var4);
echo "</br>";
echo "</br>";


//problem solving 7 longest distinct characters in string 

function Longest_distinct($sentence)
{
    $string=strtolower($sentence);

    $lengthS=strlen($string);
    $arrayString=str_split($string);
    
    $stack1 = array();
    $stack2 = array();
    $longString=array_push($stack1, $arrayString[0]);
    $longest="";
         
    for ($i=1; $i <strlen($string) ; $i++) 
    { 
        if ((in_array($arrayString[$i],$stack1) ==false)) 
        {
            $longString=array_push($stack1,$arrayString[$i]);
        }else {
                 $longString=array_push($stack1);
                 $result=implode($stack1);     
                 if (strlen($result) > strlen($longest)) 
                 {    
                    $longest=$result;          
                 }    
            $stack1=array($arrayString[$i]);                
        }
    }
    $result=implode($stack1);
    if (strlen($result) > strlen($longest)) {
        $longest=$result;
       }
    
    return $longest;
}


echo Longest_distinct("ahmedgabermohamed");
echo Longest_distinct("geeksforgeeks");
echo "</br>";
echo "</br>";


//problem  8 Find the longest word in a string 
function LongestWord($sentence)
{
    $arraySentence=explode(" ",$sentence);
    $arrayLength=strlen($sentence);
    $result="";
    foreach ($arraySentence as $word) {
        if (strlen($result) < strlen($word))
         {
            $result=$word;           
         }
    }

return $result;
}

echo LongestWord("hello ahmed intoduce yourself");
echo "</br>";
echo "</br>";

// problem 9 sum of unique index in array

function sum_unique_index_array(array$array) {
return    array_sum(array_unique($array));    
}
$array1=[10,2,5,4,4,2,3];
echo sum_unique_index_array($array1);
?>