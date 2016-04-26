<?php
	require_once '../mysqli_connect.php';
	include 'drawTable.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP CRUD</title>

	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
	<body>

	<div class="container">	
		<div class="row">
			<h3>PHP Phonebook CRUD</h3>
		</div>
		<div class="row">
			<p><a class="btn btn-primary" href="create.php">Create</a></p>
				<?php
				if (isset($error)) {
					echo $error;
				} else {
					//echo '<p>Connection successful</p>';
					$sql = 'SELECT id, firstname, lastname, phone FROM contacts';
					if ($result = $db->query($sql)) {
						$nrows = $result->num_rows;
						if (!$nrows) {
							echo '<p>No contacts found</p>';
						} else {
							echo '<p>Found ' . $nrows . ' contacts</p>';
							while ($row = $result->fetch_assoc()) {
								$contacts[] = $row;
							}
							//print_r($contacts);
							echo drawTable($contacts);
						}
						$result->close();
					} else {
						echo 'Wrong query';
					}

					$db->close();
				}
				?>
		</div><!-- /row -->
	</div><!-- /container -->	
	</body>
</html>