<?php
$filepointer = fopen('budget2013.csv','r');

$budget2013 = array();
$head = fgetcsv($filepointer); // чете първи ред от файла 
while ($row = fgetcsv($filepointer)) { 
	$budget2013[] = array_combine($head, $row);
	
}
fclose($filepointer);

/*
echo '<pre>';
print_r($budget2013);
echo '</pre>';
*/

?>