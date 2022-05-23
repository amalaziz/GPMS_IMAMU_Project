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


if(isset($_POST["submit"])){
	    $date_clicked = date('Y-m-d H:i:s');
        $countryarr=$_POST["Country"];
		$aTitle = $_POST["aTitle"];
		$aText = $_POST["aText"];
        $newvalues=  implode(",", $countryarr);
		$insert="Insert into announcement (User_type, title, Message, Date) values ('$newvalues', '$aTitle', '$aText', ' $date_clicked')";
        if ($query = mysqli_query($connect,$insert)){
         header('location:announcment.php');
}
}
        
	?>