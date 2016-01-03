<?php

include 'budgetData.php';
include 'printBudget.php';
?>

<! DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/> 
	<title>printBudget</title>
	<style type="text/css">
	</style>
</head>
<body>
<?php

echo printBudget($budget);
?>
</body>
</html>