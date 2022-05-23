<?php


$servername = "localhost";
$username = "root";
$password = "root";
$db = "gpms";

 session_start();
// Create connection
$connect1 = new mysqli($servername, $username, $password,$db);

// Check connection
if ($connect1->connect_error) {
  die("Connection failed: " . $connect1->connect_error);
}


//load.php

$connect = new PDO('mysql:host=localhost;dbname=gpms', 'root', 'root');

$data = array();

$query = "SELECT * FROM events";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


$a1 =$_SESSION["Username"];

		$sql4 = "SELECT * FROM student WHERE Username = '$a1'" ;
			if($result4 = mysqli_query($connect1, $sql4))
{                if($row4 = mysqli_fetch_array($result4)){
	 $corseNo = $row4['coruse_NO'];
	
}   else {echo " " ;}	
    global $corseNo;
                       }
	  else {echo 'NOOOT';}




foreach($result as $row)
{
	global $corseNo;
	if ( $row['coruse_NO'] == "$corseNo" ){
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"],
   'courseNo' => $row['coruse_NO']
 );
}
}

echo json_encode($data);



?>
