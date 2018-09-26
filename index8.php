<?php
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);

$query = "SELECT * FROM c"; 
$result = mysqli_query($connection,$query);

echo "<table>"; 
if ($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row['t'] . "</td><td>" . $row['id'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; 

?>
<html>
<head>
<style>
table,td,tr{
	border: 1px;
	
	
}
</style>
</head>

</html>