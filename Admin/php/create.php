<?php


$servername = "localhost";
$username = "root";
$password = "root";
$db = "gpms";

 session_start();
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>


<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$ID = validate($_POST['ID']);
  


	$user_data = 'name='.$name. 'ID='.$ID;

	if (empty($name)) {
		header("Location: ../Admin.php?error=Name is required&$user_data");
	}else if (empty($ID)) {
		header("Location: ../Admin.php?error=ID is required&$user_data");
        }else {

       $sql = "INSERT INTO supervisors(Arabic_name, Id) 
               VALUES('$name', '$ID')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../Admin.php?success=successfully created");
       }else {
           echo("Error description: " . $conn -> error);
         // header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}