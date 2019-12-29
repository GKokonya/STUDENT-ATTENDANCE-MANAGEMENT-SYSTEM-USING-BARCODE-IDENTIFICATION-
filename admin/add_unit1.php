<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
    <a href="index.php">Back</a>
    <br/><br/>
 
    <form action="add_unit.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>unit code</td>
                <td><input type="text" name="unit_code"></td>
            </tr>
            <tr> 
                <td>unit name</td>
                <td><input type="test" name="unit_name"></td>
            </tr>
					<tr> 
                <td>Course Name</td>
                <td>
				<?php
require_once "includes/connection.php";
echo "<select name='course_name'>";

        
     $records = mysqli_query($conn, "SELECT course_name FROM course");
     while ($row = mysqli_fetch_array($records)){
		echo $course_name=$row['course_name'];
     echo "<option value=$course_name> $course_name</option>";
    }
echo "</select>";
	?>


				
				</td>
            </tr>
			
			<tr> 
                <td>lecturer</td>
                <td>
				<?php
require_once "includes/connection.php";
echo "<select name='lecturer'>";

        
     $records = mysqli_query($conn, "SELECT username FROM users where user_type='lecturer'");
     while ($row = mysqli_fetch_array($records)){
		echo $user=$row['username'];
     echo "<option value=$user> $user</option>";
    }
echo "</select>";
	?>


				
				</td>
            </tr>
			
			<tr> 
                <td>year of study</td>
                <td>
				<select name="year_of_study">
				<option value="first_year"> first year</option>
				<option value="second_year"> secon year</option>
				<option value="third_year"> third year</option>
				<option value="fourth_year"> fourth year</option>
				</select>
				</td>
				
            </tr>

			<tr> 
                <td>semester</td>
                <td>
				<select name="semester">
				<option value="first_semester"> first semester</option>
				<option value="second_semester"> second semester</option>
				<option value="third_semester"> third semester</option>
				</select>
				</td>
            </tr>
			
			
				
			<tr> 
              <td>unit cost</td>
                <td><input type="number" name="unit_cost"></td>
            </tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php include("includes/footer.php");?>

