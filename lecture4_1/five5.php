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
 if ($i===0) {
 $str .='Heading '; 
} elseif ($i===4) {
 $str .='Footer '; 
} else {
  $str .="";
}
$str .=   $i . ' ' . $a[$i] . '<br/>'."\n";
}
echo $str;

?>



