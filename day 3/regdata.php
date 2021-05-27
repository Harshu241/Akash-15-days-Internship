<?php

$regdata=$_POST["RgNo"];
$name=$_POST["name"];
$email=$_POST["email"];
$mobilenum=$_POST["number"];
$DOB=$_POST["DOB"];
$gender=$_POST["Gender"];
$address=$_POST["address"];

echo"reg no.=$regdata </br> name=$name </br> email=$email </br> mobilenumber=$mobilenum";
echo"</br>Date of birth=$DOB </br> gender is $gender </br> addess is $address";