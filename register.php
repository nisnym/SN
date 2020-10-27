<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Welcome to SN</title>
</head>
<body>
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
					


	</form>

</body>
</html>