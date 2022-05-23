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

if(isset($_GET['id'])){
   include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);
    
    
    
    
    
    
    
    
    
    $q = "SELECT *FROM coordinator";
     if( $result= mysqli_query($connect, $q)){
        
          if ($row3 = mysqli_fetch_array($result)> 0){
            $sql= "DELETE FROM coordinator WHERE row='1'";
   
if( $result= mysqli_query($connect, $sql)){
   
   
}
    else {echo("Error description 1: " . $connect -> error);
        
         }$sql = "INSERT INTO coordinator (Arabic_name, ID)
SELECT 	Arabic_name, Id FROM supervisors
WHERE Id='$id'";
             
             $result = mysqli_query($connect, $sql);
   if ($result) {
   	  header("Location: ../Admin.php?success=successfully update coordinator");
   }/*else {
      header("Location: ../read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read.php");
}*/
             
    else {echo("Error description: " . $connect -> error);
        
         }
         }
         else {
    
  $sql = "INSERT INTO coordinator (Arabic_name, ID)
SELECT 	Arabic_name, Id FROM supervisors
WHERE Id='$id'";
             
             $result = mysqli_query($connect, $sql);
   if ($result) {
   	  header("Location: ../Admin.php?success=successfully update coordinator");
   }/*else {
      header("Location: ../read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read.php");
}*/
             
    else {echo("Error description: " . $connect -> error);
        
         }
         }
     }

        
        
     }
    
    
	/*$sql = "INSERT INTO coordinator (Username, Supervisor_ID)
SELECT 	Usernam, Id FROM supervisors
WHERE Id=$id";*/
    
   