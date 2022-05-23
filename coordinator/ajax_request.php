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
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordanitor Management Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="student_style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
		<style>
	body {
	     background-color:  #f1f1f1;
		 margin-top: o%
	}
/* Style page content */
.main {
	padding: 20px;
	width: 77%;
	margin-right: 61px;
	margin-left:5%;
	margin-top:6%;
} 
.dashboard .main .title{
    margin-bottom: 30px;
	margin-top: 40px;
	  overflow: hidden;
}

.dashboard .main .title h1{
    font-size: 35px;
    line-height: 10px;
    font-family: 'Open Sans', sans-serif;
    line-height: 28px;
    margin: 0;
    display: inline-block;

}

	p.start {
    font-family: 'Open Sans', sans-serif;
    font-size: 22px;
    line-height: 28px;
    text-align: justify;
 
}
.dashboard .main .title label{
    margin-right: 10px;
    color: #727272;
    font-size: 16px;
	margin-left:3%;
   
}
.dashboard .main .title select{
    border: none;
    font-size: 16px;
    background-color: rgba( 0 0 0 / 0);
	display: inline-block;
}
.dashboard .main .title button{
    color: blue;
    font-size: 20px;	
    margin: auto;
}
.topnav .userName {
  
  position: absolute;
  top :45px;
  right: 70px;
  color: black;
  text-align: center;
  padding: 0px 4px;
  margin-top: 0px;
  font-size: 17px;
}
</style>
</head>
<body>

<body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo"></a>
                    </div>
                     <a href="Dashboard-Part1-main/coor_home.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                         <a href="/coordinatior/FileSubmit/uploadAss.php" class="nav__link ">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">GP documents</span>
                        </a>

                        <a href="cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="announcment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>
							 
 <a href="/supervisor/supervisor_home.php" class="nav__link">
                            <ion-icon name="arrow-back-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Supervisor Home</span>
                        </a>
						
                        <a href="/coordinatior/Dashboard-Part1-main/coor_help.php" class="nav__link">
                            <ion-icon name="help-circle-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Help</span>
                        </a>
                </div>

                <a href="#" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

      
      
<div class="topnav">
<img class="logo" src="/logoo.png" alt="GPMS Logo" width="140" height="70">

<?php 

$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM supervisors' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Usernam"] == $a1){
		$supid = $row4['Id'];
echo $row4["First_name"].' '.$row4["Middle_name1"].' '.$row4["Last_name"].'</div></div>';
	}}
}

		$sql2 = "SELECT COUNT(ID), Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id FROM student GROUP BY Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id";
                         if($result2 = mysqli_query($connect, $sql2))
{              $grob = mysqli_num_rows($result2);
}
?>
</div>



    <div class="dashboard">

        <section class="main">

            <div class="title">
                <h1 class="start">Groups/<?php  echo ' '.$grob; ?></h1>
                <p class="start" id="groupNum">  </p>
               <!--<label for="projects">Sort By</label>
                <select name="projects" id="projectFilter">
                    <option value="">All..</option>
                    <option value="IS497">GP1 (IS497)</option>
                    <option value="IS498">GP2 (IS498)</option>
                </select>-->
				<script>
function my_function() {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.write(this.responseText);
    }
  };
  request.open("GET", "ajax_request.php", true);
  request.send();
}
</script>
            </div>

<?php
						
								 $sql2 = "SELECT COUNT(ID), Section_No, coruse_NO, Group_No, supervisor_id, examiner1_id, examiner2_id FROM student GROUP BY Section_No, coruse_NO, supervisor_id, examiner1_id, Group_No, examiner2_id";
                         if($result2 = mysqli_query($connect, $sql2))
{
                         if(mysqli_num_rows($result2)>0){
							 echo ' <div class="project_list">';
							 while ($row2 = mysqli_fetch_array($result2)){
							  echo ' <div class="project" id="divProject" data-status= "IS498"  title= "'.$row2["coruse_NO"].'">';
							  if ($row2["coruse_NO"]=='IS498'){
							  echo ' <div class="category category_color3">GP2</div>';}
							  else {
								echo ' <div class="category category_color2">GP1</div>';  
							  }
							  
							 $gron = $row2['Group_No'];
						      echo '<h2>Group </h2><form action="insert.php" method = "post">
  <label for="quantity">Group Numper (between 1 and 50):</label>
  <input type="number" id="quantity" name="groupnum" min="01" max="50" value ='.$gron.'>';
  
        $sql = "SELECT * FROM project where Section_No =".$row2["Section_No"];
					         if($result = mysqli_query($connect, $sql))
{
                             if(mysqli_num_rows($result)>0){
								 if ($row = mysqli_fetch_array($result)){
								    $project = $row['Title'];
								 }
							 }
							 else {
								$project = ''; 
							 }
}
							
                                $sql = "SELECT * FROM supervisors";
					         if($result = mysqli_query($connect, $sql))
{
                             if(mysqli_num_rows($result)>0){
		echo '<lable><strong style= "font-size: 18px;"> Supervisor: </strong></lable>';
          echo '<select name="supervisor" style="width: 180px">';
		while ($row = mysqli_fetch_array($result)){
			echo '<option value='.$row['Id'].' ';
			if ($row['Id']== $row2['supervisor_id']){
			echo 'selected';
			}
			echo '>';
			echo $row['Arabic_name'];	
			echo '</option>';	
		}
		echo '</select>';
	}
}	  
echo ' <div class="activity"><strong>Section:</strong>';	 
			              echo '<input type="hidden" name="varname" value='.$row2['Section_No'].'> '.$row2['Section_No'].'</input>';	
		echo '<br>'.'<strong>Course:</strong>'.' '.$row2['coruse_NO'].'<br>'.'<strong>Project title:</strong>'.' '.$project.'<table><tr><th class ="leftSide">Examiner 1</th><th class ="rightSide">Examiner 2</th></tr>';
						 
						 echo '<tr><td class ="leftSide">';
						 
						$sql3 = "SELECT * FROM supervisors";
					         if($result3 = mysqli_query($connect, $sql3))
{
                             if(mysqli_num_rows($result3)>0){
        echo '<select name="examiner1" style="width: 120px"  required id="inputid">';
		while ($row3 = mysqli_fetch_array($result3)){
			echo '<option value='.$row3['Id'].' ';
			if ($row3['Id']== $row2['examiner1_id']){
			echo 'selected';
			}
			echo '>';
			echo $row3['Arabic_name'];	
			echo '</option>';	
		}
		echo '</select>';
	}
}	  

echo ' </td>'.' <td class ="rightSide">';
$sql4 = "SELECT * FROM supervisors";
if($result4 = mysqli_query($connect, $sql4))
{
    if(mysqli_num_rows($result4)>0){
          echo '<select name="examiner2" style="width: 120px"  required id="inputid">';
		while ($row4 = mysqli_fetch_array($result4)){
			echo '<option value='.$row4['Id'].' ';
			if ($row4['Id']== $row2['examiner2_id']){
			echo 'selected';
			}
			echo '>';
			echo $row4['Arabic_name'];	
			echo '</option>';	
		}
		echo '</select>';
	}
}	  
echo ' </td>'.'</tr></table></div>';
echo '<input type="submit" value ="Save">';
echo '</form>';
echo ' </div>';
						 }
						 echo '</div>';
}
}
							 
?>

        </section><!-- Main End -->
		
    </div><!-- Dashboard End-->
    <div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

	    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
 
	  <script>
	  	
const showMenu = (toggleId, navbarId, bodyId)=>{
  const toggle = document.getElementById(toggleId),
  navbar = document.getElementById(navbarId),
  bodypadding = document.getElementById(bodyId)

  if(toggle && navbar){
    toggle.addEventListener('click', ()=>{
      navbar.classList.toggle('expander')

      bodypadding.classList.toggle('body-pd')
    })
  }
}
showMenu('nav-toggle','navbar','body-pd')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
  linkColor.forEach(l=> l.classList.remove('active'))
  this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/ 
const linkCollapse = document.getElementsByClassName('collapse__link')
var i

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
    const collapseMenu = this.nextElementSibling
    collapseMenu.classList.toggle('showCollapse')

    const rotate = collapseMenu.previousElementSibling
    rotate.classList.toggle('rotate')
  })
  }

</script>
 <script src="assets/js/script.js" > </script>
</body>
</html>
