<?php
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);



$sql="SELECT end FROM process";
$result=mysqli_query($connection,$sql);


// Associative array
while (
$row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	echo '<pre>';
	echo $row['end'];
     echo '</pre>';
	 
	 
    if ($row['end'] == $correct[ $student_row[id] ]  ){
        mysql_query("UPDATE table2 SET result=correct WHERE id=$student_row[id]");
    } else {
        mysql_query("UPDATE table2 SET result=wrong WHERE id=$student_row[id]");
    }
	
}

// Free result set
mysqli_free_result($result);

mysqli_close($connection);



?>
