
<?php

$path  = getcwd(); /*взима текущата директория*/
$files = scandir($path);

// $galleryimages = array();
$galleryimages[] = array(

	'0' => 'images/thumbs/autumn01.jpg',
	'1' => 'images/thumbs/autumn02.jpg',
	'2' => 'images/thumbs/sand01.jpg',
	'3' => 'images/thumbs/seaside01.jpg',
	'4' => 'images/thumbs/snow01.jpg',
	'5' => 'images/thumbs/snow02.jpg',
	'6' => 'images/thumbs/spring01.jpg',
	'7' => 'images/thumbs/spring02.jpg',

	); 

/*foreach ($galleryimages as $key =>$values) {
  	
  	$str .=$values['0'].'</br>';
  	$str .=$values['1'].'</br>';
  	$str .=$values['2'].'</br>';
  	$str .=$values['3'].'</br>';
  	$str .=$values['4'].'</br>';
  	$str .=$values['5'].'</br>';
  	$str .=$values['6'].'</br>';
  	$str .=$values['7'].'</br>';
  	//echo $files .'</br>';
  };*/


/*
echo '<pre>';
print_r($galleryimages);
echo '</pre>';
*/
?>

