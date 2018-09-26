<?php
//here is all the work for arrival table 
$server_name = 'localhost';
$user_name= 'root';
$user_password = '';
$database_name = 'telephone';

$connection = mysqli_connect($server_name,$user_name,$user_password) or die ('Database connection error');
mysqli_select_db($connection,$database_name);

$sql20="SELECT length FROM next";  
$run20 = mysqli_query($connection,$sql20);

 
$sql7="SELECT totel FROM next";           //next table ar totel 
$sql6="SELECT fromtel FROM next";  //next table ar fromtel


$sql4="SELECT max FROM link";
$sql5="SELECT min FROM link";

$sql2="SELECT min(end) FROM process";
$sql3="SELECT end FROM result";
$sql="SELECT arrival FROM next";     //next table ar arrival +length korte hbe 
$run = mysqli_query($connection,$sql);
$run2 = mysqli_query($connection,$sql2);
$run3 = mysqli_query($connection,$sql3);
$run4 = mysqli_query($connection,$sql4);
$run5 = mysqli_query($connection,$sql5);
$run6 = mysqli_query($connection,$sql6); //fromtel
$run7 = mysqli_query($connection,$sql7);  //totel 




$row = $run->fetch_assoc(); 
    $value= $row['arrival']; 
      echo $value;
	  
	//1st row  arrival time is here 
	$ros = $run2->fetch_assoc(); 
    $value2 = $ros['min(end)'];
 echo $value2;
	if($value < $value2){
//jodi kom hoi then barbe  mane arrival time jodi besi hoi end time teke then arekta work else part 
		
		$s="UPDATE c SET t=$value WHERE id = '2'";
		$ss = mysqli_query($connection,$s);
		
if($ss){
	
	
	$row4 = $run4->fetch_assoc();
		$value4= $row4['max'];
	
		 echo $value4;
	$row5 = $run5->fetch_assoc();
		$value5= $row5['min'];
		 echo $value5;
	if($value4 > $value5){
			$row6 = $run6->fetch_assoc();
		$value6= $row6['fromtel'];  

		//this is fromtel
		
		
		$row7 = $run7->fetch_assoc();
		$value7= $row7['totel'];                     //this is totel
       $sql8="SELECT no FROM initial WHERE no='$value6'";
        $run8 = mysqli_query($connection,$sql8);
		
		$sql9="SELECT no FROM initial WHERE no='$value7'";
        $run9 = mysqli_query($connection,$sql9);
		
			$row8 = $run8->fetch_assoc();
		$value8= $row8['no'];
	
		
	$row9 = $run9->fetch_assoc();
		$value9= $row9['no'];

          $sql10="SELECT line FROM initial WHERE no='$value8'";
        $run10 = mysqli_query($connection,$sql10);
		
		$sql11="SELECT line FROM initial WHERE no='$value9'";
        $run11 = mysqli_query($connection,$sql11);
		
		$row10 = $run10->fetch_assoc();
		$value10= $row10['line'];
	
		
	$row11 = $run11->fetch_assoc();
		$value11= $row11['line'];
		
	if ($value10 == '0' || $value11 == '0') //tara akn kotha bola start korte pare 
	{
		
		//now ata process table a jabe min++ hbe line update hbe result ager moto e hbe 
		
		$row20 = $run20->fetch_assoc();
		$value20= $row20['length'];
		
		
		$value21= $value20 + $value;
		$row6 = $run6->fetch_assoc();
		$value6= $row6['fromtel'];             //this is fromtel
		
		
		$row7 = $run7->fetch_assoc();
		$value7= $row7['totel'];    
		
		$qqq = "INSERT INTO process(fromtel,totel,end,id)VALUES('$value6','$value7','$value21',' ')";
		
		$runq = mysqli_query($connection,$qqq);
		
	      $row4 = $run4->fetch_assoc();
		$value4= $row4['max'];   //max line no value
	
		
	     $row5 = $run5->fetch_assoc();
		$value5= $row5['min'];  //min line no value 
		
		$qmin = "UPDATE link SET min=min+1";
	  
	  $minrun = mysqli_query($connection,$qmin);
	  
	  $row6 = $run6->fetch_assoc();
		$value6= $row6['fromtel'];             //this is fromtel
		
		
		$row7 = $run7->fetch_assoc();
		$value7= $row7['totel'];                     //this is totel
       $sql8="UPDATE initial SET line=1 WHERE no='$value6'";
        $run8 = mysqli_query($connection,$sql8);
		
		$sql9="UPDATE initial SET line=1 WHERE no='$value7'";
        $run9 = mysqli_query($connection,$sql9);
	  
	  if($run9)
	  {
		  
		  echo 'line update';
	  }
		
		
		
		
		
		
		/*
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
       echo 'success completd and updated';
	   
	   //its working now you need to show the result 
		}
		
		*/
		
	}
	
	else {
		
		$sql12="SELECT process FROM result WHERE id = '2'";
        $run12 = mysqli_query($connection,$sql12);
		
		$row12 = $run12->fetch_assoc();
		$value12= $row12['process'];

		$sql14="SELECT busy FROM result WHERE id = '2'";
        $run14 = mysqli_query($connection,$sql14);
		
		$row14 = $run14->fetch_assoc();
		$value14= $row14['busy'];
		
		//echo 'sucees'; // process+ busy +
		
		$upp="UPDATE result SET process ='$value12'+1,busy='$value14'+1 WHERE id = '2'";
		$upd = mysqli_query($connection,$upp);
		if($upd){
			
//now show the updated result 
       echo 'success line busy';
	   
	   //its working now you need to show the result 
		}
	}
		
		
		
		
		
	}
		else{
			
			$sql12="SELECT process FROM result WHERE id = '2'";
        $run12 = mysqli_query($connection,$sql12);
		
		$row12 = $run12->fetch_assoc();
		$value12= $row12['process'];

		$sql15="SELECT block FROM result WHERE id = '2'";
        $run15 = mysqli_query($connection,$sql15);
		
		$row15 = $run15->fetch_assoc();
		$value15= $row15['block'];
		
		//echo 'sucees'; // process+ block +
		
		$upb="UPDATE result SET process ='$value12'+1,block='$value15'+1 WHERE id = '2'";
		$upbd = mysqli_query($connection,$upb);
		if($upbd){
			
//now show the updated result 
       echo 'success line  is blocked ';
	   
	   //its working now you need to show the result 
		}
			
		}
		
		$finalq="DELETE FROM `next` WHERE id='1'";
		$finalrun = mysqli_query($connection,$finalq);
		if($finalq){
			echo 'after all work finally everything is clear in next';
		}
	}	
		
	}
      if($value > $value2) //jodi boro hoy then 
	{
		
		include 'index10.php';
		/*
		$row20 = $run20->fetch_assoc();
		$value20= $row20['length'];
		
		
		$value21= $value20 + $value;
		$row6 = $run6->fetch_assoc();
		$value6= $row6['fromtel'];             //this is fromtel
		
		
		$row7 = $run7->fetch_assoc();
		$value7= $row7['totel'];    
		
		$qqq = "INSERT INTO process(fromtel,totel,end,id)VALUES('$value6','$value7','$value21',' ')";
		
		$runq = mysqli_query($connection,$qqq);
		if($runq)
		{
			
			echo 'done work fine this is index7 where is arrival work '; //update hoise process table 
		}
		//jodi choto na hoi tahole very II update process table processs table work 
		
		*/
	}
	
	
	
	
	



?>