<?php
	require_once '../mysqli_connect.php';

	$id = (int) $_GET['id'];

	$sql = "DELETE FROM contacts WHERE id = ". $id;
		/*$db->query($sql);
		echo $db->affected_rows;*/

		if (isset($error)) {
			echo $error;
		} else {
// echo '<p>Connection successfull</p>;
		if ($db->query($sql)) {
			header("Location: index.php");
		} else {
			echo 'Wrong query';
		}

		$db->close();
}		
?>