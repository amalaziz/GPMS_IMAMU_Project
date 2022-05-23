<?php $dbh = new PDO("mysql:host=localhost;dbname=gpms", "root", "root");
 $id = isset($_GET['id'])? $_GET['id'] :""; 
 
 $known_mime_types=array(
"pdf" => "application/pdf",
"txt" => "text/plain",
"html" => "text/html",
"htm" => "text/html",
"exe" => "application/octet-stream",
"zip" => "application/zip",
"docx" => "	application/vnd.openxmlformats-officedocument.wordprocessingml.document",
"xls" => "application/vnd.ms-excel",
"ppt" => "application/vnd.ms-powerpoint",
"gif" => "image/gif",
"png" => "image/png",
"jpeg"=> "image/jpg",
"jpg" => "image/jpg",
"php" => "text/plain"
);


$stat = $dbh->prepare("select * from finalproject where id=?");
 $stat->bindParam(1, $id); 
$stat->execute(); 
$row =$stat->fetch();

	$file=$row['name'];
$file_extension = strtolower(substr(strrchr($file,"."),1));
if(array_key_exists($file_extension, $known_mime_types)){
$mime_type=$known_mime_types[$file_extension];
} 
global $mime_type;
 header('Content-Type:' .$row['mime']); 
 header('Content-Disposition: attachment; filename="'.$row['name'].'"');
readfile($row['name']);
//echo $row['data']; 
echo $row['mime'].$row['data'];

 

 

?>