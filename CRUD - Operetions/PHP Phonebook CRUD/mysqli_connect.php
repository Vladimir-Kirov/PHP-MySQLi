<?php

//Connect to MySQL using mysqli object oriented interface

require_once __DIR__.'/config.php';

$db = new mysqli($host, $username, $password, $dbname);

if ($db->connect_error) {
	$error = $db->connect_error;
	//echo $error;
} else {
	$db->set_charset('utf8');
	//echo 'Success';
}







?>