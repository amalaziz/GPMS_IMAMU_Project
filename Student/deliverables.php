<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Deliverables </title>
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	margin-left:1%;
	margin-top:6%;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #466a75;
  background-color: #466a75 ;
  color:white;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  color:white;
  font-size:1em;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 12px 12px;
  border: 4px solid #ccc;
  border-top: none;
}
.vertical-menu {
  width: 100%; /* Set a width if you like */
}

.vertical-menu a {
background-color:  #9fbdc6;
  color: black; /* Black text color */
   border: 1px solid #ccc;
  display: block; /* Make the links appear below each other */
  padding: 12px;  /* Add some padding */
  text-decoration: none; /* Remove underline from links */
  text-align: center;
  margin: 10px 3px;
}

.vertical-menu a:hover {
  background: #ccc; /* Dark grey background on mouse-over */
}	/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:  #f1f1f1;
}

/* Style the name inside the navigation bar */
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
/* Style the logo inside the navigation bar */
.topnav .logo {
  float: left;
  padding: 0px 10px;
   margin-top: 0;
    top: 0;
}

/* Style the serarch input */
.search-icon i{
  position: absolute;
}
.search-icon {
 width: 100%;
            margin-bottom: 10px;
}
 .icon {
            padding: 10px;
            color: green;
            min-width: 50px;
            text-align: center;
			 margin-top: 3px;
  margin-bottom: 3px;
  margin-left: 300px;
        }
		 .input-field {
            width: 30%;
            padding: 10px;
            text-align: center;
			 float: center;
  border: 1px solid grey;
   background-color:  #f1f1f1;
    border-radius: 10px;

  margin-top: 3px;
  margin-bottom: 3px;
  margin-left: 300px;
  font-size: 17px;
        }

.nav__icon1 {
	
	font-size : 24px;
	padding-right: 10px;
	
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally 
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}*/

/* محتوى الصفحه هنا */	
/* Style page content */
.main {
	padding: 20px;
	width: 70%;
	margin-right: 61px;
	margin-left:190px;
	margin-top:40px;
}
/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --nav-width: 92px;

  /*===== Colores =====*/
  --first-color: #0C5DF4;
  --bg-color: #12192C;
  --sub-color: #B6CEFC;
  --white-color: #FFF;
  
  /*===== Fuente y tipografia =====*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: 1rem;
  --small-font-size: .875rem;
  
  /*===== z index =====*/
  --z-fixed: 100;
}


/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}
body{
  position: relative;
  margin: 0;
  padding: 2rem 0 0 6.75rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: .5s;
}
h1{
  margin: 0;
}
ul{
  margin: 0;
  padding: 0;
  list-style: none;
}
a{
  text-decoration: none;
}

/*===== l NAV =====*/
.l-navbar{
  position: fixed;
  top: 0;
  left: 0;
  width: var(--nav-width);
  height: 100vh;
  background-color: #466A75;
  color: var(--white-color);
  padding: 1.5rem 1.5rem 2rem;
  transition: .5s;
  z-index: var(--z-fixed);
}

/*===== NAV =====*/
.nav{
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}
.nav__brand{
  display: grid;
  grid-template-columns: max-content max-content;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 2rem;
}
.nav__toggle{
  font-size: 1.25rem;
  padding: .75rem;
  cursor: pointer;
}
.nav__logo{
  color: var(--white-color);
  font-weight: 600;
}

.nav__link{
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: .75rem;
  padding: .75rem;
  color: var(--white-color);
  border-radius: .5rem;
  margin-bottom: 1rem;
  transition: .3s;
  cursor: pointer;
}
.nav__link:hover{
  background-color: var(--first-color);
}
.nav__icon{
  font-size: 1.25rem;
}
.nav__name{
  font-size: var(--small-font-size);
}

/*Expander menu*/
.expander{
  width: calc(var(--nav-width) + 9.25rem);
}

/*Add padding body*/
.body-pd{
  padding: 2rem 0 0 16rem;
}

/*Active links menu*/
.active{
  background-color: var(--first-color);
}

/*===== COLLAPSE =====*/
.collapse{
  grid-template-columns: 20px max-content 1fr;
}
.collapse__link{
  justify-self: flex-end;
  transition: .5s;
}
.collapse__menu{
  display: none;
  padding: .75rem 2.25rem;
}
.collapse__sublink{
  color: var(--sub-color);
  font-size: var(--small-font-size);
}
.collapse__sublink:hover{
  color: var(--white-color);
}

/*Show collapse*/
.showCollapse{
  display: block;
}

/*Rotate icon*/
.rotate{
  transform: rotate(180deg);
}
.footer {                 font-size: small;
							color:black;
							float: both;
							
							bottom: 0px;
							margin-top: 3%;
							padding-left:65%;
							margin-bottom: 1%;
							
					}
					a {
						color:white;
					}
	.tabcontent span {
		color:green;
		 position:fixed;
		 right:250px;
	}				
/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size)
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
  .vertical-menu  {Width: 450px;}
.tabcontent {  padding: 12px 6px;}
} */
	</style>
	</head>
	   <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo"></a>
                    </div>
                    <div class="nav__list">
                        <a href="student_home.php" class="nav__link">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="deliverables.php" class="nav__link active">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Deliverables</span>
                        </a>

                        <a href="cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="sAnnouncment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>

                        <a href="profile.php" class="nav__link">
                            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Profile</span>
                        </a>
                        <a href="student_help.php" class="nav__link">
                            <ion-icon name="help-circle-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Help</span>
                        </a>
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

      
      
<div class="topnav">
<img class="logo" src="logoo.png" alt="GPMS Logo" width="140" height="70">
  

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
$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM student' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Username"] == $a1){
		$cor = $row4['coruse_NO'];
		$Section_No = $row4['Section_No'];
echo $row4["First_name"].' '.$row4["Middle_name1"].' '.$row4["Last_name"].'</div>';   
	}}
}


?>
</div>


<div class ="main">
 
<div class="tab">
<?php if($cor == 'IS497'){?>
 <button class="tablinks" onclick="openDelev(event, 'GP1')" id="defaultOpen"><strong> GP1 (IS497) </strong></button>
 <button class="tablinks" ><a href="uploadDoc.php"><strong>GP Assessments Standards and Guidelines files</strong> </a></button>
 <?php } if($cor == 'IS498'){?>
  <button class="tablinks" onclick="openDelev(event, 'GP2')" id="defaultOpen"><strong> GP2 (IS498) </strong></button>
  <button class="tablinks" ><a href="uploadDoc.php"><strong>GP Assessments Standards and Guidelines files</strong> </a></button>
<?php } ?>
</div>


<div id="GP1" class="tabcontent">
  <h3>GP1 Deliverables</h3>
  <div class="vertical-menu">
   <a href="firstmeteeing.php">First meeting <span> status: <?php  $qu = "SELECT * FROM first_meeting WHERE Section_No= '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
	  if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['status'];
	}
	  }
	  else {
		echo 'student';  
	  }
 } else {echo("Error description: " . $connect -> error);
         
         }   ?></span></a>
  <a href="proposalSummery.php">Proposal summary <span> status: <?php  $qu = "SELECT * FROM proposal_summary WHERE Section_No= '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
	 $st = 'student'; 
	while ($row3 = mysqli_fetch_array($result2)){
		$st = $row3['status'];
	}
 } else {echo("Error description: " . $connect -> error);
         
         } echo $st;  ?></span></a>
  <a href="progress">Monthly progress report <span> status: <?php  $qu = "SELECT * FROM progress_report WHERE section_number= '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
	  $st = 'student'; 
	while ($row3 = mysqli_fetch_array($result2)){
		$st = $row3['sub_statue'];
	}
 } else {echo("Error description: " . $connect -> error);
         
         } echo $st;  ?></span></a>
   <a href="desc.php">Project description <span>status: <?php  $qu = "SELECT * FROM description WHERE Section_No = '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
	  $st = 'student'; 
	while ($row3 = mysqli_fetch_array($result2)){
		$st = $row3['status'];
	}
 } else {echo("Error description: " . $connect -> error);
         
         } echo $st;  ?></span></a>
  <a href="FileSubmit/uploadt.php">Final project Submissions <span>status: <?php  $qu = "SELECT * FROM finalproject WHERE Section_No = '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['status'];
	}
	  }
	  else {
		echo 'student';  
	  }
 }
  else {echo("Error description: " . $connect -> error);
         
         }  ?></span></a>
</div>
</div>

<div id="GP2" class="tabcontent">
  <h3>GP2 Deliverables</h3>
  <div class="vertical-menu">
     <a href="firstmeteeing.php">First meeting  <span> status: <?php  $qu = "SELECT * FROM first_meeting WHERE Section_No= '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['status'];
	}
	  }
	  else {
		echo 'student';  
	  }
 }
  else {echo("Error description: " . $connect -> error);
         
         }   ?></span></a>
  <a href="progress">Monthly progress report <span>status: <?php  $qu = "SELECT * FROM progress_report WHERE section_number= '$Section_No'";	

	if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['sub_statue'];
	}
	  }
	  else {
		echo 'student';  
	  }
 }
  else {echo("Error description: " . $connect -> error);
         
         } ?></span></a>
   <a href="desc.php">Project description <span>status: <?php  $qu = "SELECT * FROM description WHERE Section_No = '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['status'];
	}
	  }
	  else {
		echo 'student';  
	  }
 }
  else {echo("Error description: " . $connect -> error);
         
         } ?></span></a>
  <a href="FileSubmit/uploadt.php">Final project Submissions <span>status: <?php  $qu = "SELECT * FROM finalproject WHERE Section_No = '$Section_No'";	
 if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
	 
	if ($row3 = mysqli_fetch_array($result2)){
		echo $row3['status'];
	}
	  }
	  else {
		echo 'student';  
	  }
 }
  else {echo("Error description: " . $connect -> error);
         
         }  ?></span></a>

  </div>
</div>
</div>

<div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

	    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
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

  
  document.getElementById("defaultOpen").click();

 
  function openDelev(evt, gpName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(gpName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
</script>
</body>
</html>
