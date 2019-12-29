
<?php
	include('login.php'); // Include Login Script

	/*if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');

	}	
	
*/
	
	include("includes/header.php");	
?>

<html>
<head>

<title>  login </title>
	<meta charset="UTF-8">


</head>
    

<body background="images/book.jpg">
<div class="loginbox" align = "center">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method = "post">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn"type ="submit" name = "submit">
							Sign in
						</button>
					</div>

				
				</form>
			</div>
		</div>
	</div>
		


	
	</body>

</html>