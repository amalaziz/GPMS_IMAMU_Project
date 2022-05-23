<?php
 session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log in</title>
        <!--<link rel="stylesheet" href="style.css">-->
        <style>
            @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
            background: linear-gradient(to right, #a7a7a7 0%, #466a75 100%);

            
        }
            .login-box{
                width: 350px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                 padding:40px;
				 background-color:white;
			
                /*color: white;*/
            }
			img {
        position: absolute;
        top: 20px;
        right: 20px;
    }
            
            .login-box h1{
                float: left;
                font-size: 40px;
                border-bottom: 6px solid #7d7676;
                margin-bottom: 50px;
                padding: 13px 0;
            }
            
            .textbox{
                width: 100%;
                overflow: hidden;
                font-size: 20px;
                padding: 8px 0;
                margin: 8px 0;
                border-bottom: 1px solid #d0d0d0;
            }
            
            .textbox i{
                width: 26px;
                float: left;
                text-align: center;
                
            }
            
            .textbox input{
                border: none;
                outline: none;
                background: none;
                /*color: white;*/
                font-size: 18px;
                width: 80%;
                float: left;
                margin: 0 10px;
            }
            .btn{
                width: 100%;
                 background: linear-gradient(to left, #d0d0d0 43%, #466a75 100%);
                color: white;
				border:none;
                padding: 8px;
                font-size: 18px;
                cursor: pointer;
                margin: 12px 0;
            }
			
			.alert {
  padding: 20px;
  background-color: #ff4d4d;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.alert.warning {background-color: #ff9800;}
         </style>
    
    </head>
    <body>
        <div class="login-box">
        <h1>Login<img class="logo" src="Logoo_remove.png" alt="GPMS Logo" width="140" height="70"></h1>
		   <form action = "login.php" method = "POST">
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="Username" value="">
        </div>
        
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" value="">
        </div></br>
		<a href="https://www.imamu.edu.sa/Pages/CreateUser.aspx">Do you froget your password?</a></br></br>
            <input type="submit" class="btn" type="button" name="submit" value="Sign in">
			</form>
            
            </div>
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


if(empty($_POST["Username"]) || empty($_POST["password"]))  
      {  
           echo '<div class="alert"> 
  <strong>Warning !</strong> Both fields are required.
</div>';  
      }  
      else  
      {  
           $username1 = $_POST["Username"];  
           $password = $_POST["password"];  
		   
           $query = "SELECT * FROM student WHERE Username = '$username1' and Password = '$password'";  
           $result = mysqli_query($connect, $query); 
           $cont = mysqli_num_rows($result);
		   $row = mysqli_fetch_array($result);
		   
		   $query3 = "SELECT * FROM admin WHERE Username = '$username1' and Password = '$password'";  
           $result3 = mysqli_query($connect, $query3); 
           $cont3 = mysqli_num_rows($result3);
		   $row3 = mysqli_fetch_array($result3);

           $query1 = "SELECT * FROM supervisors WHERE Usernam = '$username1' and Password = '$password'";  
           $result1 = mysqli_query($connect, $query1); 
           $cont1 = mysqli_num_rows($result1);
		   if($row1 = mysqli_fetch_array($result1))
		   $sup_id = $row1['Id'];
		   
		   $query2 = "SELECT * FROM coordinator";  
           $result2 = mysqli_query($connect, $query2);
		   $row2 = mysqli_fetch_array($result2);
		   $coor_id = $row2['ID'];
		   
		   $_SESSION["Username"] = $username1;
		  
		   
           if($cont > 0)       
           {   
		          if ($row['first_time'] == 1){
					 header("location:contact.php");
				       exit();  
				  }
				  else {
				  header("location:student_home.php");
				   exit();
				  }
  
					  }
					  
					             if($cont3 > 0)       
           {   
		        
				  header("location:admin/Admin.php");
				   exit();
				  
  
					  }
					  
                     if($cont1 > 0)  
                     {  
                         if ($row1['first_time'] == 1){
					 header("location:supervisor/firstPage1.php");
				       exit();  
				  }  
				  else if($coor_id == $sup_id) { 
				        header("location:coordinatior/Dashboard-Part1-main/coor_home.php");
				          exit(); 
					 } 
                  else {
					  header("location:supervisor/supervisor_home.php");
				          exit();
				  }					 
						   
	  }
	  
	  if ($cont <= 0 && $cont1 <=0 && $cont3 <=0) {  
					echo '<div class="alert warning">
                                <strong>Warning!</strong> Wrong User Details.</div>';  
                     }
	  }
 ?>
    </body>
</html>