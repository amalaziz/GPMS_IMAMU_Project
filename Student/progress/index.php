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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Progress Report</title>
	<style>
	
	
                    table, th, td {
  border: 1px solid black;
            border-collapse: collapse;}
       table {
		   width:112%;
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
	margin-left:90px;
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
	  
	}
	button {
		font-size: 29px;
		
	}
	.button1:hover {
		
	background-color: green;
	}
	.button2:hover {
		
	background-color: pink;
	}
	.button3:hover {
		
	background-color: blue;
	}
	.button3 {
		position: absolute;
		right:260px;
	}

.todo-container {
  width: 1000px;
  height: 130vh;
  display: flex;
}

.status {
  width: 30%;
  background-color: #ccc;
  position: relative;
  padding: 60px 1rem 0.5rem;
}

.status:nth-child(even) {
  background-color: #d9d9d9;
}

.status h3 {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #466a75;
  color:white;
  margin: 0;
  width: 100%;
  padding: 0.8rem 1rem;
  font-size: 1.3rem;
  text-align:center;
  
}

#add_btn {
  padding: 0.5rem 1rem;
  background-color: #378265;
  outline: none;
  border: none;
  width: 100%;
  font-size: 1.5rem;
  margin: 0.5rem 0;
  border-radius: 4px;
  cursor: pointer;
  font-family: var(--body-font);
}

#add_btn:hover {
  background-color: #aaa;
}

.todo { 
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  background-color: #fff;
  box-shadow: rgba(15, 15, 15, 0.1) 0px 0px 0px 1px,
    rgba(15, 15, 15, 0.1) 0px 2px 4px;
  border-radius: 4px;
  padding: 0.5rem 1rem;
  font-size: 1.3rem;
  margin: 0.5rem 0;
}

.todo .close {
  position: absolute;
  right: 0rem;
  top: 0rem;
  font-size: 2rem;
  background-color: white;
  border:none;
  cursor: pointer;
}
.todo .close a{
 color: red;
 
}
.todo .close:hover {
  color: #343444;
}

/* modal */

.close-modal {
  background: ;
  border: none;
  font-size: 1.5rem;
}

.modal {
  width: 450px;
  position: fixed;
  top: -50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: top 0.3s ease-in-out;
  border: 1px solid #ccc;
  border-radius: 10px;
  z-index: 2;
  background-color: #fff;
}

.modal.active {
  top: 15%;
}

.modal .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ccc;
  padding: 0.5rem;
  background-color: rgba(0, 0, 0, 0.05);
}

.modal .body {
  padding: 0.75rem;
}

#overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
}

#overlay.active {
  display: block;
}

.todo_input,
#todo_submit {
  padding: 0.5rem 1rem;
  width: 100%;
  margin: 0.25rem;
}

#todo_submit {
  background-color: #4caf50;
  color: #f3f3f3;
  font-size: 1.25rem;
  border: none;
}	

       .form-submit-button {
background: #378265;
color: #fff;
border: 1px solid #eee;
box-shadow: 5px 5px 5px #eee;
text-shadow: none;
padding:16px 60px;
font-weight: bold;
  font-size:15px;
  margin:5px;
}
.form-submit-button:hover {
background: #6fc3a3;
color: #fff;
border: 1px solid #eee;

box-shadow: 5px 5px 5px #eee;
text-shadow: none;
}

.upper_banner  {

  position: absolute;
  top: 140px;
  color:green;
  font-size:15px;
}
  	
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
                    <a href="/student_home.php" class="nav__link">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="/deliverables.php" class="nav__link active">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Deliverables</span>
                        </a>

                        <a href="/cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="/sAnnouncment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>
							 
                        <a href="/profile.php" class="nav__link ">
                            <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Profile</span>
                        </a>
                        <a href="/student_help.php" class="nav__link">
                            <ion-icon name="help-circle-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Help</span>
                        </a>
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
						  $sql4 = 'SELECT * FROM student' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Username"] == $a1){
       $sectionn= $row4['Section_No'];
        $cour= $row4['coruse_NO'];
        $GroupNum=$row4['Group_No'];
echo $row4["First_name"].' '.$row4["Middle_name1"].' '.$row4["Last_name"].'</div>';

	}}
}
$dateTime =(new DateTime);
  $dayOfTheYear = $dateTime->format('z');
  
  if($dayOfTheYear < 80 || $dayOfTheYear > 356){
         $semester='Winter';
  }
  if($dayOfTheYear < 173){
    $semester= 'Fall';
  }
  if($dayOfTheYear < 266){
    $semester= 'Spring';
  }
                                 
								  $year = (new DateTime)->format("Y");
								  $etiltle= '';
								  $atitle = '';


global $sectionn, $cour, $GroupNum;
                          $sql2 = "SELECT * FROM project WHERE Section_No= $sectionn" ; 
                          if($result2 = mysqli_query($connect, $sql2)){
                              while($row3 = mysqli_fetch_array($result2)){
								  $etiltle= $row3['Title'];
								  $atitle = $row3['title_arabic'];
								 
                                    }				
					 }
					  $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
                      if($result=mysqli_query($connect,$sql2)){
                          if(mysqli_num_rows($result)>0){
                  if($row = mysqli_fetch_array($result)){
	                 $progress_week = $row['progress_num'];}
						  }
						  else {
		$progress_week = 1; 
	 }
						  }
	   
else {
	echo("Error description: " . $connect -> error);
}
?>
<?php 
$id = $sectionn;
$date_clicked = date('Y-m-d H:i:s');
 $cor = $cour;
 
  $w1 = "Week 1-4" ;
 $w2 = "Week 5-8" ;
 $w3 = "Week 9-12";
 
 $qu2 = "SELECT * FROM progress_report WHERE section_number = '$id'";	
 if( $result3= mysqli_query($connect, $qu2)){
	 if(mysqli_num_rows($result3)>0){
	while ($row3 = mysqli_fetch_array($result3)){
	$progress_num = $row3['progress_num'];	
	 }}
	 else {
		$progress_num = 1; 
	 }
	 }
 
 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor'";	
 if( $result2= mysqli_query($connect, $qu)){
	while ($row3 = mysqli_fetch_array($result2)){
		$tit = explode(' ', $row3['title'])[0].' '.explode(' ', $row3['title'])[1];
		
		if($progress_num == 1){
		if($tit==$w1){
			$title = $tit;
		$start_event =  $row3['start_event'];
		break;
		}
		}
		if($progress_num == 2){
		if($tit==$w2){
			$title = $tit;
		$start_event =  $row3['start_event'];
		break;
		}
		}
		if($progress_num == 3){
		if($tit==$w3){
			$title = $tit;
		$start_event =  $row3['start_event'];
		break;
		}
		}
		else {
			$date = '2022-05-12 19:50:30';
 
		$start_event =  date('Y-m-d', strtotime("+12 months $date"));	
		}
		
	}
	
 }
 
 $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
                      if($result=mysqli_query($connect,$sql2)){
                         if(mysqli_num_rows($result)>0){
                  if($row = mysqli_fetch_array($result)){
						 $sub_statue = $row['sub_statue'];}}
						 else {
							$sub_statue = 'student'; 
						 }
						 
						 }
					 
					 if($sub_statue == 'Coordinatior' && $date_clicked>= $start_event){
						 $stu = 'student';
						$sql5="UPDATE progress_report SET sub_statue = '$stu' WHERE section_number= $sectionn";
                      if($result5=mysqli_query($connect,$sql5)){
        } 
					 }

?>
</div>	
        <div class="main">
		
		<table border = "1"><tr>
		<th>Course: </th><td><?Php global $cour;  echo $cour;?></td>
		<th>Section Number: </th><td><?Php  echo $sectionn;?></td> 
		<th>Group No: </th><td><?Php  echo $GroupNum;?></td> 
		 <th>Semester/Year:</th><td><?Php global $semester, $year; echo $semester.'/'.$year;?></td></tr>
		  <tr><th colspan="4">Project title</th><td colspan="2"><?php global $etiltle; echo $etiltle; ?></td><td colspan="2">
		  <?php global $atitle; echo $atitle; ?></td></tr>
          <tr><th colspan="4">Week No.</th><td colspan="4"><?php global $progress_week; if($progress_week == 1){ echo 'Week 1 – 4 ';}
                              if($progress_week == 2){ echo 'Week 5 – 8 ';}	if($progress_week == 3 || $progress_week ==4){ echo 'Week 9 – 12 ';}		  ?></td>
		 </tr>	
		 </table>
    <!-- modal -->
	
    <div class="modal" id="todo_form">
      <div class="header">
        <div class="title">Add Todo</div>
       <!-- <button class="btn close-modal">&times;</button>-->
      </div>
      <div class="body">
	  <form action="insert.php?id=<?php echo $sectionn;  ?>" method="POST">
        <input class = "todo_input" name="Text1" type="text" /><!--id="todo_input" -->
        <button class="btn close-modal" name="Sub" type="submit" value="Add Todo" id="todo_submit">Add </button><!--id="todo_submit"-->
		</form>
      </div>
    </div>
    <!-- todo -->
	
    <div class="todo-container">
      <div class="status no_status" id="no_status">
        <h3>No Status</h3>
      <button id= "add_btn" data-target-modal="#todo_form">+ Add Task</button>
		<?php
         
         
          $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
     if($result=mysqli_query($connect,$sql2)){
        
     while($row = mysqli_fetch_array($result)){
         $task = $row['task_name'];
		 $id=  $row['id'];     
         
            if($row['state']=='no_status ' ) {
   echo '<div id= "'.$id.'" class="todo" draggable="true" ondrag="test('.$id.')">'.$task.'<button class="close"><a href="deleteTas.php?id='.$id.'" class="text-white">&times;</a></button></div>';
}
     }} else {echo "no connct22";
         }
          ?>
     
      </div>
	   <div class="status completed">
        <h3>Completed</h3>
			<?php
         
         
          $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
     if($result=mysqli_query($connect,$sql2)){
        
     while($row = mysqli_fetch_array($result)){
         $task = $row['task_name'];
		 $id=  $row['id']; 
        	 
            if($row['state']=='completed ' ) {
   echo '<div id= "'.$id.'" class="todo" draggable="true" ondrag="test('.$id.')">'.$task.'<button class="close"><a href="deleteTas.php?id='.$id.'" class="text-white">&times;</a></button></div>';
}
     }} else {echo "no connct22";
         }
          ?>
      </div>
   
      <div class="status in_progress">
        <h3>In Progress</h3>
			<?php
         
         
          $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
     if($result=mysqli_query($connect,$sql2)){
        
     while($row = mysqli_fetch_array($result)){
         $task = $row['task_name'];
		 $id=  $row['id']; 
         			 
            if($row['state']=='in_progress ' ) {
   echo '<div id= "'.$id.'" class="todo" draggable="true"  ondrag="test('.$id.')">'.$task.'<button class="close"><a href="deleteTas.php?id='.$id.'" class="text-white">&times;</a></button></div>';
}
     }} else {echo "no connct22";
         }
          ?>
      </div>
        <div class="status not_started" id="not_started">
        <h3>Next 4 weeks Tasks</h3>
		<?php
         
         
          $sql2="SELECT * FROM progress_report WHERE section_number= $sectionn";
     if($result=mysqli_query($connect,$sql2)){
        
     while($row = mysqli_fetch_array($result)){
         $task = $row['task_name'];
		 $id=  $row['id'];    
        	 
            if($row['state']=='not_started ' ) {
   echo '<div id= "'.$id.'" class="todo" draggable="true" ondrag="test('.$id.')">'.$task.'<button class="close"><a href="deleteTas.php?id='.$id.'" class="text-white">&times;</a></button></div>';
}
     }} else {echo "no connct22";
         }
          ?>
      </div>
    </div>
	<table>
<tr><th colspan="4">GP Status:</th><td colspan="4"><form method="post" action="<?php echo '/process.php?id='.$sectionn ;?>"><input type="radio" id="html" name="Schdule" value="Ahead">
  <label for="html">Ahead of schedule</label>
  <input type="radio" id="css" name="Schdule" value="On">
  <label for="css">On schedule</label>
  <input type="radio" id="javascript" name="Schdule" value="Behind">
  <label for="javascript">Behind schedule</label></td>
		 </tr>
		 	
<tr><th colspan="10">Supervisor Review:</th></tr>
<tr><td colspan="10" class="sup_rev">

<?php  
  global $sectionn;
                          $sql3 = "SELECT * FROM progress_report WHERE section_number= $sectionn" ; 
                          if($result3 = mysqli_query($connect, $sql3)){
                              if($row4 = mysqli_fetch_array($result3)){
                                  echo $row4['supervisor_rev'];
 
							  }
							  
							 
						  }		
						  
?>
</td></tr>
	</table>
	<?php  
                              if(mysqli_num_rows($result3)>0){
							  if($row4['sub_statue'] == 'student' && $progress_week<4 ){
?>
	
  <input class="form-submit-button"  type="submit" value="Submit" name="progress_student" />
<?php  
							  }
							  else {
				echo '<p class ="upper_banner">your deliverable is submit successfully</p>';
			}
							  }
							  else {
								?>
	
  <input class="form-submit-button"  type="submit" value="Submit" name="progress_student" />
<?php 
								  
							  }
						
?>
	
</form>
    <div id="overlay"></div>

    </div>
         
        <div class = "footer"> Copyright &copy 2022.All rights reseved.</div>
		  </body>


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


const todos = document.querySelectorAll(".todo");
const all_status = document.querySelectorAll(".status");
let draggableTodo = null;

todos.forEach((todo) => {
  todo.addEventListener("dragstart", dragStart);
  todo.addEventListener("dragend", dragEnd);
});

function dragStart() {
  draggableTodo = this;
  setTimeout(() => {
    this.style.display = "none";
  }, 0);
  console.log("dragStart");
}

function dragEnd() {
  draggableTodo = null;
  setTimeout(() => {
    this.style.display = "block";
  }, 0);
  console.log("dragEnd");
}

all_status.forEach((status) => {
  status.addEventListener("dragover", dragOver);
  status.addEventListener("dragenter", dragEnter);
  status.addEventListener("dragleave", dragLeave);
  status.addEventListener("drop", dragDrop);
});

function dragOver(e) {
  e.preventDefault();
  //   console.log("dragOver");
}



function dragEnter() {
  this.style.border = "1px dashed green";
  console.log("dragEnter");
 
}

function dragLeave() {
  this.style.border = "none";
  console.log("dragLeave");
}



function dragDrop() {
  this.style.border = "none";
  this.appendChild(draggableTodo);
    var sts=this.className;
   var values = sts.split(" ");
   var sts2 = values[1];
  //return sts2;
 //console.log(sts2);


}
function test(id){
var id1=id;	
var sts= document.getElementById(id1).parentNode.className;
var values = sts.split(" ");
   var sts2 = values[1];
  console.log(id1);
  console.log(sts2);
  var data = {
            st: sts2,
			id:id1
           
        };

        $.post("test.php", data);
  
}


/* modal */
const btns = document.querySelectorAll("[data-target-modal]");
const close_modals = document.querySelectorAll(".close-modal");
const overlay = document.getElementById("overlay");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(btn.dataset.targetModal).classList.add("active");
    overlay.classList.add("active");
  });
});

close_modals.forEach((btn) => {
  btn.addEventListener("click", () => {
    const modal = btn.closest(".modal");
    modal.classList.remove("active");
    overlay.classList.remove("active");
  });
});

window.onclick = (event) => {
  if (event.target == overlay) {
    const modals = document.querySelectorAll(".modal");
    modals.forEach((modal) => modal.classList.remove("active"));
    overlay.classList.remove("active");
  }
};

/* create todo  */
const todo_submit = document.getElementById("todo_submit");

todo_submit.addEventListener("click", createTodo);

function createTodo() {
  const todo_div = document.createElement("div");
  const input_val = document.getElementById("todo_input").value;
  const txt = document.createTextNode(input_val);

  todo_div.appendChild(txt);
  todo_div.classList.add("todo");
  todo_div.setAttribute("draggable", "true");

  /* create span */
  const span = document.createElement("span");
  const span_txt = document.createTextNode("\u00D7");
  span.classList.add("close");
  span.appendChild(span_txt);

  todo_div.appendChild(span);

  no_status.appendChild(todo_div);

  span.addEventListener("click", () => {
    span.parentElement.style.display = "none";
  });
   // console.log(todo_div);

  todo_div.addEventListener("dragstart", dragStart);
  todo_div.addEventListener("dragend", dragEnd);

  document.getElementById("todo_input").value = "";
  todo_form.classList.remove("active");
  overlay.classList.remove("active");
  alert(todo_div.parentNode.className);
}

const close_btns = document.querySelectorAll(".close");

close_btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn.parentElement.style.display = "none";
  });
});
</script>
</html>

