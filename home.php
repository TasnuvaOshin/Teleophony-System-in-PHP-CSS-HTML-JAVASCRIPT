<html>
<head>
<title>Home</title>
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

.grid{
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr;

	width: auto;
	height: auto;
	
}
div{
	
	background:	#98FB98;
	text-align: center;
	border: 1px solid red;
	margin: 10px;
	padding: 10px;
	
}

.grid > div:nth-child(even){
	
	
	background:	#B0E0E6;
	
}
header{
	
	text-align: center;
	font-size: 45px;
	background: 	#C0C0C0;
	padding: 20px;
	border: 1px solid yellow;
	
}
footer{
	
	text-align: center;
	background:		#A9A9A9;
	font-size: 25px;
	border-top:2px solid black;
}

.b{
	width: 200px;
	height: 50px;
	padding: 2px;
}
.last{
	background: #FF8C00;
	padding: 10px;
	border: 1px solid black;
	
	
}
.l{
	
	width: 200px;
	height: 50px;
	padding: 2px;
	background:	#00BFFF;
	color: white;
	border: 1px ;
	
}
</style>
</head>
<body>

<header>TELEPHONY SYSTEM-SETUP </header>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="system.php">Telephony System</a></li>
  <li><a href="web.php">Website Process</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>
<main>
<form action="home.php" method="POST">
<div class="grid">
<div><h2>Set The Process Table</h2><br><br><br>
<input type="Button"  value="Set" class="b"  onClick="window.location.href='index2.php'"></input><br></br>
</div>

<div><h2>Set The Initial Clock Time</h2><br><br>
<input type="Button"  value="Set" class="b" onClick="window.location.href='index5.php'"></input><br></br>
</div>

<div><h2>Set The Initial links-Lines</h2><br><br>
<input type="Button"  value="Set" class="b" onClick="window.location.href='index3.php'"></input><br></br>
</div>

<div><h2>Set max-min value</h2><br><br><br>
<input type="Button"  value="Set" class="b" onClick="window.location.href='index4.php'"></input><br></br>
</div>

<div >
<h2>Set The Initial Result Table</h2><br><br>
<input type="Button"  value="Set" class="b" onClick="window.location.href='index6.php'"></input><br></br>
</div>
</div>
<div class="last">
<input type="Button" value="DONE" class="l" name="result" onClick="window.location.href='index.php'"/>
</div>
</form>
<main><br><br><br><br><br>
<footer><center><b>POWERED BY-TASNUVA OSHIN W3 GROUP</b></center></footer>
</body>
</html>
