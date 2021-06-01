<?php

$host="";
$username="root";
$passwd="";
$dbname="trial 1";

//connection function

$connection=mysqli_connect($host,$username,$passwd,$dbname);

$q=mysqli_query($connection,
     "insert into tbl_user(user_name,user_gender,user_mobile) values('harsh','male','7984761480')")or die("Error  " .mysqli_error($connection));

     if($q){
         echo "<script>alert('Program is Executed');    </script>";
     }