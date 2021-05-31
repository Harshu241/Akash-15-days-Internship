<?php

//Associative Array
//key=Value

//Method 1

$a[0]=10;
$a['f']="Anything";
$a['php']="Language";
$a[10]="Ten";
$a[50]=50.50;

//Method 2
// Always use this Method to create array

$a=array(
    0=>10,
    "f" => "Anything",
    "php" => "Language",
    10 => "Ten",
    50 => 50.50
);

//print value
echo "A for " .$a['f'];

// Use foreach for associative array

foreach($a as $value){
    echo "</br> value is $value";
}

foreach ($a as $key => $value) {
    echo "</br>Key is $key And value is $value";
}

//Inbuilt functions foe debug Array
echo"<pre>";
print_r($a);
echo"<pre>";
var_dump($a);
echo"<pre>";
