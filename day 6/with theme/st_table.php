<?php
$host="";
$username="root";
$passwd="";
$dbname="trial 1";

$st_id=$_POST['txt1'];
$name=$_POST['txt2'];
$gender=$_POST['txt3'];
$dob=$_POST['txt4'];
$email=$_POST['txt5'];
$password=$_POST['txt6'];
$address=$_POST['txt7'];
$area=$_POST['txt8'];
$bloodgroup=$_POST['txt9'];
$number=$_POST['txt10'];



//connection function

$connection=mysqli_connect($host,$username,$passwd,$dbname);

$q=mysqli_query($connection,
     "insert into st_table(st_idnum,st_name,st_gender,st_dob,st_email,st_password,st_address,st_area,st_bloodgroup,st_mobile)
      values('$st_id','$name','$gender','$dob','$email','$password','$address','$area','$bloodgroup','$number')")or 
      die("Error  " .mysqli_error($connection));

     if($q){
         echo "<script>alert('Details Submitted');</script>";
     }

