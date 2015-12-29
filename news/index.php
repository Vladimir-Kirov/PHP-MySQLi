<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title>News</title>		
 <style type="text/css">
   .lightblue {
   	width:450px; 
   	background:#C2DFFF;

   }

 </style>
</head>
<body>
   <?php 
    include 'news.php';
    echo news($newsdata);
   ?>
</body>
</html>