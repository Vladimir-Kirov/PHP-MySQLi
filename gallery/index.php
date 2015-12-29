<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8">
 <title>Gallery</title>
 <link rel="stylesheet" href="style.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
	<script  defer src="script.js" ></script>
 <style type="text/css">
 
   
 </style>

</head>
<body>
	<section class="pagin"><a href=""><img src="images/thumbs/left.jpg"></a></section>
    <section class="pagin"><a href=""><img src="images/thumbs/right.jpg"></a></section>
 <?php
require 'gallery.php';
echo galleryShow($galleryimages);





?>


</body>
</html>