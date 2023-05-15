<?php
$con = mysqli_connect("database-1.cdnjbsphr7wi.us-east-2.rds.amazonaws.com","gvpce","gvpce#123","gvpce");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>