<?php
$connect = mysqli_connect("localhost", "root", "root", "gpms");

 $phase = mysqli_real_escape_string($connect, $_POST["phase"]);
$week = $_POST["week"];
$section = $_POST["section"];

$str_arr = explode (",", $phase); 
$arrLength = count($str_arr);

$str_arr2 = explode (",", $week);
$arrLength2 = count($str_arr2);
$array = array();
$cont=0;
for ($ii=0; $ii<15; $ii++){
	
	for($j=0; $j<$arrLength2; $j++){
	if(substr($str_arr2[$j], 0, 1)== $ii+1){
	$test .= $str_arr2[$j].',';	
	
	}
	
	}
	
	if(!is_null($test)){
	$array[$cont] = $test;
	unset($test);
	$cont++;
	}
	
}

$query1 = "SELECT * FROM first_meeting WHERE Section_No=$section ";
 if($result2=mysqli_query($connect, $query1))
 {
	
  while($row3 = mysqli_fetch_array($result2)){
	 
		  for($ii=0; $ii<$arrLength; $ii++){
			  
		  if(strtok($row3['phase'], '.')== strtok($str_arr[$ii], '.')){
			  $tas =$row3['phase'];
			  if(!empty($str_arr)){
			$query2 = "UPDATE first_meeting SET phase='$str_arr[$ii]', week='$array[$ii]' WHERE phase='$tas'";
              if($result2=mysqli_query($connect, $query2))
			  {unset($str_arr[$ii]);}  else {echo("Error description: " . $connect -> error);}}

		  }
		   if(strtok($row3['week'], '.')==strtok($array[$ii], '.')){
			  $week =$row3['week'];
			  
			  if(!empty($array)){
			$query3 = "UPDATE first_meeting SET week='$array[$ii]' WHERE week='$week'";
              if($result3=mysqli_query($connect, $query3))
			  {unset($array[$ii]);}  else {echo("Error description: " . $connect -> error);}}

		  }
		  }
	  
	  
	  
	  
	    
  }
 }

if((!empty($str_arr)) && (!empty($array))){
for($i=0; $i<$arrLength; $i++){
 
 $query = "INSERT INTO first_meeting(phase, week, Section_No) VALUES('$str_arr[$i]', '$array[$i]', '$section')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
 else {echo("Error description: " . $connect -> error);}
}
}

?>