<?php
	require_once '../mysqli_connect.php';
	//$_POST
	$id = (int) $_GET['id'];


	if (!empty($_POST)) {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['tel'];


//Check user input, sanitize 
	$sql  = "UPDATE contacts SET firstname = '$first', lastname = '$last', phone = '$phone' WHERE id = $id";
	$db->query($sql);

		if (isset($error)) {
			echo $error;
		}

		$db->close();

		header("Location: index.php");
	} else {
		// READ data
		$sql = 'SELECT firstname, lastname, phone FROM contacts WHERE id = '.$id;
		$result = $db->query($sql);
		$data = $result->fetch_assoc();
		$fnameR = $data['firstname'];
		$lnameR = $data['lastname'];
		$telephoneR = $data['phone'];

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
						<input type="text" class="form-control" name="first" id="first" value="<?php  echo (isset($fnameR)) ? $fnameR : '';?>" /><br>		
					</div>		
					<div class="form-group">
						<label for="last">Фамилия:</label>
						<input type="text" class="form-control" name="last" id="last" value="<?php  echo (isset($lnameR)) ? $lnameR : '';?>"  /><br>
					</div>
					<div class="form-group">
						<label for="tel">Телефон:</label>
						<input type="text" class="form-control" name="tel" id="tel" value="<?php  echo (isset($telephoneR)) ? $telephoneR : '';?>" /><br>	
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