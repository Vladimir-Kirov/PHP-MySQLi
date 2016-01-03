<!DOCTYPE html>
<html> 
<head>
 <meta charset="utf-8">
 <title>Fruits Table</title>
 <style type="text/css">
 
   
 </style>

</head>
<body>

<?php

function printBudget($arr) {

$str = '<table border="1">'."\n";
    foreach ($arr as $key=>$value) {
 $str .= "\t".'<tr>';
 $str .= '<td>' . $value['month'] . '</td>';
 $str .= '<td>' . $value['revenue'] . '</td>';
 $str .= '<td>' . $value['cost'] . '</td>';
 $str .= '<td>' . $value['profit'] . '</td>';
 $str .= '</tr>'."\n";
 }
 $str .= '</table>'."\n";
 return $str;
}

?>
</table>




</body>
</html>
