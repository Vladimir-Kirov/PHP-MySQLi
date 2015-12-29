<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8">
 <title>News</title>
 <style type="text/css">
   .lightblue {
   	width:450px; 
   	background:#C2DFFF;

   }

 </style>
</head>
<body>
<?
include 'news.php';
include 'newsdbdata.php';
//echo news($newsdata);
echo news($newsdatadb);



?>


</body>

</html>