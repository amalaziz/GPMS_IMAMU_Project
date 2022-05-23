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

 
$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM student' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    

                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Username"] == $a1){
    $arabic_name = $row4['Arabic_Name'];
	}}
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta  charset="UTF-8">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width:47%;
  display:inline-block;
}
.container2 {
  padding: 16px;
  background-color: white;
  width:47%;
  display:inline-block;
}

/* Full-width input fields */
input[type=text], input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=tel]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #A6B493;
  color: white;
  padding: 12px 15px;
  margin: 8px 50px;
  border: none;
  cursor: pointer;
  width: 90%;
  opacity: 0.9;
  font-size:1.30em;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>


<form action="personalInfo.php" method = "POST">
  
    <h1>Personal Information</h1>
    <p>مرحبا <?php echo '<strong>'.$arabic_name.'</strong> ,';  ?> يرجى تعبئة البيانات بشكل صحيح لاتمام عملية الدخول , اولا ادخال الاسم الرباعي باللغه الانجليزية و رقم الجوال والبريد الالكتروني الخاص بك </p>
    <hr>
<div class="container">
    <label for="fn"><b>First Name (in english)</b></label>
    <input type="text" placeholder="Enter your first name" name="Fname" id="fn" required>
	</br>
    <label for="sn"><b>Second Name (in english)</b></label>
    <input type="text" placeholder="Enter your second name" name="Sname" id="sn" required>
	</br>
	<label for="email"><b>Private Email</b></label>
    <input type="text" placeholder="Enter your Private Email" name="pEmail" id="email" required>
    </br>
	</div>
	<div class="container2">
    <label for="tn"><b>Third Name (in english)</b></label>
    <input type="text" placeholder="Enter your third name" name="Tname" id="tn" required>
	</br>
    <label for="ln"><b>Last Name (in english)</b></label>
    <input type="text" placeholder="Enter your last name" name="Lname" id="ln" required>
	 <label for="psw"><b>Phone number</b></label>
    <input type="tel" id="phone" name="phone" placeholder="051029384777" pattern="05[0-9]{8}" required>
</br>
	</div>
    <hr>
	<input type="checkbox" required>
  <label for="vehicle1"> I Approve that all the data entered above are correct.</label><br>
   

    <button type="submit" class="registerbtn">Send</button>

  
 
</form>

</body>
</html>