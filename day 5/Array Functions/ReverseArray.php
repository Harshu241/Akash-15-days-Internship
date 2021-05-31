<?php

$a= array("c","c++","java","javascript","php");

$newA= array_reverse($a);
echo "<pre>";
print_r($newA);

// second function In_array()
/*The in_array() array function in PHP is used when we wish to look inside of an array
to see if a certain value exists. This function will return either "true“(1) or "false"
when It runs. */

echo"</br 2.In array >";

$temp= in_array('php',$a);
echo $temp ;
echo "</br>";


// Third Function In_rand
/* The array_rand() array function in PHP will select one or more keys from an
array at random. */


$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);          //Returns Array Index

foreach ($indexofarray as $key => $value)
{
echo "<br/>$key - <strong>" . $arr[$value] . "</strong>";
}


//Fourth Functions Array_unique.
/*The array_unique() array function in PHP will remove all duplicate
values from within an array. */

echo "</br></br></br> 4.Array Unique";
print_r(array_unique($arr));

