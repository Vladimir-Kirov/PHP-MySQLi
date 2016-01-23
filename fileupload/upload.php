<meta charset="utf-8" />
<title>FileUpload PHP</title>
<form enctype="multipart/form-data" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	<input name="userfile" type="file" />
	<input type="submit" value="Send File" />
</form>

<?php 
echo "One file: ".ini_get(UPLOAD_MAX_FILESIZE)."<br />\n";
echo "POST size: ".ini_get(POST_MAX_SIZE)."<br />\n";

echo "<xmp>";
var_dump($_FILES);
echo "</xmp>";

if(isset($_FILES['userfile']) && is_uploaded_file($_FILES['userfile']['tmp_name']) && 
	$_FILES['userfile']['error'] == 0 &&
	$_FILES['userfile']['size'] > 0) {
			if(move_uploaded_file(
				$_FILES['userfile']['name'], 
				getcwd().'/'.basename($_FILES['userfile']['name'])
					)) {
					echo '<img src="./'.basename($_FILES['userfile']['name']).'" />';
			   } else {
				  echo 'Неуспешно качване!';
			   }
				
} else {
	echo 'Не може да се качи!';
}



?>



