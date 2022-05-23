<?php  
			$servername = "localhost";
            $username = "root";
            $password = "root";
            $db = "gpms";
// Create connection
$connect = mysqli_connect($servername, $username, $password,$db);
 session_start();
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}?>
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
.openbtn {
	background-color: white;
	border: 1px solid white;
	font-size: 26px;
	color: black;
	font-weight: bolder;
  cursor: pointer;
}
.dropup {
  position: relative;
  display: inline-block;
}

/* Dropup content (Hidden by Default) */
.dropup-content {
  display: none;
  position: absolute;
  bottom: 50px;
  right:0px;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropup */
.dropup-content button {
	width:100%;
	font-size:17px;
	text-align: left;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border: none;
   font-family: "Times New Roman", Times, serif;
}

/* Change color of dropup links on hover */
.dropup-content button:hover {
	background-color: #99ccff;
	color: #0000ff;

}

.dropup-content button .removeButton {
	font-size:20px;
	text-align: right;
	position: absolute;
	right : 8px;
    top: 0px;	
}
.dropup-content button .editButton {
	font-size:20px;
	text-align: right;
	position: absolute;
	right : 8px;
    bottom: 5px;	
}

/* Show the dropup menu on hover */
.dropup:hover .dropup-content {
  display: block;
}

/* Change the background color of the dropup button when the dropup content is shown */
.dropup:hover .openbtn {
  background-color: #2980B9;
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
    font-size: 18px;	
   margin-left:58%;
   padding: 5px 40px;
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
                    <div class="nav__list">
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
                </div>

                <a href="/logout.php" class="nav__link">
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
       <button onclick="my_function()">Edit</button>
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

            <div class="project_list"><!-- Project List -->
				
				<?php
						 $sql2 = "SELECT COUNT(ID), Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id FROM student GROUP BY Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id";
                         if($result2 = mysqli_query($connect, $sql2))
{
                         if(mysqli_num_rows($result2)>0){
							 echo ' <div class="project_list">';
							 while ($row2 = mysqli_fetch_array($result2)){
							  echo ' <div class="project" id="divProject" data-status= "'.$row2["coruse_NO"].'"  title= "'.$row2["coruse_NO"].'">';
							  if ($row2["coruse_NO"]=='IS498'){
							  echo ' <div class="category category_color3">GP2</div>';}
							  else {
								echo ' <div class="category category_color2">GP1</div>';  
							  }
							  $va2 = $row2['Section_No'];
							  $sql4 = "SELECT * FROM student where Section_No= $va2";
							  if($result4 = mysqli_query($connect, $sql4))
{                                $results = array();
                                while ($row5 = mysqli_fetch_array($result4)){
								$results[] = $row5['First_name'];
								}
}								
								if($result4 = mysqli_query($connect, $sql4)){
								$myArray = implode(', ', $results);
							     echo '<h2>Group ';
							   while ($row4 = mysqli_fetch_array($result4)){
								echo ' '.$row4['Group_No'].'</h2>'; 
                                break;								
							   }
							   
}
						      $sql = "SELECT * FROM project where Section_No = $va2";
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
							  $va = $row2['supervisor_id'];
							  $sql = "SELECT * FROM supervisors where Id = $va";
					         if($result = mysqli_query($connect, $sql))
{
                             if(mysqli_num_rows($result)>0){
		echo '<p style="disply: inline-block;"><strong style= "font-size: 18px;"> Supervisor: </strong>';
        
		while ($row = mysqli_fetch_array($result)){
			
			echo $row['Arabic_name'].'</p>';	
			
		}
	}						  
							 } 
			global $myArray;
			
		echo ' <div class="activity"><strong>Section:</strong>';	 
			              echo ' '.$row2['Section_No'];	
		echo '<br><strong>Student names: '.$myArray.'</strong>';
		echo '<br>'.'<strong>Course:</strong>'.' '.$row2['coruse_NO'].'<br>'.'<strong>Project title:</strong>'.' '.$project.'<table><tr><th class ="leftSide">Examiner 1</th><th class ="rightSide">Examiner 2</th></tr>';
						 echo '<tr><td class ="leftSide">';
						 
						      
							  $va2 = $row2['examiner1_id'];
							  $sql3 = "SELECT * FROM supervisors where Id = $va2";
					         if($result3 = mysqli_query($connect, $sql3))
{
                             if(mysqli_num_rows($result3)>0){
		//echo '<p style="disply: inline-block;"><strong style= "font-size: 18px;"> Supervisor: </strong>';
        
		while ($row3 = mysqli_fetch_array($result3)){
			
			echo $row3['Arabic_name'];	
			
		}
	}						  
							 }  
	
echo ' </td>'.' <td class ="rightSide">';

$va3 = $row2['examiner2_id'];
$sql4 = "SELECT * FROM supervisors where Id = $va3";
if($result4 = mysqli_query($connect, $sql4))
{
    if(mysqli_num_rows($result4)>0){
          
		while ($row4 = mysqli_fetch_array($result4)){
				echo $row4['Arabic_name'];		
		}
	}	
}
echo ' </td>'.'</tr></table></div>';
echo ' </div>';
						 }
						 echo '</div>';
}
}

						 ?>
                

            

            </div><!-- Project List End -->

        </section>

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