<?php

include 'config.php';

if(isset($_POST['sub']) )
{

	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$insert = "INSERT INTO email_users(username, email, phone) 
				VALUES('$username', '$email', '$phone')";

	$query = mysqli_query($connect, $insert);

	header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD - Create</title>
		<style>
			input {
				margin-top: 4px;
				display: block;
			}
			
			button {
				margin: 4px;
			}

			a {
				text-decoration: none;
			}

		</style>
	</head>
	<body>
		<div class="row">
			PHP Create
		</div>
		<form method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="email" name="email" placeholder="Enter your email address">
			<input type="text" name="phone" placeholder="Enter your phone number">

			<input type="submit" name="sub" value="Запиши">
			<button><a href="index.php">Back</a></button>
		</form>
	</body>
</html>