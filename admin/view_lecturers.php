<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>
    <?php
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * FROM users  where user_type='lecturer 'ORDER BY user_id DESC"); // using mysqli_query instead
?>
 
<html>

<body class="w3-light-grey">
    <a href="lecturers.php">Add New Data</a><br/><br/>
    <a href="index.php">	Back</a><br/><br/>
	 <a href="lecturer_pdf.php">Print</a><br/><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
		<td>first name</td>
		  <td>last name</td>
		 <td>username</td>
		  <td>email address</td>
            <td>Modify</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
			echo "<td>".$res['first_name']."</td>";
			echo "<td>".$res['last_name']."</td>";
            echo "<td>".$res['username']."</td>";
			 echo "<td>".$res['email']."</td>";
            echo "<td><a href=\"edit_lecturers.php?user_id=$res[user_id]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>

<?php include("includes/footer.php");?>