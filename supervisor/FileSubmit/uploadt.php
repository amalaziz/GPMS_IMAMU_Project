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
$sec = $_GET['id'];

?>
<! DOCTYPE html>
 <html> <head>
 <meta charset = "utf-8" /> 
<title>Final Submissions</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">


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
	margin-left:13%;
	margin-top:6%;
	 background-color:  #f1f1f1;
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
	margin-left:120px;
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
.dele {
	background-color: #f99679;
	padding: 8px;
	border: none;
border-radius: 15%;	
}					
.dele a{
	color:white;
}	

.button1 , .button2{
	  margin: 10px 5px 10px 5px;
	  padding: 10px 30px;
	  border:none;
	  font-size: 15px;
	  
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

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size)
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
  .vertical-menu  {Width: 450px;}
.tabcontent {  padding: 12px 6px;}
} */
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

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
	   <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                   
                     <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo"></a>
                    </div>
                    <a href="/supervisor/supervisor_home.php" class="nav__link">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="/supervisor/deliverables.php" class="nav__link active">
                            <ion-icon name="document-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Deliverables</span>
                        </a>

                        <a href="cal/index.php" class="nav__link">
                            <ion-icon name="calendar-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Event</span></a>

                                <a href="/supervisor/sAnnouncment.php" class="nav__link">
                            <ion-icon name="notifications-outline" class="nav__icon"></ion-icon>
							 <span class="nav__name">Announcements</span></a>
							 
						<?php   if ($coor_id == $supid){   ?>
                     <a href="/coordinatior/Dashboard-Part1-main/coor_home.php" class="nav__link">
                            <ion-icon name="arrow-back-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">coordinatior Home</span>
                        </a>
				 <?php }?>
                        <a href="/supervisor/supervisor_help.php" class="nav__link">
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


<div class ="main">
 
 

<?php
 $dbh = new PDO("mysql:host=localhost;dbname=gpms", "root", "root");
 


?>

 



	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Download</th>	
        
				</tr>
			</thead>

<?php

$sql4 = "SELECT * FROM student WHERE Section_No= $sec" ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
                        while($row4 = mysqli_fetch_array($result4)){
						       $cour= $row4['coruse_NO'];
							   $examinr1=$row4['examiner1_id'];
							   $examinr2=$row4['examiner2_id'];
							   
						}
}

 $query=$dbh->query("select * from finalproject WHERE Section_No='$sec' order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
				$stu = $row['status'];
 ?> <tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="view.php?id=<?php echo $row['id'] ?>">Download</a></button>
		
       
      </td>
			</tr>
  
			<?php }?>
		</table>
	</div>
	</div>
	</div>
	</br></br></br>
	<form method="post" action="<?php echo '/process.php?id='.$sec.'&cor='.$cour ;?>">
	  <?php  

							  if($stu == 'supervisor'){
?>
	 <input type="checkbox" required> I agree that all of the files for final submissions are there and complete.
    </br>
	</br><input type="submit" name="AcceptF" value="Accept" class = "button1" title = "Submit to Coordinatior">
<input type="submit" name="RejectF" value="Reject" class = "button2" title = "Resubmit to student">
<?php  
							  }
						  
						
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

  
 
</script>
</body>

</html>