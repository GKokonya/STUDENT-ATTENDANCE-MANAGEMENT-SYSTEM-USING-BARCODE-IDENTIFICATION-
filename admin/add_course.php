<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

 


    <a href="index.php">Home</a>
    <br/><br/>
 
    <form action="courses.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Course name</td>
                <td><input type="text" name="course_name"></td>
            </tr>
            <tr> 
                <td>course unit cost</td>
                <td><input type="number" name="course_unit_cost"></td>
            </tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php include("includes/footer.php");?>
