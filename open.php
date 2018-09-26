<?php
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);


?>
<html>
<head>
<title>welcome</title>
<meta charset="UTF-8"/>
<style>
body{
	
	background: #B0E0E6;
}
main{
   height: 15em;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 45px;
  
	
}
input{
	
	padding : 10px;
	background: 	#DCDCDC;
	color : #708090;
	width: 200px;
	height: 50px;
	text-align: center;
	
	
}
</style>
</head>

<a href="home.php"/><body> 
<header>
		

</header>

<a href="home.php"/><main> 
<form method="POST" action="open.php">   

       <b> TELEPHONY SYSTEM </b><br>
	   
	   <input type="Submit" value="Refresh" name="on"> &nbsp;
	   <input type="button" onclick="home.php" value="Start" >
	   
	   

	   
</form>	
</main>
<footer><center><b>POWERED BY-TASNUVA OSHIN W3 GROUP</b></center></footer>


<?php
if(isset($_POST['on'])){
	
	//initially will refresh the database clear all the privious data 
		$f="DELETE FROM initial";
		$fin= mysqli_query($connection,$f);
	
	$fi="DELETE FROM c";
		$fina= mysqli_query($connection,$fi);
	
		$fin="DELETE FROM link";
		$final= mysqli_query($connection,$fin);
	
	$fina="DELETE FROM next";
		$finalr= mysqli_query($connection,$fina);
		
	$final="DELETE FROM process";
		$finalru= mysqli_query($connection,$final);
	
	$finalq="DELETE FROM result";
		$finalrun = mysqli_query($connection,$finalq);
		
		if($finalrun){
			echo 'working';
		}
		else{
			
			echo 'its not working ';
		}
	
}
?>
</body>
</html>