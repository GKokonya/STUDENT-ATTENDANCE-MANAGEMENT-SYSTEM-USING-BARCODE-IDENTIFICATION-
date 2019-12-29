<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
<?php
//including the database connection file
include_once("includes/connection.php");
 
if(isset($_POST['Submit'])) {    
    $unit_code = $_POST['unit_code'];
    $unit_name = $_POST['unit_name'];
	$course_name = $_POST['course_name'];
	$year_of_study = $_POST['year_of_study'];
	 $lecturer = $_POST['lecturer'];
	  $semester = $_POST['semester'];
 $unit_cost = $_POST['unit_cost'];
    // checking empty fields
    if(empty($unit_code) || empty($unit_name)  || empty($lecturer)   || empty($year_of_study)    || empty($semester )  ||  empty($unit_cost)) {                
        if(empty($unit_code)) {
            echo "<font color='red'>unit_code field is empty.</font><br/>";
        }
        
        if(empty($unit_name)) {
            echo "<font color='red'>unit_name field is empty.</font><br/>";
        }
        
		
  if(empty($lecturer)) {
            echo "<font color='red'>lecturer field is empty.</font><br/>";
        }
        
        if(empty($year_of_study)) {
            echo "<font color='red'>year_of_study field is empty.</font><br/>";
        }
		
		
		 if(empty($semester)) {
            echo "<font color='red'>semester field is empty.</font><br/>";
        }
        
        if(empty($unit_cost)) {
            echo "<font color='red'>unit_cost field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO unit(unit_code,unit_name,course_name,lecturer,year_of_study,semester,unit_cost) VALUES('$unit_code','$unit_name','$course_name','$lecturer','$year_of_study','$semester','$unit_cost')");
        
        //display success message
       // echo "<font color='green'>Data added successfully.";
       // echo "<br/><a href='view_unit.php'>View Result</a>";
		
		echo"<script>alert('Unit added');</script>";
echo"<script>window.close(); window.location=\"view_unit.php\" ;</script>";
    }
}
?>
</body>
</html>

<?php include("includes/footer.php");?>