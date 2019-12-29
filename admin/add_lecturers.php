<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
<?php
//including the database connection file

 
if(isset($_POST['lecturers'])) {    
 
$first_name = htmlspecialchars ($_POST["first_name"]);
$last_name= htmlspecialchars ($_POST["last_name"]);
$email = htmlspecialchars ($_POST["email"]);
$username = htmlspecialchars ($_POST["username"]);
$password = htmlspecialchars ($_POST["password"]);
$user_type = 'lecturer';
$course_name= 'N/A';
 
        // if all the fields are filled (not empty)             
        //insert data to database
		
			// To protect from MySQL injection
			$first_name = stripslashes($first_name);
			$last_name = stripslashes($last_name);
			$user_type = stripslashes($user_type);
			$email = stripslashes($email);
			$course_name = stripslashes($course_name);
			$username = stripslashes($username);
			$password = stripslashes($password);
			
			
			$first_name = mysqli_real_escape_string($conn, $first_name);
			$last_name = mysqli_real_escape_string($conn, $last_name);
			$email = mysqli_real_escape_string($conn, $email);
			$course_name = mysqli_real_escape_string($conn, $course_name);
			$user_type = mysqli_real_escape_string($conn, $user_type);
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);
			
			$password = md5($password);
			
        $result = mysqli_query($conn, "INSERT INTO users (first_name,last_name ,email,username, password,user_type,course_name)VALUES 
		( '$first_name','$last_name','$email','$username','$password','$user_type','$course_name')");
        
        //display success message
       // echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='view_lecturers.php'>View Students</a>";
    			  					echo"<script>alert('lecturer added');</script>";
echo"<script>window.close(); window.location=\"view_lecturers.php\" ;</script>";
}
?>
</body>
</html>


<?php include("includes/footer.php");?>