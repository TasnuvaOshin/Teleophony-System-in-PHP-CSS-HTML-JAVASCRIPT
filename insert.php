<?php
//next table a user input 
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);

$number = count($_POST["name"]);
if($number > 0)
{
 for($i=0; $i<$number; $i++)
 {
 if(trim($_POST["name"][$i] != '' || $_POST["totel"][$i] != '' || $_POST["length"][$i] != '' || $_POST["arrival"][$i] != '' ))
 {
 $sql = "INSERT INTO next(fromtel,totel,length,arrival,id) VALUES('".mysqli_real_escape_string($connection, $_POST["name"][$i])."','".mysqli_real_escape_string($connection, $_POST["totel"][$i])." ','".mysqli_real_escape_string($connection, $_POST["length"][$i])." ','".mysqli_real_escape_string($connection, $_POST["arrival"][$i])." ',' ')";
 mysqli_query($connection, $sql);

 }
 }
 echo "Data Inserted Successfully";
  	include 'setting.php';
}
else
{
 echo "Error Occured";
}
?>