<?php

include 'config.php';

$user_id = $_POST['hidden']; // <input type="hidden" name="hidden" > от edit.php файл

$update = 'UPDATE email_users SET username="'.$_POST['username'].'", email="'.$_POST['email'].'", phone="'.$_POST['phone'].'" 
WHERE user_id='.$user_id;

$data = mysqli_query($connect, $update);

header("Location: index.php");

?>