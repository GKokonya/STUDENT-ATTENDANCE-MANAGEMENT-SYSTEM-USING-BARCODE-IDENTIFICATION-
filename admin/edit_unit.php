<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
    <?php
 
if(isset($_POST['update_unit']))
{    
    $id = $_POST['id'];
    
     $unit_code = $_POST['unit_code'];
    $unit_name = $_POST['unit_name'];
	$course_name = $_POST['course_name'];
	$year_of_study = $_POST['year_of_study'];
	 $lecturer = $_POST['lecturer'];
	  $semester = $_POST['semester'];
	   $unit_cost = $_POST['unit_cost'];
    

        $result = mysqli_query($conn, "UPDATE unit SET unit_code='$unit_code',unit_name='$unit_name',
		course_name='$course_name',year_of_study='$year_of_study',
		lecturer='$lecturer',semester='$semester',
		unit_cost='$unit_cost' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
     //   header("Location: view_unit.php");
    		echo"<script>alert('Unit updated');</script>";
echo"<script>window.close(); window.location=\"view_unit.php\" ;</script>";
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM unit WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
	$unit_code = $res['unit_code'];
    $unit_name = $res['unit_name'];
    $unit_cost = $res['unit_cost'];

}
?>
<html>
<head>    
    <title>Edit Data</title>

    <a href="view_course.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_unit.php">
            <table width="25%" border="0">
            <tr> 
                <td>unit code</td>
                <td><input type="text" name="unit_code" value="<?php echo $unit_code;?>"></td>
            </tr>
            <tr> 
                <td>unit name</td>
                <td><input type="test" name="unit_name" value="<?php echo $unit_name;?>"></td>
            </tr>
					<tr> 
                <td>Course Name</td>
                <td>
				<?php

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
                <td><input type="number" name="unit_cost" value="<?php echo $unit_cost;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update_unit" value="update_unit"></td>
            </tr>
        </table>
    </form>
</body>
</html>