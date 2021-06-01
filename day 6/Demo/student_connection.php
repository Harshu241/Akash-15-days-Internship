<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="trial 1";

$connection=mysqli_connect($host,$username,$passwd,$dbname);

$q=mysqli_query($connection,
     "insert into st_table(st_idnum,st_name,st_gender,st_dob,st_email,st_password,st_address,st_area,st_bloodgroup,st_mobile)
      values('141213','Harhsu','male','24-11-2000','abc@gmail.com','Abc123','vadngar','mahesana,gujarat','ab+','3543847812')")or die("Error  " .mysqli_error($connection));

     if($q){
         echo "<script>alert('Program is Executed');</script>";
     }