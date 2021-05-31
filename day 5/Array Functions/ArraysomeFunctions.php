<?php

// 1. FLIP ARRAY

$arr = array("a" => "Harshu", "b" => "Book", "c" => "computer");
$fliparray= array_flip($arr);
echo "<pre>";
print_r($fliparray);

echo "</br></br>";

//2. Diff array   diffrent output

$a=array("Harsh","c","c++","java","php","android");
$b=array("Harsh","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);

//3.Intersect array  common output


$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));

//4.Values array  common output

$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}

