<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "gpms";

 session_start();
// Create connection
$connect = new mysqli($servername, $username, $password,$db);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}


 if(isset($_POST['Accept'])){
	 //$date_clicked = date('Y-m-d H:i:s');
 $areviwe = $_POST['content'];
  $id = $_GET['id'];
  $coor = 'Coordinatior';
 $q = " update description set supervisor_rev= '$areviwe', status='$coor'  where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:descriptionS.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 } 
		
?>