<?php
	include("includes/check.php");
	include("includes/header.php");	
?>

	<?php include("includes/navigation.php");?>

<title>  SIGN UP </title>

	
<body>    
<div class="loginbox" align = "center">
		
		<h1> SIGN UP HERE </h1>
		<div class ="name" align="left">
		
		<form  action ="add_lecturers.php" method ="POST">
			<p>first name:</p>
<input type = "text" name = "first_name" placeholder = "What is your first name?"tabindex="1" required = ""onkeyup= "lettersOnly(this)" />
			<p>last name:</p>
<input type = "text" name = "last_name" placeholder = "What is your last name?"tabindex="2" required = ""onkeyup= "lettersOnly(this)" />
			<p>email address:</p>
<input type = "email" name = "email" placeholder = "What is your email address?"tabindex="4" required = ""onkeyup= "numberslettersOnly(this)" />
			
			<p>username:</p>
				<input type="number" placeholder="Enter Username" name="username">   
			<p>password:</p>
				<input type="password" placeholder="Enter Password" name="password">
				
<br>
<br>
				<input type="submit" value="add" name="lecturers">
				
                
				</div>
								
				</form>
		</div>
		
</body>


</head>

</html>

<?php include("includes/footer.php");?>