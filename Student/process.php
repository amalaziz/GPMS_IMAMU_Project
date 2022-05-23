

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
	//------------------Start------------------------DESCRIPTION STUDENTS-----------------------Start----------------------------
	
     if(isset($_POST['done'])){
		 	 $id = $_GET['id']; 
	 
	 $value = $_POST['english_text'];
 $description =  mysqli_real_escape_string($connect, $value);
	 $arabicdescription= $_REQUEST['arabic_text']; 
	 $eTitle= $_POST['eTitle'];
	 $aTitle= $_POST['aTitle'];
	 $domain = $_POST['domain'];
	 $solution = $_POST['solution'];
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
	 
	 
	 $q = "SELECT *FROM description WHERE Section_No = '$id'";
	 if( $result= mysqli_query($connect, $q)){
	     
		  if ($row3 = mysqli_fetch_array($result)> 0){
			$sql= "UPDATE description set description_english='$description', description_arabic = '$arabicdescription',
			domain = '$domain' ,solution= '$solution' ,status= 'supervisor' WHERE Section_No = '$id'";
	
if( $result= mysqli_query($connect, $sql)){
    
  
}
	else {echo("Error description 1: " . $connect -> error);
         
         } 
		 }
		 else {
	 
  $sql= "insert into description (description_english, description_arabic, Section_No , domain, solution, status ) 
  VALUES (' $description','  $arabicdescription', '$id', '$domain', '$solution','supervisor' )";
	
if( $result= mysqli_query($connect, $sql)){
    
 
}
	else {echo("Error description: " . $connect -> error);
         
         }
		 }
	 }

$qu = "SELECT * FROM project WHERE Section_No = '$id'";	

	if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
 
 
 $sql2= "UPDATE project SET Title = '$eTitle', title_arabic = '$aTitle' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:desc.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 else {
     $sql2= "INSERT INTO project(Section_No, Title, title_arabic, Year, Semester) VALUES ('$id','$eTitle','$aTitle','$year','$semester')";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:desc.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 }	
		 
		 
	 }
	 
	 //------------------end------------------------DESCRIPTION STUDENTS-----------------------end----------------------------
	 
	 if(isset($_POST['Reject'])){
	 
 $value = $_POST['english_text'];
 $english_text =  mysqli_real_escape_string($connect, $value);
 $arabic_text = $_POST['Arabic_text'];
  $id = $_GET['id'];
  $eTitle= $_POST['eTitle'];
  $aTitle= $_POST['aTitle'];
  $stu = 'student';
 $q = " update description set description_arabic= '".$arabic_text."',description_english= '".$english_text."', status='$stu'  where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:supervisor\descriptionS.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 $sql2= "UPDATE project SET Title = '$eTitle', title_arabic = '$aTitle' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
    
}
	else {echo("Error description: " . $connect -> error);
         
         }	
 } 
 if(isset($_POST['Accept'])){
	 $id = $_GET['id'];
	 
	 $cor = $_GET['cor'];
	  $ti = "Project description (GP2)";
	  $tit = explode(' ', trim($ti ))[0];
$date_clicked = date('Y-m-d H:i:s');

	 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor'";	
 if( $result2= mysqli_query($connect, $qu)){
	while ($row3 = mysqli_fetch_array($result2)){
		$titl = explode(' ', trim($row3['title']))[0];
		if($titl==$tit){
			$title = explode(' ', trim($row3['title']))[0];
		$end_event =  $row3['end_event'];
		}
		
	}
 }
		 	 $sql1 = "SELECT * FROM project WHERE Section_No = '$id'";
	 if( $result2= mysqli_query($connect, $sql1)){
    if ($row4 = mysqli_fetch_array($result2)){
		
		 if($date_clicked > $end_event){
		$newdeg = ($row4['Degree'])-(0.25) ;
	 }
	 else {
		 $newdeg = $row4['Degree'];
	 }
		
	}
    
}
	 $coor = 'Coordinatior';
	 $q2 = " update description set status='$coor'  where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){

 
 }
 else {echo("Error description: " . mysqli_error($connect));}
 $sql2= "UPDATE project SET Degree = '$newdeg' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
  header('location:supervisor\supervisor_home.php');  
}
	else {echo("Error description: " . $connect -> error);
         
         }	
  
 }
 //--------------------------------------PROPOSAL----------------------------------------------------
 if(isset($_POST['doneP'])){
	 $id = $_GET['id'];
	 $value = $_POST['proposal_summary'];
	 $sub = 'supervisor';
	  $eTitle= $_POST['eTitle'];
  $aTitle= $_POST['aTitle'];
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
	 
	 
	 
 $proposal_summary =  mysqli_real_escape_string($connect, $value);
 
 $q = "SELECT *FROM proposal_summary WHERE Section_No = '$id'";
	 if( $result= mysqli_query($connect, $q)){
	     
		  if ($row3 = mysqli_fetch_array($result)> 0){
			$sql= "UPDATE proposal_summary set summay_text='$proposal_summary', status= '$sub' WHERE Section_No = '$id'";
	
if( $result= mysqli_query($connect, $sql)){
    
   
}
	else {echo("Error description 1: " . $connect -> error);
         
         } 
		 }
		 else {
  
  $sql5= "insert into proposal_summary ( Section_No, summay_text, status ) VALUES ('$id', '$proposal_summary', '$sub')";
	
if( $result5= mysqli_query($connect, $sql5)){
    
  
}
	else {echo("Error description: " . $connect -> error);
         
         }
	 
 }
	 }
	 $qu = "SELECT * FROM project WHERE Section_No = '$id'";	

	if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
 
 
 $sql2= "UPDATE project SET Title = '$eTitle', title_arabic = '$aTitle' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:proposalSummery.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 else {
     $sql2= "INSERT INTO project(Section_No, Title, title_arabic, Year, Semester) VALUES ('$id','$eTitle','$aTitle','$year','$semester')";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:proposalSummery.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 }
 }
 
  if(isset($_POST['RejectP'])){
	 
 $sub_rev1 = $_POST['sub_rev'];
 $sub_rev =  mysqli_real_escape_string($connect, $sub_rev1);
  $id = $_GET['id'];
  $stu = 'student';
 $q = " update proposal_summary set supervisor_rev= '".$sub_rev."', status='$stu'  where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:supervisor\proposalSummery.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 } 
 if(isset($_POST['AcceptP'])){
	 $id = $_GET['id'];
$cor = $_GET['cor'];
	  $tit = "Proposal Summery (GP1)";
	  
$date_clicked = date('Y-m-d H:i:s');

	 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor' AND title='$tit'";	
 if( $result2= mysqli_query($connect, $qu)){
	if ($row3 = mysqli_fetch_array($result2)){
		
		$end_event =  $row3['end_event'];
		
	} 
 }
		 	 $sql1 = "SELECT * FROM project WHERE Section_No = '$id'";
	 if( $result2= mysqli_query($connect, $sql1)){
    if ($row4 = mysqli_fetch_array($result2)){
		
		 if($date_clicked > $end_event){
		$newdeg = ($row4['Degree'])-(0.25) ;
	 }
		
	}
    
}	 
	 
	  $sub_rev1 = $_POST['sub_rev'];
    $sub_rev =  mysqli_real_escape_string($connect, $sub_rev1);
	 $stu = 'Coordinatior';
	 $q2 = "  update proposal_summary set supervisor_rev= '".$sub_rev."', status='$stu'  where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){

 }
 else {echo("Error description: " . mysqli_error($connect));}
 $sql2= "UPDATE project SET Degree = '$newdeg' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
  header('location:supervisor\supervisor_home.php');  
}
	else {echo("Error description: " . $connect -> error);
         
         }
  
 } 
                    /*  -------------------------------------EXAMINERS-------------------------------------------- */
if(isset($_POST['examin'])){
	 
	  $sub_rev1 = $_POST['sub_rev'];
    $sub_rev =  mysqli_real_escape_string($connect, $sub_rev1);
	 $id = $_GET['id'];
	 $stu = 'Examiner';
	 $q2 = "  update proposal_summary set supervisor_rev= '".$sub_rev."', status='$stu'  where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){

 header('location:supervisor\supervisor_home.php');
 }
 else {echo("Error description: " . mysqli_error($connect));}
  
 }					
					
if(isset($_POST['examiner1'])){
	 
	  $ex1_rev1 = $_POST['ex1_rev'];
    $ex1_rev =  mysqli_real_escape_string($connect, $ex1_rev1);
	 $id = $_GET['id'];
	 //$stu = 'Coordinatior';
	 $q2 = "  update proposal_summary set Examinr1_comm= '".$ex1_rev."' where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){

 header('location:supervisor\supervisor_home.php');
 }
 else {echo("Error description: " . mysqli_error($connect));}
  
 }
 
 if(isset($_POST['examiner2'])){
	 
	  $ex2_rev1 = $_POST['ex2_rev'];
    $ex2_rev =  mysqli_real_escape_string($connect, $ex2_rev1);
	 $id = $_GET['id'];
	 //$stu = 'Coordinatior';
	 $q2 = "  update proposal_summary set Examinr2_comm= '".$ex2_rev."' where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){

 header('location:supervisor\supervisor_home.php');
 }
 else {echo("Error description: " . mysqli_error($connect));}
  
 }
 //----------------------------------------------PROGRESS STUDENTS------------------------------------------------
 
 if(isset($_POST['progress_student'])){
	 

  $id = $_GET['id']; 
  $Schdule = $_POST['Schdule'];
  $stu = 'supervisor';
 $q = " update progress_report set sub_statue= '".$stu."',Schdule= '$Schdule'  where section_number=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:progress');
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 } 
 //----------------------------------------------PROGRESS STUDENTS------------------------------------------------
  //----------------------------------------------FIRST STUDENTS------------------------------------------------
 
 if(isset($_POST['first_done'])){
	 

  $id = $_GET['id']; 
  $eTitle= $_POST['eTitle'];
	 $aTitle= $_POST['aTitle'];
  $stu = 'supervisor';
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
  
  
 $q = " update first_meeting set status= '".$stu."' where Section_No=$id  ";
 


 if ($query = mysqli_query($connect,$q)){


 }
 else {echo("Error description: " . mysqli_error($connect));}
 $qu = "SELECT * FROM project WHERE Section_No = '$id'";	

	if( $result2= mysqli_query($connect, $qu)){
 if(mysqli_num_rows($result2)>0){
 
 
 $sql2= "UPDATE project SET Title = '$eTitle', title_arabic = '$aTitle' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:firstmeteeing.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 else {
     $sql2= "INSERT INTO project(Section_No, Title, title_arabic, Year, Semester) VALUES ('$id','$eTitle','$aTitle','$year','$semester')";
	
if( $result2= mysqli_query($connect, $sql2)){
  header('location:firstmeteeing.php');   
    
}
	else {echo("Error description: " . $connect -> error);
         
         }
 }
 }
 
 }
 //----------------------------------------------------Final Project--------------------------------------

if(isset($_POST['final_done'])){
	 $id = $_GET['id'];
	 
	 $stu = 'supervisor';
 $q = " update finalproject set status= '".$stu."'  where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:/FileSubmit/uploadt.php');
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
   
	 

}
//-----------------------------------------------------final---------------------------END------------------ 
 //----------------------------------------------Progress STUDENTS------------------------------------------------
 if(isset($_POST['AcceptPR'])){ 
 
$id = $_GET['id'];
$date_clicked = date('Y-m-d H:i:s');
 $cor = $_GET['cor'];
 
 $w1 = "Week 1-4" ;
 $w2 = "Week 5-8" ;
 $w3 = "Week 9-12";
 
 $qu2 = "SELECT * FROM progress_report WHERE section_number = '$id'";	
 if( $result3= mysqli_query($connect, $qu2)){
	if ($row3 = mysqli_fetch_array($result3)){
	$progress_num = $row3['progress_num'];	
 }}
 
 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor'";	
 if( $result2= mysqli_query($connect, $qu)){
	while ($row3 = mysqli_fetch_array($result2)){
		$tit = explode(' ', $row3['title'])[0].' '.explode(' ', $row3['title'])[1];
		
		if($progress_num == 1){
		if($tit==$w1){
			$title = $tit;
		$end_event =  $row3['end_event'];
		echo $end_event.' '.$title;
		break;
		}
		}
		if($progress_num == 2){
		if($tit==$w2){
			$title = $tit;
		$end_event =  $row3['end_event'];
		echo $end_event.' '.$title;
		break;
		}
		}
		if($progress_num == 3){
		if($tit==$w3){
			$title = $tit;
		$end_event =  $row3['end_event'];
		echo $end_event.' '.$title;
		break;
		}
		}
		
	}
	
 }
 
  	 $sql1 = "SELECT * FROM project WHERE Section_No = '$id'";
	 if( $result2= mysqli_query($connect, $sql1)){
    if ($row4 = mysqli_fetch_array($result2)){
		
		 if(($date_clicked > $end_event) ){
		$newdeg = ($row4['Degree'])-(0.25) ;
	 }
		else {
			$newdeg = $row4['Degree'];
		}
	}
    
}
	 
	  $sub_rev1 = $_POST['PRsupervisor_rev'];
    $sub_rev =  mysqli_real_escape_string($connect, $sub_rev1);
	 
	 $stu = 'Coordinatior';
	 $q2 = "  update progress_report set supervisor_rev= '".$sub_rev."', sub_statue='$stu', progress_num='$progress_num'+". 1 ." where section_number=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){


 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 $sql2= "UPDATE project SET Degree = '$newdeg' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
  header('location:supervisor\supervisor_home.php');  
}
	else {echo("Error description: " . $connect -> error);
         
         }
  
 } 
  if(isset($_POST['RejectPR'])){
	 
 $sub_rev1 = $_POST['PRsupervisor_rev'];
 $sub_rev =  mysqli_real_escape_string($connect, $sub_rev1);
  $id = $_GET['id'];
  $stu = 'student';
 $q = "update progress_report set supervisor_rev= '".$sub_rev."', sub_statue='$stu'  where section_number=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:supervisor\progress_report.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 } 
 
 //----------------------------------------------------Progress---------------------------END------------
 //----------------------------------------------------First-----------------------------START------------
 
  if(isset($_POST['Accept_fm'])){ 
	 
	 $id = $_GET['id'];
	 $cor = $_GET['cor'];
	  $ti = "First meeting deliverable";
	   $sub_rev = $_POST['sub_rev'];
	  $tit = explode(' ', trim($ti ))[0];
$date_clicked = date('Y-m-d H:i:s');

	 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor'";	
 if( $result2= mysqli_query($connect, $qu)){
	while ($row3 = mysqli_fetch_array($result2)){
		$titl = explode(' ', trim($row3['title']))[0];
		if($titl==$tit){
			$title = explode(' ', trim($row3['title']))[0];
		$end_event =  $row3['end_event'];
		}
		
	} 
 }
		 	 $sql1 = "SELECT * FROM project WHERE Section_No = '$id'";
	 if( $result2= mysqli_query($connect, $sql1)){
    if ($row4 = mysqli_fetch_array($result2)){
		
		 if(($date_clicked > $end_event) ){
		$newdeg = ($row4['Degree'])-(0.25) ;
	 }
		else {
			$newdeg = $row4['Degree'];
		}
	}
    
}	 
	 
	 $stu = 'Coordinatior';
	 $q2 = "  update first_meeting set status= '".$stu."', supervisor_rev= '".$sub_rev."' where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){


 }
 else {echo("Error description: " . mysqli_error($connect));}
 $sql2= "UPDATE project SET Degree = '$newdeg' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
  header('location:supervisor\supervisor_home.php');  
}
	else {echo("Error description: " . $connect -> error);
         
         }
  
 } 
 //----------------------------------------------------First----------------------------------REJECT------
 if(isset($_POST['Reject_fm'])){

  $id = $_GET['id'];
  $stu = 'student';
  $sub_rev = $_POST['sub_rev'];
 $q = "update first_meeting set status= '".$stu."', supervisor_rev= '".$sub_rev."' where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:supervisor\Sfirst_metting.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 }  
 
 //----------------------------------------------------Final Project--------------------------------------
 if(isset($_POST['AcceptF'])){ 
	 
	 $id = $_GET['id'];
	 $cor = $_GET['cor'];
	  $ti = "Final project submission (GP2)";
	  $tit = explode(' ', trim($ti ))[0];
$date_clicked = date('Y-m-d H:i:s');

	 $qu = "SELECT * FROM events WHERE coruse_NO = '$cor'";	
 if( $result2= mysqli_query($connect, $qu)){
	while ($row3 = mysqli_fetch_array($result2)){
		$titl = explode(' ', trim($row3['title']))[0];
		if($titl==$tit){
			$title = explode(' ', trim($row3['title']))[0];
		$end_event =  $row3['end_event'];
		}
		
	} 
 }
		 	 $sql1 = "SELECT * FROM project WHERE Section_No = '$id'";
	 if( $result2= mysqli_query($connect, $sql1)){
    if ($row4 = mysqli_fetch_array($result2)){
		
		 if(($date_clicked > $end_event) ){
		$newdeg = ($row4['Degree'])-(0.25) ;
	 }
		else {
			$newdeg = $row4['Degree'];
		}
	}
    
}	 
	 
	 $stu = 'Coordinatior';
	 $q2 = "  update finalproject set status= '".$stu."' where Section_No=$id  ";


 if ($query2 = mysqli_query($connect,$q2)){


 }
 else {echo("Error description: " . mysqli_error($connect));}
 $sql2= "UPDATE project SET Degree = '$newdeg' WHERE Section_No = '$id' ";
	
if( $result2= mysqli_query($connect, $sql2)){
    
  header('location:supervisor\supervisor_home.php');  
}
	else {echo("Error description: " . $connect -> error);
         
         }
  
 } 
  if(isset($_POST['RejectF'])){

  $id = $_GET['id'];
  $stu = 'student';
 $q = "update finalproject set status= '".$stu."' where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:supervisor\FileSubmit\uploadt.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 }  
 //------------------------------------------------------Coordinatior--------------------------------------------------
 //------------------------------------------------------Description---------------------------------------------------
 

 
  if(isset($_POST['coor_rejectdes'])){

  $id = $_GET['id'];
  $stu = 'student';
 $q = "update description set status= '".$stu."' where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:coordinatior\Dashboard-Part1-main\coor_description.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 }   
 
  //------------------------------------------------------proposal---------------------------------------------------
   if(isset($_POST['coor_acceptdes'])){

  $id = $_GET['id'];
  $stu = 'Coordinatior';
  $coor_rev = $_POST['coor_rev'];
 $q = "update proposal_summary set status= '".$stu."', coor_review='".$coor_rev."' where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:coordinatior\Dashboard-Part1-main\coor_home.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 } 
    if(isset($_POST['coor_rejectProp'])){

  $id = $_GET['id'];
  $coor_rev = $_POST['coor_rev'];
  $stu = 'student';
 $q = "update proposal_summary set status= '".$stu."', coor_review='".$coor_rev."' where Section_No=$id  ";


 if ($query = mysqli_query($connect,$q)){

 header('location:coordinatior\Dashboard-Part1-main\coor_proposal.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 }
 //------------------------------------------------------Progress---------------------------------------------------
  
    if(isset($_POST['coor_rejectPR'])){  

  $id = $_GET['id'];
  $stu = 'student';
 $q = "update progress_report set sub_statue='$stu' , progress_num=progress_num-". 1 ." where section_number=$id";


 if ($query = mysqli_query($connect,$q)){

 header('location:coordinatior\Dashboard-Part1-main\coor_progress.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 } 
 //------------------------------------------------------FIRST-------------------------------------------------------
 if(isset($_POST['CReject_fm'])){  

  $id = $_GET['id'];
  $stu = 'student';
 $q = "update first_meeting set status='$stu' where Section_No=$id";


 if ($query = mysqli_query($connect,$q)){

 header('location:coordinatior\Dashboard-Part1-main\Cfirst_metting.php?id='.$id);
 }
 else {echo("Error description: " . mysqli_error($connect));}
 
 }
?>