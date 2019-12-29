<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

    <?php
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($conn, "SELECT * from unit ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>

</head>
 
<body class="w3-light-grey">
    <a href="add_unit1.php">Add New Data</a><br/><br/>
    <a href="index.php">	Back</a><br/><br/>
	 <a href="lecturer_pdf.php">Print</a><br/><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
		<td>unit name</td>
		  <td>year of study</td>
		 <td>semester</td>
		  <td>unitcost</td>
            <td>Modify</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
			echo "<td>".$res['unit_name']."</td>";
			echo "<td>".$res['year_of_study']."</td>";
            echo "<td>".$res['semester']."</td>";
			 echo "<td>".$res['unit_cost']."</td>";
            echo "<td><a href=\"edit_unit.php?id=$res[id]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>

    <?php include("includes/footer.php");?>