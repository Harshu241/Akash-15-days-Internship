<?php

	//Numerical array

    //Method 1
     $a[0]=10;
     $a[1]=15;
     $a[2]=25;
     $a[3]="Name";
     $a[4]="30";

     //Method 2
     //Index dynamic Memory

     $a[]=10;
     $a[]=15;
     $a[]=25;
     $a[]="Name";
     $a[]="30";

     //Method 3
     //Always use this method to create array

     $a= array(10,15,25,"Name","30");

     //Now print array value

     echo $a[3];

     //print whole array

     for($i=0;$i<count($a);$i++)
     {
          echo "</br>".$a[$i];
     }

     echo "<pre>";
     print_r($a);
     echo "<pre>";
     echo "<pre>";
     var_dump($a);

     
     