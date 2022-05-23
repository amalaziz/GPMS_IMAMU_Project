<?php
$servername = "localhost";
            $username = "root";
            $password = "root";
            $db = "gpms";
// Create connection
$connect = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
session_start();

$review = $_REQUEST['comment'];

$sql2 = "INSERT TO review (review, Section_No) VALUES ($review , 373)";
                         if($result2 = mysqli_query($connect, $sql2))
{
                         if(mysqli_num_rows($result2)>0){
							 
						 }
}


?>