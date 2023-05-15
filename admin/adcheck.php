<?php 
session_start();

?>
<?php
include("database.php");


$uname = $_POST['uname'];
$_SESSION['uname']=$uname;
$pwd = $_POST['pwd'];
 if (($_POST['uname']) && $_POST['pwd'] == 'admin')
header("Location: adminhome.php");
 else 
 
 header("Location: index.php?msg=failed");
 
 echo "<font color=#ff0000><Center><b>**Failed Login**</b></Center></font>";
 mysql_close();


?>