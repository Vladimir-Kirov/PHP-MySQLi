<?php

include 'arrdata.php';
include 'printarray.php';
?>
<! DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/> 
	<title>printArray</title>
	<style type="text/css">
	</style>
</head>
<body>

<?php
/**
 * prints values of an array as HTML table
 *
 * @param array $arr
 *
 * @return string
 */
function printTable($arr) {
$str = '<table border="1">'."\n";
foreach ($arr as $key=>$value) {
 $str .= "\t".'<tr>';
 $str .= '<td>'. $key . '</td>';
 $str .= '<td>' . $value . '</td>';
 $str .= '</tr>'."\n";
}
 $str .= '</table>'."\n";
return $str;
}


echo printTable($a);
?>
</body>
</html>