<?php


$servername = "localhost";
$username = "root";
$password = "root";
$db = "gpms";

// Create connection
$connect = new mysqli($servername, $username, $password,$db);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

?>


<?php  

include "db_conn.php";

$sql = "SELECT * FROM student ORDER BY ID DESC";
$result = mysqli_query($connect, $sql);