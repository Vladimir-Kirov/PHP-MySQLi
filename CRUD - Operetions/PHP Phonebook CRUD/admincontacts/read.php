<?php

require_once '../mysqli_connect.php';

	$id = (int) $_GET['id'];

	$sql = "SELECT firstname, lastname, phone FROM contacts WHERE id = ". $id;
		/*$db->query($sql);
		echo $db->affected_rows;*/

		if (isset($error)) {
			echo $error;
		} else {
// echo '<p>Connection successfull</p>;
		if ($result = $db->query($sql)) {
			$row = $result->fetch_assoc();
		} else {
			echo 'Wrong query';
		}

		$db->close();
}		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP CRUD</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">	
	<div class="row">
		<h3>PHP Phonebook Read</h3>
	</div>
	<div class="row">
		<?php
			echo $row['firstname'] . '</br>';
			echo $row['lastname'] . '</br>';
			echo $row['phone'] . '</br>';
		?>
		<a class="btn btn-default" href="index.php">Back</a>
	</div><!-- /row -->
</div><!-- /container -->	
</body>
</html>