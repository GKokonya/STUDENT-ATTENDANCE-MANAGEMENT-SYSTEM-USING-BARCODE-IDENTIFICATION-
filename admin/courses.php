<?php
    include("includes/check.php");
    include("includes/header.php"); 
?>

    <?php include("includes/navigation.php");?>

    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
 
if(isset($_POST['Submit'])) {    
    $course_name = $_POST['course_name'];
    $course_unit_cost = $_POST['course_unit_cost'];
 
    // checking empty fields
    if(empty($course_name) || empty($course_unit_cost)) {                
        if(empty($course_name)) {
            echo "<font color='red'>course_name field is empty.</font><br/>";
        }
        
        if(empty($course_unit_cost)) {
            echo "<font color='red'>course_unit_cost field is empty.</font><br/>";
        }
        
 
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO course(course_name,course_unit_cost) VALUES('$course_name','$course_unit_cost')");
        
        //display success message
        //echo "<font color='green'>Data added successfully.";
       // echo "<br/><a href='view_course.php'>View Result</a>";
    echo"<script>alert('course added');</script>";
echo"<script>window.close(); window.location=\"view_course.php\" ;</script>";
    }
}
?>
</body>
</html>


<?php include("includes/footer.php");?>