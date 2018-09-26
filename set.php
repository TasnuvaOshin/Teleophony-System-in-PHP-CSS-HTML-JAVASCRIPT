<?php
//here is all the work for arrival table 
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);

$sql="SELECT min(end) FROM process";
$run = mysqli_query($connection,$sql);
$sql1="SELECT min(arrival) FROM next";
$run1 = mysqli_query($connection,$sql1);


$sqlnew="SELECT end FROM process";
$runnew = mysqli_query($connection,$sqlnew);
$rowcount=mysqli_num_rows($runnew); //this is for end table row count 



$sqlnn="SELECT length FROM next";
$runsql = mysqli_query($connection,$sqlnn);


$row1en = $runsql->fetch_assoc(); 
$len= $row1en['length'];


	$row = $run->fetch_assoc(); 
    $endtime = $row['min(end)'];
	$row1 = $run1->fetch_assoc(); 
    $arrivaltime= $row1['min(arrival)'];
   //	echo $endtime.''.$arrivaltime;
	$length =$arrivaltime + $len; //main length 
	
	//echo $length;
	
	
		//endtime (mean) ar row ta delete hbe link 
		
		//free hbe line free hbe complete and process barbe 
		
		$sss ="UPDATE c SET t=$endtime WHERE id = '2'";
		
		$updateclocktime  = mysqli_query($connection,$sss);
		
		$de2 = "Delete from process where end=$endtime";
		   $de2run = mysqli_query($connection,$de2);
		   //row delete korlam
		   //now link free korbo
		    $min2up ="UPDATE link set min=min-1 where id='1'";
		 mysqli_query($connection,$min2up);
		 //line free korbo
		 
		 $pto = "select fromtel from process where end=$endtime";
		 $prto=mysqli_query($connection,$pto)->fetch_assoc();
		 
		 	 $pfr = "select totel from process where end=$endtime";
		 $pfro=mysqli_query($connection,$pfr)->fetch_assoc();
		    
		 $up11 = "UPDATE initial set line=0 where no='$prto'";
		   $up11run = mysqli_query($connection,$up11);
		   
		 $up22 = "UPDATE initial set line=0 where no='$pfro'";
		   $up22run = mysqli_query($connection,$up22);
		   //line free holo 
		   //now result update complete+ process+
		   
		 $main3 ="UPDATE result set process=process+1,completed=completed+1 Where id=2";
		   $main3run= mysqli_query($connection,$main3); 
		
	
	
	
	




?>