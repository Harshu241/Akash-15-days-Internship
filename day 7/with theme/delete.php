  
<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "trial 1";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"update tbl_user set is_delete = 1 where st_idnum='{$id}'") or die("Error". mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='display.php';</script>";
	}
?>
<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"update tbl_user set is_delete = 1 where user_id='{$id}'") or die("Error". mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='display.php';</script>";
	}
?>