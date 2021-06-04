<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "trial 1";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Day-6</title>
	<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 50%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 8px;
  text-align: left;
  font-family:verdana;
}
</style>
</head>
<body>
<h2 style="text-align:center;font-family:verdana;">Demo</h2>
	<form method="post">
<table align="center">
		<tr>
		<td>Name : </td> 
		<td> <input type="text" name="txt1" /> </td>
		</tr>
		<tr>
		<td>Gender : </td> 
		<td> <select name="txt2"><option value="Male">Male</option>
        <option value="Female">Female</option></select> </td>
		</tr>
		<tr>
		<td>Mobile : </td> 
		<td> <input type="Number" name="txt3" /> </td>
		</tr>
		<tr>
		<td><input type="submit" /></td>
		<td><a href='display.php'> View Records </a></td>
		</tr>
		
	</form>
</body>
</html>

<?php

if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

$q = mysqli_query($connection,
		"insert into tbl_user(user_name,user_gender,user_mobile)
         values('{$name}','{$gender}','{$mobile}')")
          or die("Error". mysqli_error($connection));

if($q){
	echo"<script>alert('Record Added');</script>";
}
}
?>