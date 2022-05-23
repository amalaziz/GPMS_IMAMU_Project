<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=gpms', 'root', 'root');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event, coruse_NO) 
 VALUES (:title, :start_event, :end_event, :coruse_NO)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':coruse_NO' => $_POST['courseNo']
  )
 );
}


?>