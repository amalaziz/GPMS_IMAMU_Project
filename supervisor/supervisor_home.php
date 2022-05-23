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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Home </title>
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	/* Add a black background color to the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:  #f1f1f1;
}

/* Style the paragraph inside the navigation bar */
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
	width: 80%;
	margin-right: 61px;
	margin-left:120px;
	margin-top:60px;
	 display: inline-block; 
	

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
  background-color:  #f1f1f1;
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
.studiv2 {
	border : 1px solid #a7a7a7;
	background-color:	 #d0d0d0;
	padding: 8px;
	width: 100%;	
	
}
.studiv2 .img {
	margin-right: 10px;
	
}
.leftside {
	float: left;
width: 47%;
	

}
.rightside {
	float: right;
	width: 47%;
	margin-bottom: 30px;
	
	
}
.studiv1 {
	border : 1px solid green;
	background-color:	 	 #cce6ff;
	padding: 8px;
	width: 100%
}

 .studiv {
	border : 1px solid #7d7676;
	background-color: #466a75;
	color:white;
	padding: 8px;
	width: 100%;
}


table td {
	
	text-align: center;
}

.message-blue {
    position: relative;
    margin-left: 30px;
    margin-bottom: 3px;
    padding: 5px;
    width: 90%;
    height: 30%;
    text-align: left;
    font: 400 .9em 'Open Sans', sans-serif;
    border-radius: 10px;
}
.message-content {
    padding: 0;
    margin: 40px 5px 5px 5px;

}
.message-left {
    position: absolute;
    font-size: 1.15em;
	 font-weight: bold;
    top: 5px;
    left: 0px;
	border-bottom : 1px solid green;
	padding: 5px;
	width:100%;
}
.date {
	display:inline-block;
	font-size: 0.70em;
	color: gray;
	position: absolute;
	right:15px;
	font-weight: normal;
}
.rightA {
	width: 100%;
	float: right;
	border : 1px solid #7d7676;
	background-color: #466a75;
	color:white;
	padding: 8px;

}
.announcment {
border : 1px solid green;
	background-color:	 #d0d0d0;
	 overflow-x: scroll;
    overflow-y: scroll;
	width: 100%;
	float: right;
  padding 5px;	
}

.tabcontent {
  display: none;
  padding: 12px 12px;
  border: none;
  border-top: none;
}


/* Style the tab */
.tab {
  overflow: hidden;
  border:none;
  color:white;
  width:60%;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: #466a75 ;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 50px 40px;
  transition: 0.3s;
  color:white;
  font-size:1em;
  margin:6px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}
thead th {
	background: #466a75;
	color: white;
	width:4%;
	padding:10px ;
}
.te td {
	border-bottom: 1px solid gray;
	border-right: 1px solid gray;
	font-size:20px;
}

.tabe td {
	border-bottom:none;
	border-right:none;
	font-size:15px;
	
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
                        <a href="supervisor_home.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="deliverables.php" class="nav__link ">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Deliverables</span>
                        </a>

                        <a href="cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="sAnnouncment.php" class="nav__link">
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
<div class ="main">
            
<table id="example" class="display"  cellspacing="0" >
            <thead>
		   <tr>
		       
                <th>Group Members</th>
				<th>Group number</th>
				<th>Degree</th><th class = "prog">Progress</th>
				
            </tr>
			 </thead>
			 
             <tbody>
			  <?php 
		   $sql2 = "SELECT COUNT(ID), Section_No,Group_No, coruse_NO, supervisor_id FROM student GROUP BY Section_No, Group_No, coruse_NO, supervisor_id";
                         if($result2 = mysqli_query($connect, $sql2))
{
	
	          while ($row2 = mysqli_fetch_array($result2)){
				   if($row2['supervisor_id']== $supid){
				  $q = "SELECT * FROM project WHERE Section_No =".$row2['Section_No'];
				   if($result = mysqli_query($connect, $q))
                   {
					   if ($rows = mysqli_num_rows($result)>0 ){
					$row = mysqli_fetch_array($result);  
					$deg =$row['Degree'];
					
					
					   }
					    else {
					   $deg = '5';
				   }
				   $over = 0;
					 if($deg== 4.75){
						$over = 1;
					}
					 if($deg== 4.50){
						$over = 2;
					}
					 if($deg== 4.25){
						$over = 3;
					}
					 if($deg== 4.00){
						$over = 4;
					}
					 if($deg== 3.75){
						$over = 5;
					}
				   }
				  

		   ?>
		   
		   <tr class="te">
			<td><?php $sql = "SELECT * FROM student WHERE Section_No= ".$row2['Section_No'] ;
				if($result = mysqli_query($connect, $sql))
{                $cont =1;			   
                 while ($row = mysqli_fetch_array($result)){
					$gro = $row['Group_No']; 
 echo '<div class="studiv2"><table class = "tabe"><tr><td rowspan="6"><img class = "img" src="/avatar'.$cont.'.PNG" alt="Girl avatar" width="70" height="70"></td></tr>';	
					$cont++;
					echo '<tr><th rowspan="2">   Name </th><td>'.$row['First_name'].' '.$row['Last_name'].'</td></tr>';
					echo '<tr><td>'.$row['Arabic_Name'].'</td></tr>';
					echo '<tr><th>   ID </th><td>'.$row['ID'].'</td></tr>'; 
					echo "<tr><th>   Email </th><td> <a href='mailto:".$row['UEmail']."'>".$row['UEmail']."</a></td></tr></table>";		  
		            echo '</div><br>';
					
				 }
				 
} ?>
</td>
            <td ><?php echo $gro;  ?></td>
           <td ><?php echo $deg;  ?></td>
		   <td ><div id="progress_chart<?php echo $row2['Section_No'];  ?>"></div></td>
		   </tr>
 
 <?php  
 $Done =0;
 $ToDo =0;

 $connect = mysqli_connect("localhost", "root", "root", "gpms");  
 $query = "SELECT status, Section_No FROM first_meeting where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	  if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){
		
         if($row['status']== 'Coordinatior'){
			$Done++; 
		 }
		 else {
			$ToDo++; 
		 }
         
	}		 
 }
 else {  
$ToDo++;
}
 }
 
  

$query = "SELECT * FROM progress_report where section_number= ".$row2['Section_No'];

 if ($result1 = mysqli_query($connect, $query)){
	  if ($rows = mysqli_num_rows($result1)>0 ){
	if($row = mysqli_fetch_array($result1)){ 
        $progress_num = $row['progress_num'];	
		
         if($row['sub_statue']== 'Coordinatior'){
			 for($i=1; $i<=$progress_num-1; $i++){
			$Done++; 
			 }
		 }
		 else {
			 for($i=1; $i<=$progress_num-1; $i++){
			$Done++; 
		 }
         }
		 $num = 4-$progress_num;
		 for($ii=1; $ii<=$num; $ii++){
        
			$ToDo++; 
		 }
		 
	}		 
 }
 else {  
for($ii=1; $ii<=3; $ii++){
        
			$ToDo++; 
		 }
}
 }
 
 
 if($row2['coruse_NO'] == 'IS497') {
 $query = "SELECT status, Section_No FROM proposal_summary where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	 if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){  
         if($row['status']== 'Coordinatior'){
			$Done++; 
		 }
		 else {
			$ToDo++; 
		 }
         }   
 }
 else {  
$ToDo++;
}
 }
 }

 $query = "SELECT status, Section_No FROM finalproject where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	  if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){  
         if($row['status']== 'coordinatior' || $row['status']== 'Coordinatior'){
			$Done++; 
		 }
		 else {
			$ToDo++; 
		 }
         }   
 }
 else {  
$ToDo++;
}
 }
  


$query = "SELECT status, Section_No FROM description where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	 if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){  
         if($row['status']== 'Coordinatior'){
			$Done++; 
		 }
		 else {
			$ToDo++; 
		 }
		
         }   
 }
 else {  
$ToDo++;
}
 }
 
 ?>  
 <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Name', 'Count'],  
						  ['Done', <?php echo $Done; ?>],
						  ['ToDo', <?php echo $ToDo; ?>]
                          
                     ]);  
                var options = {  
                      title: 'Total Order ' ,
					  width: '300'
                     };  
                var chart = new google.visualization.PieChart(document.getElementById("progress_chart"+<?php echo $row2['Section_No'];  ?>)); 
				
                chart.draw(data, options); 
chart.draw(data, { backgroundColor: { fill: "#f1f1f1" } })				
           }  
		   </script>
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


 <?php 				  }

}
}

else {
	echo("Error description: " . $connect -> error);
}

		   ?>
		   </tbody>
		   </table>
<?php
global $supid;
  
 $sql5 = "SELECT COUNT(*), Section_No, Group_No, supervisor_id, coruse_NO FROM student GROUP BY Section_No, Group_No, supervisor_id, coruse_NO" ;
 if($result5 = mysqli_query($connect, $sql5))
{        $section = array();
	  while($row5 = mysqli_fetch_array($result5)){
		  if($row5['supervisor_id']== $supid){
			 
               $section[] = $row5['Section_No'];  
		  }
	  }
}


		 ?>
		
	</br></br></br>
<div class="rightA"><strong> Announcment board </strong></div><br></br></br>
<div class = "announcment">
 

<?php 
                          $date_clicked = date('Y-m-d');
						  $sql4 = "SELECT * FROM announcement where Date <= '$date_clicked'  ORDER BY Date DESC ";
			
							if( $result4 = mysqli_query($connect, $sql4)){
 
 while($res = mysqli_fetch_array($result4)){
	                      $myString = $res['User_type'];
                          $myArray = explode(',', $myString); 
						  $arrLength = count($myArray);
						  $arrLength2 = count($section);
						   global $section;
			               
	for ($i = 0; $i<$arrLength; $i++){
		for ($ii = 0; $ii<$arrLength2; $ii++){
          if($myArray[$i] == $section[$ii] || $myArray[$i] == 'supervisor'){		
 ?>
  <div class="message-blue">
        <p class="message-content"><?php echo $res['Message'];  ?> </p>
       <div class="message-left"> <?php echo $res['title'].'<div class = "date"> '.'posted '.$res['Date'].'</div>'; ?></div>
    </div>

<?php 
 } break;
		}
		break;
	}
	
 }
							}
 else {
	echo("Error description: " . $connect -> error);
}
  ?>
     
  </div>
		   
</div>
<div class = "footer"> Copyright &copy 2022.All rights reseved.</div>
	    
        
        <!-- ===== MAIN JS ===== -->
   
</body>
</html>
