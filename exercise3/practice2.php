<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercise3\Practice2 by PHP</title>
</head>
<body>

<?php

// works
if ((include 'mynames.php') == 'OK') {
    echo 'OK';
    echo "</br>";
}

echo '<hr />';

  $weekdays = array(
"Неделя", "Понеделик", "Вторник", "Сряда", "Четвъртък", "Петък", "Събота"
);

$weekdays[0]='Неделя';
$weekdays[1]='Понеделик';
$weekdays[2]='Вторник';
$weekdays[3]='Сряда';
$weekdays[4]='Четвъртък';
$weekdays[5]='Петък';
$weekdays[6]='Събота';

echo "I love these days of the week: " .$weekdays[3].'<br />' .$weekdays[6];

echo '<hr />';


$weekdays = array("Неделя", "Понеделик", "Вторник", "Сряда", "Четвъртък", "Петък", "Събота");
$arrlength = count($weekdays);

for($day = 0; $day <  $arrlength; $day++) {
     echo $weekdays[$day];
     echo "<br>";
}

echo '<hr />';


$weekdays = array("0"=>"Неделя", "1"=>"Понеделик", "2"=>"Вторник", 
	"3"=>"Сряда", "4"=>"Четвъртък", "5"=>"Петък", "6"=>"Събота",);

foreach($weekdays as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo '<hr />';

$weekdays = array("Неделя", "Понеделик", "Вторник", 
	"Сряда", "Четвъртък", "Петък", "Събота",);
$arrlength = count($weekdays);

foreach($weekdays as $x) {

	$x = mb_strtoupper($x, 'utf-8');
    echo " Value=" .$x;
    echo "<br>";    
}

echo '<hr />';

$prices = array("banana"=>"1.60","apple"=>"1.00","kiwi"=>"1.20");

$prices[0] =  '"banana"=>"1.60"';
$prices[1] =  '"apple"=>"1.00"';
$prices[2] =  '"kiwi"=>"1.20"';

echo "I like fruits" .$prices[0] . "," .$prices[1] . "," .$prices[2] . ".";

echo '<hr />';

$prices = array("banana"=>"1.60","apple"=>"1.00","kiwi"=>"1.20");

foreach($prices as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    if($x_value < 10) {
 		echo " Разпродажба";
 	}
 	echo "<br>";
}

echo '<hr />';

$cars = array(); 
array_push($cars, "BMW", "Lada");

foreach($cars as $var=> $var_value) {
echo "Key= " .$var .", Value= " .$var_value;
echo "<br>";
}

echo '<hr />';

 $carprices = array ();
 array_push($carprices, "BMW=>300 000", "Lada=>4 500", "Mercedes=>270 000");

 foreach($carprices as $var=> $var_value) {
	echo "Key= " .$var .", Value= " .$var_value;
	echo "<br>";
}

echo '<hr />';













?>

</body>
</html>