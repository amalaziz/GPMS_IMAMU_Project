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

$sql_query  =  "insert archive select * from finalproject"; 
    if ($connect->query($sql_query) === true) 
{ 
     header('location:/admin/Admin.php'); 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
        .$connect->error; 
} 
?>