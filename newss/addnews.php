<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8">
 <title>Contacts</title>
 <style type="text/css">
 
   
 </style>

</head>
<body>
<h3>Добавяне на новина</h3>
<form method="post" action="insertnews.php">
<p>Заглавие на новината: <input style="border-radius:5px; background-color:silver; width:350px; height:40px" type="text" name="tname"/></p>
<p>Съдържание на новината: <input style="border-radius:5px; background-color:silver; width:350px; height:80px" type="text" name="contname"/></p>
<p>Дата на публикуване: <input style="border-radius:5px; background-color:silver; width:350px; height:40px" type="text" name="datepub" value="<?php echo date('Y-m-d'); ?>"/></p>
<p>Голямо изображение: <input style="border-radius:5px; background-color:silver; width:350px; height:40px" 
	type="text" name="imgname" /></p>
<p>Малко изображение: <input 
	style="border-radius:5px; background-color:silver; width:350px; height:40px" type="text" name="thumname" /></p>

<p> <input type="submit" name="submit" value="Добави" style="background-color:green;border-radius:5px;
	width:100px; height:40px" />
<input type="reset" value="Изчисти" style="background-color:gray;border-radius:5px;
width:100px; height:40px"/>

</form>

</body>
</html>