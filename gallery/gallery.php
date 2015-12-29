<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8"/>
 <title>Gallery</title>
 <style type="text/css">
 
   
 </style>

</head>
<body>


<?php
include 'gallerydata.php';

function galleryShow($arr) {
$str='';
foreach ($arr as $value) {
	$str .='<div><a href="images/autumn01.jpg"><img src="images/thumbs/autumn01.jpg" style="margin-right:20px;'.$value['0'].'"/><span>Есенен пейзаж 1</span></a></div>';
	$str .='<div><a href="images/autumn02.jpg"><img src="images/thumbs/autumn02.jpg" style="margin-right:20px;'.$value['1'].'"/><span>Есенен пейзаж 2</span></a></div>';
	$str .='<div><a href="images/sand01.jpg"><img src="images/thumbs/sand01.jpg" style="margin-right:20px;'.$value['2'].'"/><span>Златни пясъци</span></a></div>';
	$str .='<div><a href="images/seaside01.jpg"><img src="images/thumbs/seaside01.jpg" style="margin-right:20px;'.$value['3'].'"/><span>Море 2014 год.</span></a></div>';
	$str .='<div><a href="images/snow01.jpg"><img src="images/thumbs/snow01.jpg" style="margin-right:20px;'.$value['4'].'"/><span>Зимна пейзаж</span></a></div>';
	$str .='<div><a href="images/snow02.jpg"><img src="images/thumbs/snow02.jpg" style="margin-right:20px;'.$value['5'].'"/><span>Зимна приказка</span></a></div>'; 
	$str .='<div><a href="images/spring01.jpg"><img src="images/thumbs/spring01.jpg" style="margin-right:20px;'.$value['6'].'"/></a><span>Пролетта и цветя</span></div>'; 
	$str .='<div><a href="images/spring02.jpg"><img src="images/thumbs/spring02.jpg" style="margin-right:20px;'.$value['7'].'"/></a><span>Пролетна разходка</span></div>';

  }
   return $str;

}


//echo galleryShow($galleryimages);
?>

</body>
</html>
