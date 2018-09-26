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


<form name="add_me" id="add_me" method="POST" action="index.php">
<table id="dynamic">

<input type="Button" name="name[]" value="From" class="in"  required></input>
<input type="Button" name="totel[]" value="To"  class="in" required></input>
<input type="Button" name="length[]" value="Length"  class="in" required></input>
<input type="Button" name="arrival[]" value="Arrival Time"  class="in" required></input>
<button type="button" name="add" id="add_input"  class="btn">Add Value</button>
</table>
<input type="button" name="submit" id="submit" class="submit" value="Submit"/>
<input type="submit" name="sub" id="result"  class="submit" value="Start All the process"/>
<a href="finalresult.php"><input type="button" name="s" id="submit" class="submit" value="Get Result">

<?php

if(isset($_POST['sub'])){
	
    include 'set.php';
}
?>




</form>
</body>
</html>
<script>
$(document).ready(function(){
	
	
 var i=1;
 $('#add_input').click(function(){
 i++;
 $('#dynamic').append('<tr id="row'+i+'"><td><input type="Number" name="name[]" class="in" placeholder="Enter The value of From" required></input></td><td><input type="Number" name="totel[]" class="in" placeholder="Enter The value of TO" required></input></td><td><input type="Number" name="length[]" class="in" placeholder="Enter The Length" required></input></td><td><input type="Number" name="arrival[]" class="in" placeholder="Enter Arrival Time" required></input></td><td><button type="button" name="remove" id="'+i+'" class="btn_remove">Remove</button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:$('#add_me').serialize(),
 success: function(data)
 {
 alert(data);
 $('#add_me')[0].reset();
 }

 });
 });
});
</script>

