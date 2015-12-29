<?php
  include 'budget2014.php';
  include 'printbudget1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/> 
	<title>printBudget2014</title>
	<style type="text/css">
	.mon{
   	color:black;
   }

	
	</style>
</head>
<body>
<?php

  echo printBudget($budget2014, $head, $budget1, $budget2);
?>

</body>
</html>