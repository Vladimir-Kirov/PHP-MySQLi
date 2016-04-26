<?php

include 'config.php';

$user_id = $_GET['user_id'];

$read = 'SELECT username, email, phone FROM email_users WHERE user_id='.$user_id;

$result = mysqli_query($connect, $read);

// За откриване на грешка
/*if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}*/

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD - Read</title>
		<style>
			a {
				text-decoration: none;
			}
	
		</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="row">
				<h3>PHP Read</h3>
			</div>
			<section>
				<label for="username">Име:</label>
				<p id="username"><?php echo $row['username']; ?></p>
			</section>
			<section>
				<label for="email">Email:</label>
				<p id="email"><?php echo $row['email']; ?></p>
			</section>
			<section>
				<label id="phone">Phone:</label>
				<p id="phone"><?php echo $row['phone']; ?></p>
			</section>

		</div>
		<!--<?php /*
			echo $row['username'] .'<br />';
			echo $row['email'] . '<br />' ;
			echo $row['phone'] . '<br />'; */
		?>-->
		<button><a href="index.php">Back</a></button>
	</body>
</html>