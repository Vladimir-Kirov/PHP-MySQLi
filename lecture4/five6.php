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
foreach ($a as $key => $value) {
 if ($key===0) {
 $str .='Heading '; 
} elseif ($key===4) {
 $str .='Footer '; 
} else {
  $str .="";
}
$str .=   $key . ' ' . $a[$key] . '<br/>'."\n";
}
echo $str;

?>