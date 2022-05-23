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

?>



<?php 
      $pemail = $_POST['pEmail'];
	  $phone = $_POST['phone'];
	  $Fname = $_POST['Fname'];
	  $Sname = $_POST['Sname'];
	  $Tname = $_POST['Tname'];
	  $Lname = $_POST['Lname'];
      $a1 =$_SESSION["Username"];

$sql = "UPDATE student SET PEmail = '$pemail' , Phone_No = '$phone' , First_name = '$Fname', Middle_name1 = '$Sname', Middle_name2 = '$Tname', Last_name = '$Lname',first_time = 0 WHERE Username = '$a1' " ;
							  if($result4 = mysqli_query($connect, $sql)){
	                            
								  header("location:student_home.php");
								exit();}
								   
							  
							  else {echo 'Not conect'; }

?>

