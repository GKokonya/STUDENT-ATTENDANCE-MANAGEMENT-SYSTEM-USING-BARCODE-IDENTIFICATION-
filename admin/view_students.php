<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

<?php
//including the database connection file
include_once("includes/connection.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM users  where user_type='student 'ORDER BY user_id DESC"); // using mysqli_query instead
?>

 
<body class="w3-light-grey">
    <a href="students.php">Add New Data</a><br/><br/>
    <a href="index.php">Home</a><br/><br/>
	 <a href="student_pdf.php">Print</a><br/><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
		 <td>username</td>
		  <td>email_address</td>
		 <td>course_name</td>
            <td>Modify</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['username']."</td>";
			 echo "<td>".$res['email']."</td>";
            echo "<td>".$res['course_name']."</td>";  
            echo "<td><a href=\"edit_students.php?user_id=$res[user_id]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>

<?php include("includes/footer.php");?>