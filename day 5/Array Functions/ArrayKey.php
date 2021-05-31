<?php

// first fUnction

echo "</br>1. array_key_exists Function</br>";
 
$a=array(
    "red"=> "apple",
    "Blue"=>"banana",
    "mango"=>"mango"
);

echo array_key_exists('red',$a);

// second fUnction

echo "</br></br>2. array_change_key_case Function</br>";

$uppercase= array_change_key_case($a,CASE_UPPER);
echo "<pre>";
print_r($uppercase);

// Third fUnction 

echo "</br></br>3.END() Function</br>";

$arr1= array('c','c++','java','php');
echo end($arr1);

// Fourth fUnction


echo "</br></br>4.Compacat() Function</br>";

$name = "Harshu";
$Anime = "One Piece";
$arr = compact("name", "Anime");
echo "<pre>";
print_r($arr);