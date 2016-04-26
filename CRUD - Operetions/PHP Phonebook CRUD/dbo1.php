<?php
   require_once 'mysqli_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>MySQLi Connection</title>
</head>
<body>
<h1>Connecting with MySQLi</h1>
<?php
	if (isset($error)) {
		echo $error;
	} else {
		echo '<p>Connection successful</p>';
	}

	$db->close();
?>

</body>
</html>