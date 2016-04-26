<?php

include 'config.php'; // require / require_once

$query = mysqli_query($connect, 'SELECT * FROM email_users');


echo '<table border="2" style="border-collapse: collapse;">';

while($data = mysqli_fetch_array($query) ) {

	echo '<tr>';
	echo '<td>'.$data['user_id'].'</td>';
	echo '<td>'.$data['username'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['phone'].'</td>';
	echo '<td><a href="read.php?user_id='.$data['user_id'].'">Read</a></td>';
	echo '<td><a href="edit.php?user_id='.$data['user_id'].'">Update</a></td>';
	echo '<td><a href="delete.php?user_id='.$data['user_id'].'">Delete</a></td>';
	echo '</tr>';
}
echo '<td colspan="7"><button><a href="insert.php">Create</a></button></td>';
echo '</table>';

?>


