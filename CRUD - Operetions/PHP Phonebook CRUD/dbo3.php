<?php

require_once 'mysqli_connect.php';
include 'drawTable.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>MySQLi Connectio</title>
</head>
<body>
<h1>Connecting with MySQLi</h1>
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

</body>
</html>