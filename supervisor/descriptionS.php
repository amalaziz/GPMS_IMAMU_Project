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
	<title>Description deliverable</title>
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
.button1 , .button2{
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
    td textarea {
	height:300px;
	width:100%;
	padding:10px;
	box-sizing: border-box;
	text-align:center;
	font-size: 1em;
}	
 td select {
	height:100%;
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

    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        
echo $first.' '.$seco.' '.$last.'</div></div>';


                            // ---------------------------------- final of top nav -------------------------------//
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
						}
}
global  $cour, $GroupNum;
                          $sql2 = "SELECT * FROM project WHERE Section_No= $id" ; 
                          if($result2 = mysqli_query($connect, $sql2)){
                              while($row3 = mysqli_fetch_array($result2)){
                                  $semester = $row3['Semester'];
								  $year = $row3['Year'];
								  $etiltle= $row3['Title'];
								  $atitle = $row3['title_arabic'];
                                    }				
					 }
	   
else {
	echo("Error description: " . $connect -> error);
}

            ?>
	
        <div class="studiv2"><table border = "1"><tr>
		<th>Course: </th><td><?Php  echo $cour;?></td>
		<th>Section Number: </th><td><?Php  echo $id;?></td>
		<th>Group No: </th><td><?Php  echo $GroupNum;?></td>
		 <th>Semester/Year:</th><td><?Php  echo $semester.'/'.$year;?></td></tr>
		  <tr> <form method="post" action="<?php echo '/process.php?id='.$id.'&cor='.$cour ;?>"><th colspan="4">Project title</th><td colspan="2">
		  <input type ="text" value="<?php echo $etiltle; ?>" name = "eTitle"></td><td colspan="2">
		  <input type ="text" value="<?php echo $atitle; ?>" name = "aTitle"></td></tr>
	
<?php  
global $id;
 $sql = "SELECT * FROM description WHERE Section_No= $id" ; 
                          if($result = mysqli_query($connect, $sql)){
                              if($row = mysqli_fetch_array($result)){
			
							  
?>
<tr><th colspan="8">Project Classification:</th></tr>
<tr><th colspan="2">Problem Domain area:</th>
<td colspan="2">
<?php echo $row['domain']; ?>
</td><th colspan="2">Solution Field Of study:</th>
<td colspan="2">
<?php echo $row['solution']; ?>
</td></tr>
 <tr><th colspan="8">Project Description in English:</th></tr>
		<tr><td colspan="8" class = "texta"><textarea name="english_text"><?php echo $row['description_english']; ?></textarea></td></tr>
<tr><th colspan="8">Project Description in Arabic:</th></tr> 
  <tr><td colspan="8" class = "texta"><textarea name="Arabic_text"><?php echo $row['description_arabic']; ?></textarea></td></tr>
  
  

  <?php 
							  }
						  }
  ?>
  
 </table></div><br> 
     <?php  

							  if($row['status'] == 'supervisor'){
?>
<input type="submit" name="Accept" value="Accept" class = "button1" title = "Submit to Coordinatior">
<input type="submit" name="Reject" value="Reject" class = "button2" title = "Resubmit to student"></form>
<?php  
							  }
						  
						
?>
</div>
         
        <div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

	    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script>
		/*===== EXPANDER MENU  ===== 
		var date=new Date();
var year=date.getFullYear();
var month=date.getMonth();
var day=date.getDate(); // fixed
function SetDivContent() {
    var div=document.getElementById('date_dependent');
	if (month>= 8 && month<= 12) { // fixed (the JavaScript months order is 0-11, not 1-12)
         // the following content will be displayed 12/03/2010, 12/04/2010, [...], 12/09/2010, 12/10/2010
            div.innerHTML='Fall/'+ year;
      
       if (month>= 1 && month<= 5) { // this one - 12/13/2010 and later, until the end of December
            div.innerHTML='Spring/'+ year;
        }
    }

*/	
	
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
	<!--<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script>CKEDITOR.replace( 'content' ); </script>-->
</html>