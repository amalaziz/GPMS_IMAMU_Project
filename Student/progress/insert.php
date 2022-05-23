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

if (isset($_POST['Sub'])) {
	$id = $_GET['id'];
	echo 'hi </br>'.$id;
	$text = $_POST['Text1'];
	//echo $text;
	$sql ="INSERT INTO progress_report (section_number, task_name) VALUES (".$id.", '$text')";
	if($result4 = mysqli_query($connect, $sql)){
		 header("location:index.php");
				       exit(); 
	}
	else {
	echo("Error description: " . $connect -> error);
}
}


?>