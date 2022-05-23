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

	$sql = "DELETE FROM student
	        WHERE ID=$id";
   $result = mysqli_query($connect, $sql);
   if ($result) {
   	  header("Location: ../Admin.php?success=successfully deleted");
   }else {
      header("Location: ../Admin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../Admin.php");
}