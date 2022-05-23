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


 $sta  = $_POST['st'];
   $id = $_POST['id'];
  $query = "UPDATE progress_report SET state = '$sta ' WHERE id = $id " ;
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }

?>