<?php
 include 'config.php';
session_start();

?>
<!Doc type - Tutorial work>
<html>
<head>
<link rel="stylesheet" href="web.css"></link>

<title>Registration</title>
<h2 class="h" align="center">Welcome to WEB</h2>
</head>
<body id="b">
<div id="d">
<form action="reg.php" method="POST" align="center">
<center>
<img src="reg.png" class="img"></img></center>
<b>
<label>User-Name</label>
<input name="name" type="text" id="form" placeholder="Enter your Name" required></input>
<br>
<b>
<label>User-Email</label>
<input name="email" type="email" id="form" placeholder="Enter your Email" required></input>
<br>
<b>
<label>User-Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required></input>
<br>
<b>
<label>Confirm-Password</label>
<input name="cpass" type="password" id="form" placeholder="Confirm your Name password" required></input>

<input name="reg" type="submit" id="button" value="Sign-Up"></input>
<a href="login.php"><input name="back" type="button" id="button" value="Back to Log-In"></input>
<br>

</form>


<?php
      
	  if(isset($_POST['reg']))
	  {
		  
		 $name = $_POST['name'];  
		  $email = $_POST['email'];  
		   $pass = $_POST['pass'];  
		    $cpass = $_POST['cpass'];  
			
			
		  if($pass == $cpass ){
			  
			$query ="  select*from user where email='$email' ";
			
			$query_check= mysqli_query($con,$query);
			
			
			if($query_check){
				
				if(mysqli_num_rows($query_check)> 0){
					
					echo"
					<script>
					
					alert (' Email Already In Use');
					window.location.href='login.php';
				
					</script>
					
					
					";
					
				}
				else{
					
			    $insertion= "insert into user values('$name','$email','$pass')";
				
				 $run= mysqli_query($con,$insertion);
				 
				 if($run){
					 
					 
					 echo"
					<script>
					
					alert ('you are Successfully Registered');
					window.location.href='open.php';
				
					</script>
					
					
					";
					 
					 
					 
				 }else{
					 
					 	 echo"
					<script>
					
					alert ('Connection Failed');
					window.location.href='reg.php';
				
					</script>
					
					
					";
					 
					 
					
				 }
				
					
					
				}
				
				
				
				
				
			}else{
				
					 echo"
					<script>
					
					alert ('Database Erro');
					window.location.href='reg.php';
				
					</script>
					
					
					";
					 
			}
			
			  
			  
			
			 
			  
			  
			  
			  
			  
			  
			  
			  
		  }else{
			  
			  
			  	 echo"
					<script>
					
					alert ('Password & Confirm-Password Does't match ');
					window.location.href='reg.php';
				
					</script>
					
					
					";
					 
		  }
		  
		  
		  
		  
		  
	  }
	  else{
		  
		 
	  }


















?>

















</div>
</body>

</html>