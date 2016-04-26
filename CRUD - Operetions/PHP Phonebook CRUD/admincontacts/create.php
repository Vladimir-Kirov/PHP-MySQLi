<?php
	require_once '../mysqli_connect.php';
	//$_POST
	if (!empty($_POST)) {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['tel'];


//Check user input, sanitize 
	$sql  = "INSERT INTO contacts(firstname, lastname, phone)";
	$sql .= "VALUES ('$first', '$last', '$phone')";
	$db->query($sql);

		if (isset($error)) {
			echo $error;
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
				<h3>PHP Phonebook Create</h3>
			</div>
			<div class="row">
				<form method="post" action="">
					<div class="form-group">
						<label for="first">Име:</label>
						<input type="text" class="form-control" name="first" id="first" /><br>		
					</div>		
					<div class="form-group">
						<label for="last">Фамилия:</label>
						<input type="text" class="form-control" name="last" id="last" /><br>
					</div>
					<div class="form-group">
						<label for="tel">Телефон:</label>
						<input type="text" class="form-control" name="tel" id="tel"><br>	
					</div>
					<div class="form-actions">
						<input type="submit" class="btn btn-success" value="Изпрати">
						<input type="reset" class="btn" value="Изчисти">
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
				</form>
			</div><!-- /row -->
		</div><!-- /container -->	
	</body>
</html>