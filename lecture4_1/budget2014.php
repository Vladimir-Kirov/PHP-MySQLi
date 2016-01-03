<?php
$filepointer = fopen('budget2014.csv', 'r');

$budget1 = array();
$budget1[] = array(
    'Месец' => 'Месец',
    'Приходи' => 'Приходи',
    'Разходи' => 'Разходи', 
    'Печалба' => 'Печалба',
    );
$budget2[] = array(
    'Месец' => 'Общо',
    'Приходи' => '4000',
    'Разходи' => '1200', 
    'Печалба' => '2800',
    );

$head = fgetcsv($filepointer, 1000, ';'); // чете първи ред от файла 
while ($row = fgetcsv($filepointer, 1000, ';')) { 
	$budget2014[] = array_combine($head, $row);
	
}


/*
echo '<pre>';
print_r($budget1);
print_r($budget2014);
echo '</pre>';
*/
?>