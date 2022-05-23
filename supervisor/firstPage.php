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
	  $Fname = $_POST['Fname'];
	  $Sname = $_POST['Sname'];
	  $Tname = $_POST['Tname'];
	  $Lname = $_POST['Lname'];
      $a1 =$_SESSION["Username"];
	  
	  $query2 = "SELECT * FROM coordinator";  
           $result2 = mysqli_query($connect, $query2);
		   $row2 = mysqli_fetch_array($result2);
		   $coor_username = $row2['Username'];

$sql = "UPDATE supervisors SET First_name = '$Fname', Middle_name1 = '$Sname', Middle_name2 = '$Tname', Last_name = '$Lname',first_time = 0 WHERE Usernam = '$a1' " ;
							  if($result4 = mysqli_query($connect, $sql)){
								  if($coor_username == $a1) { 
				        header("location:/coordinatior/Dashboard-Part1-main/coor_home.php");
				          exit(); 
					 } 
                  else {
					  header("location:supervisor_home.php");
				          exit();
				  }			
	                            
								}
								   
							  
							  else {echo("Error description: " . $connect -> error); }

?>

