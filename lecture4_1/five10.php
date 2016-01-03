<?php

include 'budget2013.php';
include 'printbudget.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/> 
	<title>printBudget2013</title>
	<style type="text/css">
	</style>
</head>
<body>
<?php

echo printBudget($budget2013);
?>
</body>
</html>