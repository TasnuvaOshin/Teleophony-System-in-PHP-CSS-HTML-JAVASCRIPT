<html>
<head>
<title>Initial_Result</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>
<style>
h1{
	
	text-align : center;
	padding : 10px;
	background : 	#DCDCDC;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
form{
	
	margin: 30px;
	text-align: center;
	padding: 10px;
    
}
.in{
	
	height: 50px;
	width : 200px;
	border: 3px solid blue;
	margin: 10px;
	
}
label{
	
	margin:30px;
	background:orange;
    font-size: 40px;
	border: 1px solid black;
	padding:5px;
}
.btn{
	
	height: 50px;
	width : 200px;
	border: 3px solid black;
	margin: 10px;
	background: 	#FF6347;
}
.submit{
	
	height: 50px;
	width : 200px;
	border: 3px solid black;
	margin: 10px;
	background: #ADFF2F;
}

input{
	
	text-align: center;
	font-size: 15px;
}
</style>
</head>
<body>
<h1>Set Initial_Result </h1>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="system.php">Telephony System</a></li>
  <li><a href="web.php">Website Process</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>

<form name="add_me" id="add_me" method="POST" action="index6.php">
<table id="dynamic">
<Label>Process</Label>
<input type="Number" name="a"  class="in"  required></input><br><br>
<Label>Completed</Label>
<input type="Number" name="b"  class="in"  required></input><br><br>
<Label>Block</Label>
<input type="Number" name="c"  class="in"  required></input><br><br>
<Label>Busy</Label>
<input type="Number" name="d"  class="in"  required></input><br><br>
</table>
<input type="submit" name="submit" id="submit" class="submit" value="Submit"/>
</form>

</body>
</html>


<?php
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);




if(isset($_POST['submit'])){
	
	$process = $_POST['a'];
	$completed = $_POST['b'];
	$block = $_POST['c'];
	$busy = $_POST['d'];

	
	 $sql = "INSERT INTO result(process,completed,block,busy,id) VALUES('$process','$completed','$block','$busy',' 2')";
     $run=   mysqli_query($connection, $sql);
	if($run){
		
		echo 'Success';
	}
	else {
		
		echo 'error';
	}

}



?>
