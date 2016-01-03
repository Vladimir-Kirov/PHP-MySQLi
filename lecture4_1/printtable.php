
<?php
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
?>
