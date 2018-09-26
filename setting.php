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


$sqlnew="SELECT arrival FROM next";
$runnew = mysqli_query($connection,$sqlnew);
$rowcount=mysqli_num_rows($runnew);
//echo $rowcount;



$sqlnn="SELECT length FROM next";
$runsql = mysqli_query($connection,$sqlnn);


$row1en = $runsql->fetch_assoc(); 
$len= $row1en['length'];


	$row = $run->fetch_assoc(); 
    $endtime = $row['min(end)'];
	$row1 = $run1->fetch_assoc(); 
    $arrivaltime= $row1['min(arrival)'];
   //echo $endtime.''.$arrivaltime;
	$length =$arrivaltime + $len; //main length 
	
	//echo $length;
	//while ($rowcount > 0){
	
	if($arrivaltime < $endtime){
		
		//echo 'small';
		//clock time update work
		
		$clo ="UPDATE c SET t=$arrivaltime WHERE id = '2'";
		$updateclocktime  = mysqli_query($connection,$clo);
		
		//if($updateclocktime){
			
			//echo 'clockupdate';
		//} //clock time work done 
		
		//block kina ata check kora start korlam
		
		$a ="SELECT max FROM link";
	$maxrun=mysqli_query($connection,$a);
		$b= "SELECT min FROM link";
	$minrun=mysqli_query($connection,$b);
	   $maxrow = $maxrun->fetch_assoc(); 
    $max = $maxrow['max'];
	

	   $minrow = $minrun->fetch_assoc(); 
    $min = $minrow['min'];
	   
	   if ($max>$min){
		   
		//   echo 'its not block';
		   
		   //line checking work starts form here 
		   
		$fquery ="select fromtel from next";
		
		
		$from = mysqli_query($connection,$fquery)->fetch_assoc();
	      // echo $from['fromtel'];	   
		    $fromtel =$from['fromtel'];
		   $tquery ="select totel from next";
		
		
		$to = mysqli_query($connection,$tquery)->fetch_assoc();
	      // echo $to['totel'];	   
		   
		   $totel =$to['totel'];
		  // echo $b;
		   
		   $check1 = "select line from initial where no='$totel'";
		   $check1run = mysqli_query($connection,$check1)->fetch_assoc();;
		   
		    $line1 =$check1run['line'];
			
			//echo $line1; //1ta line pelam
			
			
			
			 $check2 = "select line from initial where no='$fromtel'";
		   $check2run = mysqli_query($connection,$check2)->fetch_assoc();;
		   
		    $line2 =$check2run['line'];
			
			//echo $line2; //2nd ar line ta o paoya gelo
	   
	   
	   if ($line1 == 1  || $line2 == 1){
		   
		   
		   $mainup ="UPDATE result set process=process+1,busy=busy+1 Where id=2";
		   $mainrun= mysqli_query($connection,$mainup);
		   //if($mainrun){
		  
		     //  echo 'line busy process+ busy+';
 
	   //}
	      $del = "Delete from next where arrival=$arrivaltime";
		   $delrun = mysqli_query($connection,$del);
	   }
	   else{
		   
		   
		   
		   
		 $insert="Insert into process (fromtel,totel,end,id) Values($fromtel,$totel,$length,' ')"; 
	      mysqli_query($connection,$insert);
		 //line free tai tara kotha bola start korlo  
		 //no min link barbe 
		 
		 $minup ="UPDATE link set min=min+1 where id='1'";
		 mysqli_query($connection,$minup);
		  
		 //so line kore dite hbe busy and then start korbe process ar kaj 
		 
		 //update korbo akn
		 
		 $up1 = "UPDATE initial set line=1 where no='$totel'";
		   $up1run = mysqli_query($connection,$up1);
		   
		 $up2 = "UPDATE initial set line=1 where no='$fromtel'";
		   $up2run = mysqli_query($connection,$up2);
		   
		  //update done 
		  
		  //now ai value ta ar arrival table a thakbe na 
		   $del = "Delete from next where arrival=$arrivaltime";
		   $delrun = mysqli_query($connection,$del);
		  
		  include 'set.php';		  
		  //............
		  //akn process ar work suru korte hbe .......
		 
		 
	   }
	   
	   
	   
	   }
	else {
		
		
		 $main2 ="UPDATE result set process=process+1,block=block+1 Where id=2";
		   $main2run= mysqli_query($connection,$main2);
		   if($main2run){
		  
		   //   echo 'line busy process+ block+';
		   
 
	   }
	   
	   
		      $del = "Delete from next where arrival=$arrivaltime";
		   $delrun = mysqli_query($connection,$del);
	}
		
	}
	else {
		
		//jodi boro hoi then process table ar work koro
	    //then keo na thakle or work korao 
		
		
		
		//endtime ar row ta delete hbe link 
		
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
		
	
	}
	
	




?>