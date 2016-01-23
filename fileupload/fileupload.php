
<meta charset="utf-8" />
<form enctype="multipart/from-data" method="POST">
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <input name="userfile" type="file" />
  <input type="submit" value="Send File" />	
</form>

<?php
echo "One file: ".ini_get('upload_max_filesize') ."<br /> \n";
echo "POST size: ".ini_get('post_max_size') ."<br /> \n";

echo '<xmp>';
var_dump($_FILES);
echo '</xmp>';

if (
	isset($_FILES['userfile']) && 
	is_uploaded_file($_FILES['userfile']['tmp_name']) &&
	$_FILES['userfile'] ['error'] == 0 && 
	$_FILES['userfile'] ['size'] > 0) {
		if(move_uploaded_file(
			$_FILES['userfile']['tmp_name'], 
			getcwd().'/'.basename($_FILES['userfile']['name'])
		)) {
			//echo '<img src="./'.basename($_FILES['userfile']['name']).'" />';
			$data = file_get_contents(getcwd().'/'.basename($_FILES['userfile']['name']));
		    $base64 = 'date:image/jpeg;base64,' .base64_encode($data);
		    echo '<img src="'.$base64.'" />'; 
		} else {
			echo 'Неуспешно качване!';
		}
				
        } else {
	        echo 'Не може да се качи!';
		}


?>