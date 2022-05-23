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
<title> Announcements </title>
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
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
	margin-left:160px;
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
					


tr:nth-child(even) {background:   #ebebe0}
tr:nth-child(odd) {background: #FFF}

.thead {
	background: #466a75;
	color: white;
	height: 50px;
	width: 100px;
}
.date {
	width: 170px;
}
.tit {
	width: 150px;	
}

.mess {
	width: 500px;
}
.idcell {
	text-align: center;
}
.btn-danger {
	background-color: #f99679;
	padding: 8px;
	border: none;
border-radius: 15%;	
}
.btn-primary {
	background-color: #378265;
	padding: 8px;
	border: none;
	border-radius: 10%;
		
}
.text-white {
	color: white;
	
}

.readmore {
  max-width: 500px;
  padding: 10px;
}

.readmore.less {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ebebe0;
  background-color: white ;
  margin-bottom: 15px;
  width: 406px;

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
  font-size:1em;
  color: #003366; 
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ebebe0;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ebebe0;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 12px 12px;
  border-top: none;
}
.multiselect {
  width: 200px;
  display:inline-block;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
  padding-bottom:10px;
	padding-top: 10px;
	margin: 0px; 
display: block;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}

.card {
	width: 100%;
	background-color:white;
	
}
.card input[type=text]{
	width: 100%;
	padding:10px;	
}
.card textarea{
	width: 100%;
	padding:10px;	
}
.subm {
	background-color:green;
	color: white;
	width:50%;
	text-align:center;
	margin:10px;
	padding:5px;
	border: none;
	font-size:20px;
	
}
	
input[type=date] {
	width: 22%;
	padding:8px;
	margin: 0px 100px 0px 0px; 	
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
                    <div class="nav__list">
                       <a href="Dashboard-Part1-main/coor_home.php" class="nav__link ">
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

                                <a href="announcment.php" class="nav__link active">
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

                <a href="logout.php" class="nav__link">
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

<div class ="main">

<div class="tab">
 <button class="tablinks" onclick="openDelev(event, 'update')" id="defaultOpen"><strong> Update announcment </strong></button>
  <button class="tablinks" onclick="openDelev(event, 'post')"><strong> Add new announcment </strong></button>
</div>

 <div id = "update" class="container tabcontent">
 <div class="col-lg-12">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center thead">
 
 <th  class=" thead"> ID </th>
 <th class=" thead tit"> Title </th>
 <th class=" thead mess"> Text </th>
 <th class="thead date"> date</th>
 <th class=" thead"> Delete </th>
 <th class=" thead"> Update </th>

 </tr >

<?php 
 
						  $sql4 = 'SELECT * FROM announcement' ;
							 $result4 = mysqli_query($connect, $sql4);
 
 while($res = mysqli_fetch_array($result4)){
	 
 ?>
<tr class="text-center">
 <td class= "idcell"> <?php echo $res['ID'];  ?> </td>
 <td class= "idcell"> <?php echo $res['title'];  ?> </td>
 <td> <div class="readmore"> <?php echo $res['Message'];  ?> </div></td>
  <td class= "idcell"> <?php if ($res['User_type']== null){ echo ' '; } else {echo $res['Date'];} ?> </td>
 <td class= "idcell"> <button class="btn-danger btn "> <a href="deleteAnn.php?id=<?php echo $res['ID']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td class= "idcell"> <button class="btn-primary btn"> <a href="updateAnn.php?id=<?php echo $res['ID']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>
<?php 
 }
  ?>
  
  </table>  

 </div>
 </div>

 <div class = "post tabcontent card" id = "post" style ="">
 <form action="insertAnn.php" method = "POST">

    <label for="title"><b>Title</b></label><br/>
    <input type="text" class ="form-control" placeholder="Enter Announcements Title" name="aTitle" id="title" required>
    </br>
	</br>
    <label for="txt"><b>Text</b></label></br>
    <textarea class ="form-control" rows="10" cols="30" name="aText" id ="txt" placeholder="Enter Announcements Text" required>
</textarea>
</br>
<label for="pdate"><b>Post date</b></label></br>
 <input type="date" id="pdate" name="pdate">
      <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
	 <label for="to"><b>To</b></label></br>
      <select id "to">
        <option>Select user</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
	 <input type='checkbox' onClick='toggle(this)'/><span  style = "color: green" >Check All</span><br />
	 <input class = "cinput" type="checkbox" id="Country" name="Country[]" value="supervisor">All Supervisors<br/>
	 <input class = "cinput" type="checkbox" id="Country" name="Country[]" value="Student">All Students<br/>
	 <hr>
	<?php 
$sql1 = "SELECT count(ID), Section_No, Group_No FROM student group by Section_No, Group_No " ; 
				if($result1 = mysqli_query($connect, $sql1))
{                  	
                 while ($row2 = mysqli_fetch_array($result1)){
          
           echo  '<input class = "cinput" type="checkbox" id="Country" name="Country[]" value="'.$row2['Section_No'].'">Sec'.$row2['Section_No'].' (G'.$row2['Group_No'].')<br/>';
			
				 }
}
else {echo("Error description: " . $connect -> error);}
			?>
  
    </div>
  </div>
    <br/><br/>
            <input type="submit" id="submit" name="submit" value="Post" class="subm"> 
</form>
    
    

 
 </div>

 <script type="text/javascript">
 
function toggle(oInput) {
    var aInputs = document.getElementsByClassName('cinput');
    for (var i=0;i<aInputs.length;i++) {
        if (aInputs[i] != oInput) {
            aInputs[i].checked = oInput.checked;
        }
    }
}
 </script>

</div>
<div class = "footer"> Copyright &copy 2022.All rights reseved.</div>

 <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script>
		
		
	$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
		
	var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
		
		
 window.onload = function() {
  let rm = document.querySelectorAll('.readmore');
  rm.forEach(el => {
    el.classList.add('less');
    var div = document.createElement('div');
    div.innerHTML = "<a href='javascript:void(0);' class='rmlink' onclick='toggleRM(this)'>Read more</a>";
    el.append(div);

  })
}

function toggleRM(el) {
  const cl = el.parentNode.parentNode.classList
  const is_less = cl.contains('less');
  el.innerHTML = !is_less ? "Read More" : "Read Less";
  if (is_less) cl.remove('less');
  else cl.add('less');
}
	
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
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script>CKEDITOR.replace( 'aText' ); </script>

</html>

