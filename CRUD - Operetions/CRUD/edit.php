<?php

include 'config.php';

$user_id = $_GET['user_id'];

$query = mysqli_query( $connect, 'SELECT * FROM email_users WHERE user_id='.$user_id);

$data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD Update</title>
		<style>
			input {
				display: block;
				margin-top: 4px;
			}
		</style>
	</head>
	<body>
		<div class="row">
			<h3>PHP Update</h3>
		</div>
		<form method="POST" action="update.php">
			<input type="text" name="username" value="<?php echo $data['username']; ?>">
			<input type="text" name="email" value="<?php echo $data['email']; ?>">
			<input type="text" name="phone" value="<?php echo $data['phone']; ?>">

			<input type="hidden" name="hidden" value="<?php echo $data['user_id']; ?>">
			<input type="submit" name="sub" value="Update">
		</form>
	</body>
</html>