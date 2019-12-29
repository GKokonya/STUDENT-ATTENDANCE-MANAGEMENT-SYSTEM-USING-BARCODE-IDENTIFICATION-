<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
<?php
// including the database connection file

 
if(isset($_POST['update_students']))
{    
$user_id = $_POST['user_id'];
$first_name =$_POST["first_name"];
$last_name=$_POST["last_name"];
$email =$_POST["email"];
//$username = $_POST["username"];
$course_name= $_POST["course_name"];
    // checking empty fields
    if(empty($first_name) || empty($last_name) || empty($email)  || empty($course_name)) {                
        if(empty($first_name)) {
            echo "<font color='red'>first_name field is empty.</font><br/>";
        }
        
        if(empty($last_name)) {
            echo "<font color='red'>last_name field is empty.</font><br/>";
        }
        
            if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }
        
      /*  if(empty($username)) {
            echo "<font color='red'>username field is empty.</font><br/>";
        }
		 if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
        */
        if(empty($course_name)) {
            echo "<font color='red'>course_name field is empty.</font><br/>";
        }
        //
        
     
    } else {    
        //updating the table
      $result = mysqli_query($conn,"UPDATE users SET first_name='$first_name',last_name='$last_name',email='$email',course_name='$course_name' where user_id='$user_id'");
        //redirectig to the display page. In our case, it is index.php
       // header("Location: view_students.php");
						echo"<script>alert('student updated');</script>";
echo"<script>window.close(); window.location=\"view_students.php\" ;</script>";
    }
}
?>
<?php
//getting user_id from url
$user_id = $_GET['user_id'];
 
//selecting data associated with this particular user_id
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id=$user_id");
 
while($res = mysqli_fetch_array($result))
{
    $first_name =$res["first_name"];
$last_name=$res["last_name"];
$email =$res["email"];
$user_type = 'student';
$username =$res["username"];
$course_name=$res["course_name"];

}
?>
<html>
<head>    
    <title>Edit Data</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
 
<body class="w3-light-grey">
    <a href="home.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_students.php">
        <table border="0">
            <tr> 
			<td><p>first name:</p></td>
		<td>	<input type = "text" name = "first_name" value="<?php echo $first_name;?>" placeholder = "What is your first name?"tabindex="1" required = ""onkeyup= "lettersOnly(this)" /></td>
			</tr>
			<tr>
		<td>	<p>last name:</p></td>
<td><input type = "text" name = "last_name"  value="<?php echo $last_name;?>" placeholder = "What is your last name?"tabindex="2" required = ""onkeyup= "lettersOnly(this)" /></td>
</tr>

<tr>
			<td><p>email address:</p></td>
<td><input type = "email" name = "email" value="<?php echo $email;?>"  placeholder = "What is your email address?"tabindex="4" required = ""onkeyup= "numberslettersOnly(this)" /></td>
                </tr>
				
				<tr>
				<td><p>course name:</p></td>
                <td>								<?php
echo "<select name='course_name'>";

        
     $records = mysqli_query($conn, "SELECT course_name FROM course");
     while ($row = mysqli_fetch_array($records)){
		echo $course_name=$row['course_name'];
     echo "<option value=$course_name> $course_name</option>";
    }
echo "</select>";
	?></td>
            </tr>
         
          
            <tr>
                <td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
                <td><input type="submit" name="update_students" value="update_student"></td>
            </tr>
        </table>
    </form>
</body>
</html>