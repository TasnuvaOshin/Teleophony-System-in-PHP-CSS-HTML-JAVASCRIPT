<?php
//here is all the work for process table 

$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);

$sql20="SELECT length FROM next";  
$run20 = mysqli_query($connection,$sql20);

 
 //process table ar fromtel
$sql4="SELECT max FROM link";
$sql5="SELECT min FROM link";

$sql2="SELECT min(end) FROM process";
$sql3="SELECT end FROM result";
$run2 = mysqli_query($connection,$sql2);
$run3 = mysqli_query($connection,$sql3);
$run4 = mysqli_query($connection,$sql4);
$run5 = mysqli_query($connection,$sql5);


$sql="SELECT min(end) FROM process";

$run= mysqli_query($connection,$sql2);

$ros = $run->fetch_assoc(); 
    $value = $ros['min(end)'];
	$sql7="SELECT totel FROM process  WHERE end='$value'";           //process table ar totel 
$sql6="SELECT fromtel FROM process WHERE end='$value'"; 
$run6 = mysqli_query($connection,$sql6); //fromtel
$run7 = mysqli_query($connection,$sql7);  //totel 
	
	$s="UPDATE c SET t=$value WHERE id = '2'";
		$ss = mysqli_query($connection,$s);
		
if($ss){
	
	$row4 = $run4->fetch_assoc();
		$value4= $row4['max'];   //max line no value
	
		
	$row5 = $run5->fetch_assoc();
		$value5= $row5['min'];  //min line no value 
		
		
	  $qmin = "UPDATE link SET min='$value5'-1";
	  
	  $minrun = mysqli_query($connection,$qmin);
	  
	if($minrun)
	{
		
		echo 'min is deccreasing'; //min line is decreasing 
	
	
	$row6 = $run6->fetch_assoc();
		$value6= $row6['fromtel'];             //this is fromtel
		echo $value6;
		
		$row7 = $run7->fetch_assoc();
		$value7= $row7['totel'];  
echo $value7;
		
		//this is totel
       $sql8="UPDATE initial SET line=0 WHERE no='$value6'";
        $run8 = mysqli_query($connection,$sql8);
		
		$sql9="UPDATE initial SET line=0 WHERE no='$value7'";
        $run9 = mysqli_query($connection,$sql9);
		
		if($run8){
			
			echo 'working'; //line free done 
		}
        
	$sql12="SELECT process FROM result WHERE id = '2'";
        $run12 = mysqli_query($connection,$sql12);
		
		$row12 = $run12->fetch_assoc();
		$value12= $row12['process'];
  
		$sql13="SELECT completed FROM result WHERE id = '2'";
        $run13 = mysqli_query($connection,$sql13);
		
		$row13 = $run13->fetch_assoc();
		$value13= $row13['completed'];

		//echo 'sucees'; // process+ complete +
		
		$up="UPDATE result SET process ='$value12'+1,completed='$value13'+1 WHERE id = '2'";
		$update = mysqli_query($connection,$up);
		if($update){
			
//now show the updated result 
       echo 'success completd and updated complete barbe and process barbe ';
	   
	   //its working now you need to show the result 
		}
		
		
		
	}
	$finalq="DELETE FROM `process` WHERE end='$value'";
		$finalrun = mysqli_query($connection,$finalq);
		if($finalq){
			echo 'this is from index10 where is the process work';
		}
	
	}
		
		
		
	






?>