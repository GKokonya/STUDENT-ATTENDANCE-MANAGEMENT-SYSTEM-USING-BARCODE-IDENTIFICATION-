
<?php
	session_start();
	include("includes/connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);
			$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT user_id,user_type FROM users WHERE username='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		//	$row = mysqli_fetch_array($result);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			   if ($result->num_rows > 0) {
		// output data of each row
		// Printing the posted data
		while($row = $result->fetch_assoc()) {
        $dbusername = $_POST["username"];
      //  $dbpassword =$_POST["password"]
	  $userType = $row['user_type'];
	
} 
				
if($userType == 'lecturer'){
   header("location:lecturers/lecturers_home.php"); // This line triggers a redirect if the user_type is admin
$_SESSION['username'] = $username; 
   }else
	   if($userType == 'administrator'){
   header("location:admin/index.php"); // This line triggers a redirect if the user_type is admin
$_SESSION['username'] = $username; 	
	   }
			
		   if($userType == 'student'){
   header("location:students/students_home.php"); // This line triggers a redirect if the user_type is admin
$_SESSION['username'] = $username; 	
	   }		
			
			
			
			
		

		}else{
								echo"<script>alert('Login Failed! username or password incorrect');</script>";

		}
	}
	}

?>


</body>