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

include "db_conn.php";

$sql = "SELECT * FROM supervisors ORDER BY Id DESC";
$result = mysqli_query($connect, $sql);