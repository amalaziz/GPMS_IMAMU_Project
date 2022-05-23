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
<title>content Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	body {
	     background-color:  #f1f1f1;
		
	}
        #but{
            background-color: #4CAF50;
            border: 1px solid #4CAF50;
        }
        
/* Style page content */
.main {
	padding: 20px;
	width: 77%;
	margin-right: 61px;
	margin-left:13%;
	margin-top:6%;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background: linear-gradient(to left, #3b4345 0%, #9bbfb0 100%);
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
background: linear-gradient(to left, #9bbfb0 0%, #3b4345 100%);
  color: black; /* Black text color */
   border: 1px solid #ccc;
  display: block; /* Make the links appear below each other */
  padding: 12px;  /* Add some padding */
  text-decoration: none; /* Remove underline from links */
  text-align: center;
  margin: 10px 3px;
}

.vertical-menu a:hover {
    background: #ccc; }/* Dark grey background on mouse-over */

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size)
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
  .vertical-menu  {Width: 450px;}
.tabcontent {  padding: 12px 6px;}
        nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
} */
        .topnav {
  overflow: hidden;
  background-color:  #f1f1f1;
}

/* Style the paragraph inside the navigation bar */
.topnav .userName {
  float: right;
  margin-right:30px;
  color: #466A75;
  text-align: center;
  padding: 0px 4px;
  margin-top: 0px;
  font-size: 18px;
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
	width: 70%;
	margin-right: 61px;
	margin-left:250px;
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
  float: right;
}
.nav__link:hover{
  background-color: black;
  color:white;
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

	</style>
	</head>
	   <body id="body-pd">
     
<div class="topnav">
<img class="logo" src="/logoo.png" alt="GPMS Logo" width="140" height="70">
<?php
$a1 =$_SESSION["Username"];
						  $sql4 = 'SELECT * FROM admin' ;
							  if($result4 = mysqli_query($connect, $sql4))
{    
echo '<div class = "userName"><ion-icon name="person-outline" class="nav__icon1"></ion-icon>';
                        while($row4 = mysqli_fetch_array($result4)){
	if ( $row4["Username"] == $a1){
echo $row4["First_name"].' '.$row4["Last_name"].'</div>';

	}}
}
?>

</div>



<div class ="main">
 
<div class="tab">
 <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><strong> Supervisor </strong></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><strong> Student </strong></button>
    <button class="tablinks" onclick="openCity(event, 'arch')"><strong> Archive </strong></button>
	 <a href="/logout.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
	
</div>


<div id="London" class="tabcontent">
  <h3>Supervisors members</h3> 
  <div class="container">
		<div class="box">
			<!--<h4 class="display-4 text-center">Read</h4><br>-->
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php 
					  	
    $sql = "SELECT * FROM supervisors";
             $result = mysqli_query($connect, $sql);
             if ($row3 = mysqli_fetch_array($result))
			 { ?>
            
			<table class="table table-striped display" id="example" width="100%" cellspacing="0">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">ID</th>
                    <th scope="col">Action</th>
                    
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
    $sql5 = "SELECT ID FROM coordinator";
             $result5 = mysqli_query($connect, $sql5);
    $row3 = mysqli_fetch_array($result5);
    $cid=$row3['ID'];
    
			  	   $i = 0;
				   $sql = "SELECT * FROM supervisors";
             $result = mysqli_query($connect, $sql);
			  	   while($rows = mysqli_fetch_array($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['Arabic_name']?>
                     
                    <?php if ($cid==$rows['Id']){
            echo '&#x2605;';}?></td>
                    
                    
			      <td><?php echo $rows['Id']; ?></td>
			      <td>

			      	  <a href="php/delete.php?id=<?=$rows['Id']?>" 
			      	     class="btn btn-danger">Delete</a>
                      
                      <a href="php/select.php?id=<?=$rows['Id']?>" 
			      	     class="btn btn-danger" id="but" >Select coordinator</a>
                      
                      
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<!--<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>-->
		</div>
	</div>
</div>
    <?php include "phps/read.php"; ?>

<div id="Paris" class="tabcontent">
  <h3>Student members</h3>
<div class="container">
		<div class="box">
			<!--<h4 class="display-4 text-center">Read</h4><br>-->
			
			<?php if (mysqli_num_rows($result)) { ?>
            
			<table class="table table-striped display" id="example" width="100%" cellspacing="0">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">ID</th>
                 <th scope="col">Group number</th>
			      <th scope="col">Secction number</th>    
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['Arabic_Name']?></td>
			      <td><?php echo $rows['ID']; ?></td>
                    <td><?=$rows['Group_No']?></td>
			      <td><?php echo $rows['Section_No']; ?></td>
			      <td><!--<a href="update.php?id=<?=$rows['ID']?>" 
			      	     class="btn btn-success">Update</a>-->

			      	  <a href="phps/delete.php?id=<?=$rows['ID']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<!--<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>-->
		</div>
	</div>
</div>
    
    
    <div id="arch" class="tabcontent">


	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
          <th  align="center"> Delete </th>
				</tr>
			</thead>

<?php
$dbh = new PDO("mysql:host=localhost;dbname=gpms", "root", "root");
 $query=$dbh->query("select * from finalproject order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
 ?> <tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="view.php?id=<?php echo $row['id'] ?>">Download</a></button>
		
        <th class="alert-success"><a href="deletefile.php?id=<?php echo $row['id']; ?>" class="text-white"> Delete </a>  </button> </td></th>
      </td>
			</tr>
           
          
  
			<?php }?>
           
           <tr>
               <td>Archive all files</td>
               <td colspan="2" class="alert-success" lign="center" ><button ><a href="archive.php">Archive</a></button></td>
           
           </tr>
           
		</table>
	</div>
	</div>
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

  
</script>
 <script>
		
 

 
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
 document.getElementById("defaultOpen").click(); 
</script>
</body>
</html>