<?php
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);
 $sql="SELECT*FROM result WHERE id='2'";
        $run10 = mysqli_query($connection,$sql);
		
		$row10 = $run10->fetch_assoc();
		$value10= $row10['process'];
		$value11= $row10['completed'];
		$value12= $row10['block'];
		$value13= $row10['busy'];
		
?>


<html>
<head>
<title>Next_Call_Table</title>
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
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
	display: none;
}

</style>
</head>
<body>
<h1>Fill up the Next_Call_Table</h1>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="system.php">Telephony System</a></li>
  <li><a href="web.php">Website Process</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>
<main>
<center>
<div>

<input  class="in" type="button"  value="<?php echo $value10 ?>" > Process </input>
<input  class="in" type="button"  value="<?php echo $value11 ?>" > Completed </input>
<input  class="in" type="button"  value="<?php echo $value12 ?>" > Block </input>
<input  class="in" type="button"  value="<?php echo $value13 ?>" > Busy </input>
</div>
</main></center>
</body>
</html>


