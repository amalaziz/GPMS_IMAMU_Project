
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

    <title>Home</title>
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
     
		
	<style>
	tr , th , td{
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
			text-align:center;
        }
 

	body {
	     background-color:  #f1f1f1;
		 margin-top: o%
	}
/* Style page content */
.main {
	padding: 20px;
	width: 95%;
	margin-right: 61px;
	margin-left:3%;
	margin-top:0%;
}
.col-12{
	margin-left:0%;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #9bbfb0 ;
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
background-color: #c1d7ce;
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



thead th{
	background: #466a75;
	color: white;
	height: 50px;
	width: 100px;
}

table {
	width:100%;
}
table td {
	text-align:center;
	padding:10px;
}

.btn-primary {
	background-color: #F0F8FF;
	padding: 8px 22px;
	border: none;
	border-radius: 10%;
		
}
td:nth-child(even) {background:   #ebebe0;}
td:nth-child(odd) {background: #FFF;}


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
                        <a href="coor_home.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="/coordinatior/FileSubmit/uploadAss.php" class="nav__link ">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">GP documents</span>
                        </a>

                        <a href="/coordinatior/cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="/coordinatior/announcment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>

                        <a href="/supervisor/supervisor_home.php" class="nav__link">
                            <ion-icon name="arrow-back-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Supervisor Home</span>
                        </a>
						
                        <a href="coor_help.php" class="nav__link">
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


<div class ="main">

	

        <?php
		$sql2 = "SELECT COUNT(ID), Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id FROM student GROUP BY Section_No, coruse_NO, supervisor_id, examiner1_id, examiner2_id";
                         if($result2 = mysqli_query($connect, $sql2))
{              $grob = mysqli_num_rows($result2);
}
	$sql1 = "SELECT * FROM student";
                         if($result1 = mysqli_query($connect, $sql1))
{              $stu = mysqli_num_rows($result1);
}

	$sql = "SELECT * FROM supervisors";
                         if($result = mysqli_query($connect, $sql))
{              $sup = mysqli_num_rows($result);
}
		?>


           <div class="main">
                

                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-address-book fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title"><?php echo $stu; ?></h5>
                                    <p class="card-text">Student </p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="/coordinatior/student_info.php">Students information</a>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title"><?php echo $grob; ?></h5>
                                    <p class="card-text">GP Groups</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                               <a href="/coordinatior/GroupDetails.php">Groups information</a>
                            </div>
                        </div>
                    </div>
					   <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-address-book fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title"><?php echo $sup; ?></h5>
                                    <p class="card-text">Supervisors</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
            <a href="/coordinatior/supervisors_info.php">Supervisors information</a>
                            </div>
                        </div>
                    </div>
					 <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-file fa-3x py-auto"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title"><?php echo $grob; ?></h5>
                                    <p class="card-text">Descriptions</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
            <a href="/coordinatior/descriptions.php">GP Descriptions</a>
                            </div>
                        </div>
                    </div>

                    
                </div>
				</br>
<div class="row g-2">
              
<table id="example" class="display"  cellspacing="0">
            <thead>
		   <tr>
		        <th>Stage (GP)</th>
                <th>Group Number</th>
                <th>Progress</th>
				<th>Overdue Task</th>
				<th>Degree</th>
                <th>Action</th>
				
            </tr>
			 </thead>
             <tbody>
          
		   <?php 
		   $sql2 = "SELECT COUNT(ID), Section_No,Group_No, coruse_NO FROM student GROUP BY Section_No, Group_No, coruse_NO";
                         if($result2 = mysqli_query($connect, $sql2))
{
	
	          while ($row2 = mysqli_fetch_array($result2)){
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
				 
					$over1 = 5 - $deg;
					$over = $over1/ 0.25;
				   }
				  

		   ?>
		    <tr class="te">
			<td><?php if($row2['coruse_NO'] == 'IS497') {echo 'GP1'; } if($row2['coruse_NO'] == 'IS498') {echo 'GP2'; } if($row2['coruse_NO'] == 'IS499') {echo 'GP3'; }   ?></td>
		   <td><?php echo $row2['Group_No']; ?></td>
                <td><div id="registrations_chart<?php echo $row2['Section_No'];  ?>"></div></td>
				<td><?php echo $over; unset($over); ?></td>
				<td><?php echo $deg;  ?></td>
                <td class="wrapper"><a href="coor_delivrlable.php?id=<?php echo $row2['Section_No']; ?>"><span>More..</span></a> </td>
		   </tr>
		  
			

    </div> 
    </div>
   
<div class="slider-background" id="sliders-background"></div>

 
 <?php  
 $Done =0;
 $ToDo =0;

 $connect = mysqli_connect("localhost", "root", "root", "gpms"); 
if($row2['coruse_NO'] == 'IS497') {
 $query = "SELECT status, Section_No FROM proposal_summary where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	 if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){  
         if($row['status']=='Coordinatior' || $row['status']=='coordinatior'){
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
         if($row['status']=='Coordinatior' || $row['status']=='coordinatior'){
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
  
$query = "SELECT status, Section_No FROM first_meeting where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	  if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){
		
         if($row['status']=='Coordinatior' || $row['status']=='coordinatior'){
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
		
         if($row['sub_statue']=='Coordinatior' || $row['sub_statue']=='coordinatior'){
			 for($i=1; $i<=$progress_num-1; $i++){
			$Done++; 
			 }
		 }
		 else {
			 for($i=1; $i<=$progress_num-1; $i++){
			$Done++; 
		 }
         }
		 $num = 4-$progress_num;;
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
 


$query = "SELECT status, Section_No FROM description where Section_No= ".$row2['Section_No'];

 
 if ($result = mysqli_query($connect, $query)){
	 if ($rows = mysqli_num_rows($result)>0 ){
	if($row = mysqli_fetch_array($result)){  
         if($row['status']=='Coordinatior' || $row['status']=='coordinatior'){
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

 
</div>

        
        <!-- ===== MAIN JS ===== -->
        <script type="text/javascript">  	

          google.charts.load('50', {
  packages:['corechart']
}).then(function () {
  var myHeight = 100;
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Progress');
  data.addColumn('number', 'Done');
  data.addColumn('number', 'ToDo');
  

  data.addRows([
    ['Progress', <?php echo $Done; ?>, <?php echo $ToDo; ?>],
    
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0,
    1, {
      calc: function (dt, row) {
        return dt.getValue(row, 1);
      },
      type: "number",
      role: "annotation"
    },
    2, {
      calc: function (dt, row) {
        return dt.getValue(row, 2);
      },
      type: "number",
      role: "annotation"
    },
    {
      calc: function (dt, row) {
        return 0;
      },
      label: "Total",
      type: "number",
    },
    {
      calc: function (dt, row) {
        return dt.getValue(row, 1) + dt.getValue(row, 2);
      },
      type: "number",
      role: "annotation"
    }
  ]);


  var options = {
    animation:{
      duration: 1000,
      easing: 'out',
      startup: true

    },
   
    backgroundColor: 'transparent',
    height: myHeight, width: 500,
    legend: {
      position: 'top',
      maxLines: 3
    },
    bar: { groupWidth: '40%' },
    isStacked: true,
   
  };
  
  
  var chart = new google.visualization.BarChart(document.getElementById("registrations_chart"+<?php echo $row2['Section_No'];  ?>));
  
  chart.draw(view, options);
});
		   </script>
		    <?php 			  }
}
		   ?>
      </tbody>
        </table>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <script src="./dist/js/index.js"></script>
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

 
  function openDelev(evt, gpName, Sec) {
  // Declare all variables
  var i, tabcontent, tablinks;
 var Sec1 = Sec;
 document.getElementById('aa1').value = Sec;

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
  
  
   
 
} </script>
<div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

	    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

</body>

</html>