<?php

// first Simple array sort
echo "1.simple sort Function";

$arr= array(50,60,80,65,78,45,12);
sort($arr);

echo"<pre>";
print_r($arr);


// second rshort()

echo "</br>2.Reverse sort Function";

$arr= array(50,60,80,65,78,45,12);
rsort($arr);

echo"<pre>";
print_r($arr);


// third ashort()

echo "</br>3.Ascending sort Function";


$arr= array(50,60,80,65,78,45,12);
asort($arr);

echo"<pre>";
print_r($arr);

// Fourth kshort() sort an array in Ascending Order to key

echo "</br>4.kshort()sort Function";


$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");

ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}

//Fifth krshort() sort an array in Reverse

echo "</br></br>5.krshort()sort Function";

$arr = array(
    "Banana" => "Yellow",
    "Apple" => "Red",
    "Mango" => "Green");
    
    krsort($arr);
    foreach ($arr as $key => $value) {
    echo "<br />$key - $value ";
    }

    //Sixth shuffle randomly shuffle order

    echo "</br></br>6.Shufflet()sort Function";

    $myarray=array("cricket","Baseball","Hockey","football","volleyball");

    shuffle($myarray);

    foreach ($myarray as $key => $value) {
        echo "</br>" .$value;
    }
