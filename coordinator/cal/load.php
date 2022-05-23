<?php



//load.php

$connect = new PDO('mysql:host=localhost;dbname=gpms', 'root', 'root');

$data = array();

$query = "SELECT * FROM events";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


foreach($result as $row)
{
	//if ( $row['coruse_NO'] == 'IS49'){
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"],
   'courseNo' => $row['coruse_NO']
 );
//}
}

echo json_encode($data);



?>
