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

<?php include "phps/read.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>-->
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
            
			<table class="table table-striped display" id="example" width="100%" cellspacing="0">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">ID</th>
                 <th scope="col">Group number</th>
			      <th scope="col">Secction number</th>    
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['Arabic_Name']?></td>
			      <td><?php echo $rows['ID']; ?></td>
                    <td><?=$rows['Group_No']?></td>
			      <td><?php echo $rows['Section_No']; ?></td>
			      <td><!--<a href="update.php?id=<?=$rows['ID']?>" 
			      	     class="btn btn-success">Update</a>-->

			      	  <a href="phps/delete.php?id=<?=$rows['ID']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<!--<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>-->
		</div>
	</div>
</body>
</html>