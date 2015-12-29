<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8"/>
 <title>Add news to database</title>
 

</head>
<body>
<?php
require 'config.php';

$connection = mysqli_connect($host, $username, $password, $dbname);
mysqli_set_charset ( $connection, 'utf8');

//echo $_POST['fname'];

$title = $_POST['tname'];
$content = $_POST['contname'];
$date = $_POST['datepub'];
$img = $_POST['imgname'];
$thumb = $_POST['thumname'];

//echo $title,$content,$date,$img,$thumb;
//echo $thumbs;

$query = "INSERT INTO news VALUES (null,'$title','$content','$date','$img','$thumb')";
$result = mysqli_query($connection,$query);
if($result === false) {
    echo 'No row is inserted';
} else {
    echo 'One row is inserted';
}
?>
<br/>
<a href="index.php">Вижте всички новини</a><br/>
</body>
</html>