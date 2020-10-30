<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title>Welcome to SN</title>
	<link rel="stylesheet" type="text/css" href="assests/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assests/js/register.js"></script>

</head>
<body>
	<?php 
		if (isset($_POST['reg_button'])) {
			echo '
				<script>
					$(document).ready(function(){
						$("#first").hide();
						$("#second").show();	
					});

				</script>
			';
		}

	 ?>


<div class = "wrapper">

	<div class="login_box">	
		<div class="login_header">
		<h1>SN</h1>
		Login or signup
		</div>
		<div id="first">
			<form action="register.php" method="POST">
				 
				 <input type="email" name="log_email" placeholder="Email
				 "value="<?php
					if(isset($_SESSION['log_email'])){
						echo $_SESSION['log_email'];
					}

				?>" required="">
				 
				 <br>
				 
				 <input type="password" name="log_password" placeholder="password">
				 <br>
				 <input type="submit" name="login_button" value="login">
				<br>
				<?php 
					if (in_array("Email or password was incorrect<br>", $error_array)) {
						echo "Email or password was incorrect<br>";
					}
				 ?>
				 <br>
				 <a href="#" id= "signup" class="signup">Need an account register here.</a>

			</form>
		</div>
		<div id="second">
			<form action="register.php" method = "POST">
				<input type="text" name="reg_fname" placeholder="first name" value="<?php
					if(isset($_SESSION['reg_fname'])){
						echo $_SESSION['reg_fname'];
					}

				?>" required="">
				<br>
				<?php 
					if (in_array("Your First name bw 2 to 25<br>", $error_array)) {
						echo "Your First name bw 2 to 25<br>";
					}

				?>
				<input type="text" name="reg_lname" placeholder="last name" value="<?php
					if(isset($_SESSION['reg_lname'])){
						echo $_SESSION['reg_lname'];
					}

				?>"required="">
				<br>
				<?php 
					if (in_array("Your last name bw 2 to 25 <br>", $error_array)) {
						echo "Your last name bw 2 to 25 <br>";
					}

				?>
				<input type="email" name="reg_email" placeholder="email" value="<?php
					if(isset($_SESSION['reg_email'])){
						echo $_SESSION['reg_email'];
					}

				?>"required="">
				<br>
				<?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
				else if (in_array("Invalid email format <br>", $error_array)) echo "Invalid email format <br>"; 
				else if (in_array("Emails not match <br>", $error_array)) echo "Emails not match <br>"; ?>


				<input type="email" name="reg_email2" placeholder="email confirm " value="<?php
					if(isset($_SESSION['reg_email2'])){
						echo $_SESSION['reg_email2'];
					}

				?>"required="">
				<br>
				<?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
				else if (in_array("Invalid email format <br>", $error_array)) echo "Invalid email format <br>"; 
				else if (in_array("Emails not match <br>", $error_array)) echo "Emails not match <br>"; ?>
			
				<input type="password" name="reg_password" placeholder="password" required="">
				<br>

				<?php if (in_array("Your pass is not same <br>", $error_array)) echo "Your pass is not same <br>";
				else if (in_array("Your pass can contain eng or num <br>", $error_array)) echo "Your pass can contain eng or num <br>"; 
				else if (in_array("Your pass must be 6-30<br>", $error_array)) echo "Your pass must be 6-30<br>"; ?>

				<input type="password" name="reg_password2" placeholder="c password" required="">
				<br>
				<input type="submit" name="reg_button" value="Register">
				<br>
				<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>

				<a href="#" id= "signin" class="signin">Already have an account? login here</a>
		
			</form>
		</div>
	</div>
</div>

</body>
</html>