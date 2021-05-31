<?php

//1.push Function

$a=array("ANDROID","javascript");

array_push($a,"java","php");
echo "<pre>";
print_r($a);

//2. Pop Function
$b = array("c", "c++", "Java", "PHP", "ASP");
array_pop($b); //Remove
print_r($b);
array_pop($b); //Remove
print_r($b);


//3. Explode Function
$mystring = "I Love my Family";
$arr = explode(" ",$mystring);
print_r($arr);
 
//4. Explode Function
$arr = array("I","LOVE","MY","FAMILY");
$mystring = implode(" ", $arr);
echo $mystring;