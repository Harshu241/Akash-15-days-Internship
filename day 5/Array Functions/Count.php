<?php

$a= array(10,20,"Anything","Ten",50);


// 1.COUNT function
echo"1. echo Output</br>";
echo count($a);

// 2.
$newarray= array_count_values($a);  //Main Function
      
           echo"</br></br>2. Array Count Values";

foreach ($newarray as $key => $value) {
     echo"</br>$key - <strong>$value</strong>";
}