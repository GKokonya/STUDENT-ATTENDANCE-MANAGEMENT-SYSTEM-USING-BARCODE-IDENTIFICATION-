<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
<?php
 
if(isset($_POST['update_lecturers']))
{    
$user_id = $_POST['user_id'];
$first_name =$_POST["first_name"];
$last_name=$_POST["last_name"];
$email =$_POST["email"];

    // checking empty fields
     
        //updating the table
      $result = mysqli_query($conn,"UPDATE users SET first_name='$first_name',last_name='$last_name',email='$email' where user_id='$user_id'");
        //redirectig to the display page. In our case, it is index.php
      //  header("Location: view_lecturers.php");
			  					echo"<script>alert('lecturer edited');</script>";
echo"<script>window.close(); window.location=\"view_lecturers.php\" ;</script>";
    
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

}
?>
<html>
 
<body class="w3-light-grey">
    <a href="home.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_lecturers.php">
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
                <td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
                <td><input type="submit" name="update_lecturers" value="update Lecturer"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php include("includes/footer.php");?>