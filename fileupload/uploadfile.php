<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>UploadFile</title>
</head>
<body>
	<form enctype="multipart/form-data" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="POST" />
		<input type="file" name="file" />
		<input type="submit" value="Send File" />
	</form>

</body>
</html>

<?php

include "config.php";

echo "One File: ".ini_get('max_upload_filesize')."<br/>\n";
echo "POST File: ".ini_get('post_max_size')."<br/>\n";

echo "<xmp>";
var_dump($_FILES);
echo "</xmp>";

if(
	isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name']) &&
	$_FILES['file']['error'] == 0 &&
	$_FILES['file']['size'] > 0) {

	$uploaded_file = getcwd().'/'.basename($_FILES['file']['name']);
	if (!move_uploaded_file(
		$_FILES['file']['tmp_name'], $uploaded_file))
	{
		echo "cant move file from ten dir";
		exit;
	}
}

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error)
{
	echo $mysqli->connect_error;
	exit;
}

//////////////// четене на файл

    if($handle = fopen($uploaded_file, 'r') !== FALSE)
    {
	   while (($data = fgetcsv($handle, 1000, '\t')) !== FALSE ) 
	   {
		$query = 'INSERT INTO firms SET
		    product_code = \'' . $mysqli->real_escape_string($data[0]) . '\',
		    variant_supplier = \'' . $mysqli->real_escape_string($data[1]) . '\',
		    variant_internal = \'' . $mysqli->real_escape_string($data[2]) . '\',
		    price_net = \'' . $mysqli->real_escape_string($data[3]) . '\',
		    price_customer = \'' . $mysqli->real_escape_string($data[4]) . '\'';
	    if ($mysqli->query($query) !== TRUE)	
	       {
			echo 'cant insert into db';
			exit;
	       }
	       fclose($handle);
 		}

        mysql_close($mysqli);
	}



