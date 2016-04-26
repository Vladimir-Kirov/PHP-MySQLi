<?php

include 'config.php';

$user_id = (int) $_GET['user_id'];

$delete = 'DELETE FROM email_users WHERE user_id='.$user_id;

$query = mysqli_query($connect, $delete);

header('Location: index.php');

?>