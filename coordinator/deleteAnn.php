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

$id = $_GET['id'];

$q = " DELETE FROM announcement WHERE ID = '$id' ";

 if ($query = mysqli_query($connect,$q)){

header('location:announcment.php');
 }
 else {echo("Error description: " . mysqli_error($connect));}

?>