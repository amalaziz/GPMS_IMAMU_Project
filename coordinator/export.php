<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "root", "gpms");  
      header('Content-Type: text/csv; charset=utf-8-sig');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Project Description (English)', 'Project Description (Arabic)', 'Project title (English)','Project title (Arabic)', 'Year', 'Semester'));  
      $query = "SELECT description.description_english , description.description_arabic, project.Title ,
	  project.title_arabic, project.Year ,project.Semester	  
  FROM project
  JOIN description
    ON description.Section_No =project.Section_No Where description.status = 'Coordinatior'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {
           fputcsv($output, $row);  
		   
      }  
      fclose($output);  
 }  
 ?>  