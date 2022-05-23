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


 $id = $_GET['id'];
 
?>

<!DOCTYPE html>
<html>
    <head>
	<title>Proposal Summary deliverable</title>
        <meta charset= "UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
                    table, th, td {
  border: 1px solid black;
            border-collapse: collapse;}
       table {
		   width:90%;
	   }
            tr th{background: #466a75;
	color: white;
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
            body {
	     background-color:  #f1f1f1;
		
	}
/* Style page content */
.main {
	padding: 30px;
	width: 77%;
    margin: auto;
}
          
            
            #but{
                width: 20%;
                background: none;
                border: 2px solid #4caf50;
                /*color: white;*/
                padding: 5px;
                font-size: 18px;
                cursor: pointer;
                margin: 12px 0;
            }
            	/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:  #f1f1f1;
}

/* Style the paragraph inside the navigation bar */
.topnav .para1 {
  float: left;
  color: #466A75;
  text-align: center;
  padding: 0px 4px;
  margin-top: 0px;
  font-size: 20px;
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
	width: 75%;
	margin-right: 61px;
	margin-left:200px;
	margin-top:60px;
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
table th {
	
	padding:10px;
	
}	
table td {
	
	text-align:center;
	
}	
.texta {
	height:100%;
	padding:8px;
	text-align:left;
	font-size:18px;
	 
}	
.textarea {
	height:100%;
	 width: 100%;
    box-sizing: border-box;
	padding:20px;
	font-size: 1.25em;
	font-family: "Times New Roman", Times, serif;
	
}
.ar {
	text-align:right;
}
.en {
	text-align:left;
}
 td input[type=text] {
	height:100%;
	width:100%;
	padding:10px;
	box-sizing: border-box;
	text-align:center;
	font-size: 1em;
}

.button1 , .button2, .button3{
	  margin: 10px 5px 10px 5px;
	  padding: 10px 30px;
	  border:none;
	  
	}
	button {
		font-size: 27px;
		
	}
	.button1 {
	background-color:#378265 ;
	padding: 13px 30px;
	border: none;
border-radius: 10%;
color: white;
	}
	.button2 {
	background-color: #f99679;
	padding: 13px 30px;
	border: none;
	border-radius: 10%;
	color: white;
	}


	.button3{
		
	background-color: #9999ff;
	
		position: absolute;
		right:260px;
	}
    td textarea {
	height:300px;
	width:100%;
	padding:10px;
	box-sizing: border-box;
	text-align:center;
	font-size: 1em;
}	
        </style>
    
    </head>
			<?php

$query2 = "SELECT * FROM coordinator";  
           $result2 = mysqli_query($connect, $query2);
		   $row2 = mysqli_fetch_array($result2);
		   $coor_id = $row2['ID'];
 
$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM supervisors' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    

                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Usernam"] == $a1){
		$supid = $row4['Id'];
		$first = $row4["First_name"];
		$seco = $row4["Middle_name1"];
		$last = $row4["Last_name"];

	}}
}

                            // ---------------------------------- final of top nav -------------------------------//
?>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                 <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo"></a>
                    </div>
                    <div class="nav__list">
                        <a href="supervisor_home.php" class="nav__link ">
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

                                <a href="sAnnouncment.php" class="nav__link ">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>
							 
							 <?php   if ($coor_id == $supid){   ?>
                     <a href="/coordinatior/Dashboard-Part1-main/coor_home.php" class="nav__link">
                            <ion-icon name="arrow-back-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">coordinatior Home</span>
                        </a>
				 <?php }?>

                        <a href="supervisor_help.php" class="nav__link">
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


?>

</div>
        <div class="main">
            <?php
			global $id;
			 $sql4 = "SELECT * FROM student WHERE Section_No= $id" ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
                        while($row4 = mysqli_fetch_array($result4)){
						       $cour= $row4['coruse_NO'];
                               $GroupNum=$row4['Group_No'];
							   $supervisor=$row4['supervisor_id'];
							   $examinr1=$row4['examiner1_id'];
							   $examinr2=$row4['examiner2_id'];
						}
}
global $cour,  $GroupNum;
                          $sql2 = "SELECT * FROM project WHERE Section_No= $id" ; 
                          if($result2 = mysqli_query($connect, $sql2)){
                              while($row3 = mysqli_fetch_array($result2)){
                                  
                                      echo '<div class="studiv2"><table border = "1"><tr>
                                      <th>Course: </th><td>'.$cour.'</td>
                                      <th>Section Number: </th><td>'.$row3['Section_No'].'</td>
                                      <th>Group No: </th><td>'.$GroupNum.'</td>
                                      <th>Semester/Year:</th><td>'.$row3['Semester'].'/'.$row3['Year'].'</td></tr>
    <tr> <form method="post" action="/process.php?id='.$id.'&cor='.$cour.'"><th colspan="4">Project title</th><td colspan="4">'.$row3['Title'].'</td></tr>'; 
                                      
                              }				
					
                          }
	   
else {
	echo("Error description: " . $connect -> error);
}
            ?>
	
<tr><th colspan="10">GP1 Proposal Summary1 (minimum 100 words)</th></tr>
  <tr><td colspan="8" class = "texta"> 
	
<?php  
global $id, $supervisor, $supid, $examinr1, $examinr2;;
 $sql = "SELECT * FROM proposal_summary WHERE Section_No= $id" ; 
                          if($result = mysqli_query($connect, $sql)){
                              if($row = mysqli_fetch_array($result)){
			                $super_rev=$row['supervisor_rev'];
							$stu = $row['status'];
							$ex1_rev=nl2br($row['Examinr1_comm']);
							$ex2_rev=nl2br($row['Examinr2_comm']);
							if($supid==$supervisor){
                                 echo nl2br($row['summay_text']);
							}
							else if($row['status']== 'Examiner' || $row['status']== 'Coordinatior'){
								 echo nl2br($row['summay_text']);
							}
							  }
						  }
  ?>
  </td></tr>

<tr><th colspan="10">Supervisor Review:</th></tr>
<tr><td colspan="10" class="sup_rev">
<?php
global $id, $supervisor, $super_rev, $supid;
			
							if($supid==$supervisor){
echo '<textarea name="sub_rev">'.$super_rev.'</textarea>';
							}
			else {
				echo $super_rev;
			}		
	
?>
</td></tr>

<tr><th colspan="10">T.
<?php        global $examinr1, $examinr2;
             $sql7 = 'SELECT * FROM supervisors' ;
							  if($result7 = mysqli_query($connect, $sql7))
{    

                        while($row7 = mysqli_fetch_array($result7)){    
						if ($row7['Id'] == $examinr1){
							$examinr1_name = $row7['First_name'].' '.$row7['Last_name'];
						}
						if ($row7['Id'] == $examinr2){
							$examinr2_name = $row7['First_name'].'  '.$row7['Last_name'];
						}
						}
						global $examinr1_name;
						echo $examinr1_name;
}
       

   ?>
   comment:</th></tr>
<tr><td colspan="10" class="sup_rev"><?php
global $id, $examinr1, $ex1_rev, $supid;
			
							if($supid==$examinr1){
echo '<textarea name="ex1_rev">'.$ex1_rev.'</textarea>';
							}
			else {
				echo $ex1_rev;
			}		
	
?></td></tr>

<tr><th colspan="10">T.<?php global $examinr2_name; echo $examinr2_name; ?> comment:</th></tr>
<tr><td colspan="10" class="sup_rev"><?php
global $id, $examinr2, $ex2_rev, $supid;
			
							if($supid==$examinr2){
echo '<textarea name="ex2_rev">'.$ex2_rev.'</textarea>';
							}
			else {
				echo $ex2_rev;
			}		
	
?></td></tr>
  
  
 </table></div><br> 
 
     <?php  

							  if($stu == 'supervisor' || $stu == 'Examiner' ){
?>
 <?php
global  $supervisor, $examinr2, $examinr1, $supid;
			
							if($supid==$supervisor){
echo '<input type="submit" name="AcceptP" value="Accept" class = "button1" title = "Submit to Coordinatior">
<input type="submit" name="RejectP" value="Reject" class = "button2" title = "Resubmit to student">
<input type="submit" name="examin" value="Submit to examiners" class = "button3" title = "submit to examiners">';
							}
							  }
			if($supid==$examinr1) {
				echo '<input type="submit" name="examiner1" value="Submit to supervisor" class = "button3" title = "submit to supervisor">';
			}	
            if($supid==$examinr2){
         echo '<input type="submit" name="examiner2" value="Submit to supervisor" class = "button3" title = "submit to supervisor">';
}	
	
?>
<?php  
							  
						  
						
?>
</form>

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

 
  function openCity(evt, cityName) {
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
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
</script>
    </body>
	
</html>