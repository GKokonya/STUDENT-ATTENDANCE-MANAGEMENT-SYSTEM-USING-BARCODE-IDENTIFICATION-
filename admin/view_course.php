<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

 <?php

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM course ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>

 
<body class="w3-light-grey">
    <a href="add_course.php">Add New Data</a><br/><br/>
 <a href="home.php">Back</a><br/><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
   <td>course_name</td>
   <td>course_unit_cost</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['course_name']."</td>";
            echo "<td>".$res['course_unit_cost']."</td>";  
            echo "<td><a href=\"edit_course.php?id=$res[id]\">Edit</a> </td>";        
        }
        ?>
    </table>
</body>
</html>


    <?php include("includes/footer.php");?>


