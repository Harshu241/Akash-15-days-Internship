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
							"select * from st_table where is_delete = 0") or die("Error". mysqli_error($connection));

						echo "<table >";
						echo "<tr>";
						echo "<th>student ID</hd>";
						echo "<th>student name</th>";
						echo "<th>Gender</th>";
						echo "<th>Birthdate</th>";
						echo "<th>Email</th>";
						echo "<th>password</th>";
						echo "<th>Address</th>";
						echo "<th>Area</th>";
						echo "<th>bloodgroup</th>";
						echo "<th>Mobile Number</th>";
						echo "</tr>";
						
						while ($row = mysqli_fetch_array($q)) {
							echo "<tr>";
							echo "<td>{$row['st_idnum']}</td>";
							echo "<td>{$row['st_name']}</td>";
							echo "<td>{$row['st_gender']}</td>";
							echo "<td>{$row['st_dob']}</td>";
							echo "<td>{$row['st_email']}</td>";
							echo "<td>{$row['st_password']}</td>";
							echo "<td>{$row['st_address']}</td>";
							echo "<td>{$row['st_area']}</td>";
							echo "<td>{$row['st_bloodgroup']}</td>";
							echo "<td>{$row['st_mobile']}</td>";
							echo "<td><a href='delete.php?deleteid={$row['st_idnum']}'>Delete </a></td>";
							echo "</tr>";
						}echo "<tr> <td> <a href='insert_form.php'> Add Record </a> </td> </tr>";
						echo "</table>";
					
				?>