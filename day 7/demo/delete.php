<?php

//Db connection
$connection= mysqli_connect("localhost","root","","trial 1");

$id=$_GET{'deleted'};

$q= mysqli_query($connection,
                 "update tbl_user set is_delete= 1 where user_id='{$id}'")
                 or die(mysqli_error($connection));

  if($q)
  {
      echo"<script>alert('Record Deleted');window.location='display.php'</script>";
  }               