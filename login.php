<?php

 include 'config.php';
session_start();
?>
<!Doc type - Tutorial work>
<html>
<head>
<link rel="stylesheet" href="web.css"></link>

<title>Log-In</title>
<h2 class="h" align="center">Welcome to Log-In</h2>
</head>
<body id="b">
<div id="d">
<form action="login.php" method="POST" align="center">
<center>
<img src="login.png" class="img"></img></center>
<b>
<br><br>
<label>User-Email</label>
<input name="email" type="email" id="form" placeholder="Enter your Email" required></input>
<br>
<b>
<label>User-Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required></input>
<br>
<b>

<input name="login" type="submit" id="button" value="Log-In"></input>
<a href="reg.php"><input name="reg" type="button" id="button" value="Registration"></input>
<br>

</form>
<?php 

if(isset($_POST['login']))
{
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	
	  $query= " select*from user where email='$email' AND 	pas='$pass' ";

       $check=  mysqli_query($con,$query);	  
	   
	   if( $check){
		   
		   if(mysqli_num_rows($check) > 0 ){
			   
			   echo"
			   <script>
			   alert ('You are Successfully Logged In');
			   window.location.href='open.php';
			  </script>
			   
			   
			   ";
			   
			   
			   
		   }else{
			   echo"
			   <script>
			   alert (' Email or Password not Correct !');
			   window.location.href='login.php';
			  </script>
			   
			   
			   ";
			   
			   
			   
		   }
		   
		   
		   
	   }else{
		    echo"
			   <script>
			   alert ('Database Erro ');
			   window.location.href='login.php';
			  </script>
			   
			   
			   ";
	   }
	   
	
	
	
}else{
	
	
	
}














?>

</div>
</body>

</html>