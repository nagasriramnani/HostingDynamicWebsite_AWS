<?php
extract($_POST);

include("database.php");
 $targetfolder = "assignment/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
 
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }
  else {

 echo "Problem uploading file";

 }
 
$file_name1=$_FILES['file']['name'];

 $sql="INSERT INTO assignment(hno,assignment) VALUES (
			\"$_REQUEST[hno]\",
			
			
			
			\"$file_name1\"
			
			)			";


$res=mysqli_query($con,$sql)or die("Could Not Perform the Query". mysqli_error($con));
 
 header("Location: hodhome.php?msg1=success");
 
 
 




 ?>