<?php
extract($_POST);

include("database.php");
 $targetfolder = "notification/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
 
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }
  else {

 echo "Problem uploading file";

 }
 
$file_name1=$_FILES['file']['name'];

 $sql="INSERT INTO notification(title,des,notification) VALUES (
			\"$_REQUEST[title]\",
			\"$_REQUEST[des]\",
			
			
			
			\"$file_name1\"
			
			)			";


$res=mysqli_query($con,$sql)or die("Could Not Perform the Query". mysqli_error($con));
 
 header("Location: hodhome.php?msg1=success");
 
 
 




 ?>