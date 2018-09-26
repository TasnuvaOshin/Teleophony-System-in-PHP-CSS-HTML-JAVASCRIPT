<html>
<head>
<title>Initial_Table</title>
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
<h1>Fill up Initial_Table</h1>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="system.php">Telephony System</a></li>
  <li><a href="web.php">Website Process</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>

<form name="add_me" id="add_me" method="POST">
<table id="dynamic">

<input type="Button" name="name[]" value="Number of Phone" class="in"  required></input>
<input type="Button" name="totel[]" value="Line"  class="in" required></input>
<button type="button" name="add" id="add_input"  class="btn">Add Value</button>
</table>
<input type="submit" name="submit" id="submit" class="submit" value="Submit"/>
</form>

</body>
</html>
<script>
$(document).ready(function(){
	
	
 var i=1;
 $('#add_input').click(function(){
 i++;
 $('#dynamic').append('<tr id="row'+i+'"><td><input type="Number" name="name[]" class="in" placeholder="No of Phone" required></input></td><td><input type="Number" name="totel[]" class="in" placeholder="Enter 0 or 1 " required></input></td><td><button type="button" name="remove" id="'+i+'" class="btn_remove">Remove</button></td></tr>');
 });
 $(document).on('click', '.btn_remove', function(){
 var button_id = $(this).attr("id");
 $('#row'+button_id+'').remove();
 });
 $('#submit').click(function(){
 $.ajax({
 url:"insert3.php",
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