<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
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
          
        // Taking all 5 values from the form data(input)
        $Group_NO =  $_REQUEST['groupnum'];
		$Section_NO =  $_REQUEST['varname'];
        $supervisor = $_REQUEST['supervisor'];
		$examinar1 = $_REQUEST['examiner1'];
		$examinar2 = $_REQUEST['examiner2'];
		
		$abbreviation1 = explode(' ', trim($supervisor ))[0];
		$abbreviation2 = explode(' ', trim($examinar1 ))[0];
		$abbreviation3 = explode(' ', trim($examinar2 ))[0];
		
		$sql1 = "SELECT Id FROM supervisors WHERE First_name = '$abbreviation1'";
		if($result2 = mysqli_query($connect, $sql1)){
		if(mysqli_num_rows($result2)>0){
while ($row2 = mysqli_fetch_array($result2)){
					
		$sup_id = $row2['Id'];	
}
		}
		}
		
			$sql2 = "SELECT Id FROM supervisors WHERE First_name = '$abbreviation2'";
		if($result3 = mysqli_query($connect, $sql2)){
		if(mysqli_num_rows($result3)>0){
while ($row3 = mysqli_fetch_array($result3)){
					
		$ex1_id = $row3['Id'];	
}
		}
		}
		
		$sql3 = "SELECT Id FROM supervisors WHERE First_name = '$abbreviation3'";
		if($result4 = mysqli_query($connect, $sql3)){
		if(mysqli_num_rows($result4)>0){
while ($row4 = mysqli_fetch_array($result4)){
					
		$ex2_id = $row4['Id'];	
}
		}
		}
          
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE student set Group_No = '$Group_NO', supervisor_id = '$sup_id', examiner1_id = '$ex1_id', examiner2_id = '$ex2_id'  where Section_No = '$Section_NO' ";
          
    if(mysqli_query($connect, $sql)){
		header("location:GroupDetails.php");
          /*  echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$Group_NO\n  "); */
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($connect);
        }
        
        // Close connection
        mysqli_close($connect);
        ?>
    </center>
</body>
  
</html>