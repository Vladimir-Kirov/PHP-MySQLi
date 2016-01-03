<?php

function printArray($arr) {
$str = '';
foreach ($arr as $key=>$value) {
$str .= $key . ' '. $value . '<br/>'."\n";
}
return $str;
}


?>
