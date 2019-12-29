<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

<html>
<head>
    <title>Add Data</title>
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
 
<body class="w3-light-grey">
    <a href="home.php">Back</a>
    <br/><br/>
 
    <form action="view_class_registration.php" method="post" name="form1">
        <table width="25%" border="0">
		
		 <tr> 
                <td>select your Year of Study </td>
				<td>
              		
  <select name="year_of_study">
				<option value="first_year"> first year</option>
				<option value="second_year"> secon year</option>
				<option value="third_year"> third year</option>
				<option value="fourth_year"> fourth year</option>
				</select>
    
</select>
	
	</td>
            </tr>
            <tr> 
                <td>select your Semester</td>
              				<td><select name="semester">
				<option value="first_semester"> first semester</option>
				<option value="second_semester"> second semester</option>
				</select>
	</td>
            </tr>
			
			       <tr> 
                <td>Student</td>
              	         <td>
				<?php
require_once "includes/connection.php";
echo "<select name='student'>";

        
     $records = mysqli_query($conn, "SELECT username FROM users where user_type='student'");
     while ($row = mysqli_fetch_array($records)){
		echo $student=$row['username'];
     echo "<option value=$student> $student</option>";
    }
echo "</select>";
	?>


				
				</td>
	</td>
            </tr>
			
			 <tr>
			 <td><input type="submit" name="next" value="next"></td>
			  </tr>
			</table>
           </form>
			</body>
			</html>


			    <?php include("includes/footer.php");?>