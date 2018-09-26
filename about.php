<html>
<head>
<meta charset="UTF-8" />
<title>System</title>

<style>

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

main{
	display: grid;
	grid-template-columns: 100%;

	width: auto;
	height: auto;
	
}
div{
	
	background:	#DCDCDC;
	text-align: center;
	border: 1px solid red;
	margin: 10px;
	padding: 10px;
	
}

main > div:nth-child(even){
	
	
	background:	#B0E0E6;
	
}

p{
	
	font-size: 25px;
	text-align:center;
	
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
</style>
</head>
<body> 
<header> Telephony system</header>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="system.php">Telephony System</a></li>
  <li><a href="web.php">Website Process</a></li>
  <li><a href="about.php">About Us</a></li>
</ul>
<main > 
<div> <h2>  Objectives </h2>
<p>
Process a given number of calls and determine what proportions are 

	successfully completed 
	blocked or
	found to be busy calls </p>
<p> The system has a number of telephones (6 are shown) connected to a switchboard by lines.

The switchboard has a number of links which can be used to connect any two lines, subject to the condition that only one connection at a time can be made to each line.

The system is lost call system.
      	i) A call is lost, if the called party is engaged, then it is a busy call.
      	ii) A call may be lost if no link is available, it is blocked call. 
</P>
</div>
<div>
<img src="links.png"/>
</div>

<div>
<p>
Each call is a separate entity having attributes
                     a) Source
                     b) Destination
                     c) Length, and
                     d) the time at which call finished
0  represents  Free
1  represents Busy
To keep track of event, a number representing clock time is included. At present 1035(time unit)
To generate the arrival of call, a record is kept of the time the next call is due to arrive.
The set of numbers within the main box of figure records the state of the system at time 1035.
There are two activities causing events:
       i) New calls arrive
       ii) Existing calls vanish
Maximum link 3 and 2 is in use 
</p>
</div>
<div><br>
<img src="pic1.png"/> <br>
<img src="pic2.png"/> <br> 
<img src="pic3.png"/> <br>
<img src="pic4.png"/> <br>
<img src="pic5.png"/> <br> <br>
</div>
</main>
 </body>
<footer> powered by tasnuvaoshin | we3 group  </footer>

</html>