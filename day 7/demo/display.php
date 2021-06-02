<html>
<head>
<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 100%;
	 margin-left: auto; 
  margin-right: auto;
}

	</style>
</head>
</html>
<?php 
					$host = "localhost";
					$username = "root";
					$passwd = "";
					$dbname = "trial 1";

					$connection = mysqli_connect($host, $username, $passwd, $dbname);



					$q = mysqli_query($connection,
							"select * from tbl_user where is_delete = 0") or die("Error". mysqli_error($connection));

						echo "<table >";
						echo "<tr>";
						echo "<th>user ID</hd>";
						echo "<th>user name</th>";
						echo "<th>user gender</th>";
						echo "<th>user mobile</th>";
					
						echo "</tr>";
						
						while ($row = mysqli_fetch_array($q)) {
							echo "<tr>";
							echo "<td>{$row['user_id']}</td>";
							echo "<td>{$row['user_name']}</td>";
							echo "<td>{$row['user_gender']}</td>";
							echo "<td>{$row['user_mobile']}</td>";
							echo "<td><a href='delete.php?deleteid={$row['user_id']}'>Delete </a></td>";
							echo "</tr>";
						}echo "<tr> <td> <a href='insert_form.php'> Add Record </a> </td> </tr>";
						echo "</table>";
					
				?>