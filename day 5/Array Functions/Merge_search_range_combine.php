<?php


//First       Merge Function
$arr1= array('c','c++','java','php');
$arr2= array(10,20,30,40);

Echo "</br> 1.Merge Function";

$new_arr= array_merge($arr1,$arr2);  //main function
echo "<pre>";
print_r($new_arr);

//Second    search Function

Echo "</br> 2.Search Function</br>";

$myarr= array('c','c++','java','php');
     
$check = array_search('php',$myarr);     //Main function
echo "Output is " .$check;


//Third Range Function

Echo "</br></br> 3.Range Function</br>";

$year = range(1900,2020);
echo "<select>";
foreach ($year as $value)
{
echo
"<option>$value</option>";
}
echo "</select>";

//=Fourth Combine Function

$a1= array("Apple","Banana","Mango");
$a2= array("Red","Blue","Green");

$new_a= array_combine($a1,$a2);  //main function
echo "<pre>";
print_r($new_a);

