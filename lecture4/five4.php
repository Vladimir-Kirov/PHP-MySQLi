<?php
$a = array (
0 => 'a',
1 => 'b',
2 => 'c',
3 => 'd',
4 => 'e'
);
$c = count($a);
$str = ''; // empty string single quotes
for ($i=0; $i<$c; $i++) {
$str .= $i . ' ' . $a[$i] . '<br/>'."\n";

}
echo $str;



$c = count($a);
$str = 'Колко на брой са елементите на масива? ';
$str .=   $c . ' ' . '<br/>'."\n";


echo $str;



$str = 'Какъв е индекса на първия елемент? ';
$str .=  array_keys($a)[0] . '<br/>'."\n";
echo $str;



$c = count($a);
$str = 'Какъв е индекса на последния елемент? ';
$str .=  array_pop(array_keys($a)) . '<br/>'."\n";


echo $str;



/* отпечатва всичко, което е конкатенирано към началния празен стринг в процеса на
обработка на масива в цикъла for.*/

?>