<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

 


<?php

	if(isset($_POST['next']))
{    


    //$id = $_POST['id'];
    $student=$_POST['student'];
	 $student=$_SESSION['username'];
    $year_of_study=$_POST['year_of_study'];
    $semester=$_POST['semester'];
  
 // $result = mysqli_query($conn, "SELECT course_name FROM users where username='$login_user'");  
$result= mysqli_query($conn, "SELECT * FROM unit where year_of_study='$year_of_study' AND semester='$semester' ");
}
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
 
    <table width='80%' border=0>
   
		
		   
		  
		  
		        <tr bgcolor='#CCCCCC'>
				
		<td>unit id</td>		
		<td>unit code</td>
		  <td>unit name</td>
		  <td>Registration</td>
		  </tr>
          
				<?php



        
    // $records = mysqli_query($conn, "SELECT * from unit");
     while ($res = mysqli_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>".$res['id']."</td>";
			echo "<td>".$res['unit_code']."</td>";
			echo "<td>".$res['unit_name']."</td>";
			echo "<td><a href=\"register_unit.php?id=$res[id]\">Register</a></td>";        
			 echo "<tr>";

    }

	?>       
     
       
		</td></tr>
    </table>
</body>
</html>

<?php include("includes/footer.php");?>
