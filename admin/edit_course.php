<html>
<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
    <a href="view_course.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_course.php">
        <table border="0">
            <tr> 
                <td>course_name</td>
                <td><input type="text" name="course_name" value="<?php echo $course_name;?>"></td>
            </tr>
            <tr> 
                <td>course_unit_cost</td>
                <td><input type="number" name="course_unit_cost" value="<?php echo $course_unit_cost;?>"></td>
            </tr>
          
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update_course" value="update_course"></td>
            </tr>
        </table>
    </form>
</body>
</html>



<?php
// including the database connection file
include_once("includes/connection.php");
 
if(isset($_POST['update_course']))
{    
    $id = $_POST['id'];
    
    $course_name=$_POST['course_name'];
    $course_unit_cost=$_POST['course_unit_cost'];
  
    
    // checking empty fields
    if(empty($course_name) || empty($course_unit_cost)) {            
        if(empty($course_name)) {
            echo "<font color='red'>course_name field is empty.</font><br/>";
        }
        
        if(empty($course_unit_cost)) {
            echo "<font color='red'>course_unit_cost field is empty.</font><br/>";
        }
        
     
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE course SET course_name='$course_name',course_unit_cost='$course_unit_cost' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: view_course.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM course WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $course_name = $res['course_name'];
    $course_unit_cost = $res['course_unit_cost'];

}
?>







    <?php include("includes/footer.php");?>
