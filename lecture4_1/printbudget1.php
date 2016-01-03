<head>
 <meta charset="utf-8">
 <title>printBudget2014</title>
 <style type="text/css">
 .mon{
   	color:black;
   }

 </style>

</head>
<body>
 <?php


function printBudget($arr, $budget2014, $budget1,$budget2) {

$str= '<table border="1">'."\n";

    foreach ($budget1 as $key => $value) {
    	$str .= "\t".'<thead>'.'<tr>';

$str .= '<th class="mon">' . $value['Месец'] . '</th>';
$str .='<th class="mon">' . $value['Приходи'] . '</th>';
$str .= '<th class="mon">' . $value['Разходи'] . '</th>';
$str .= '<th class="mon">' . $value['Печалба'] . '</th>';
$str .= '</tr>'.'</thead>'."\n";

$str .= "\t".'<tr>';
    }

	foreach ($arr as $key=>$value) {
	   
$str .= '<td>' . $value['Месец'] . '</td>';
$str .='<td>' . $value['Приходи'] . '</td>';
$str .= '<td>' . $value['Разходи'] . '</td>';
$str .= '<td>' . $value['Печалба'] . '</td>';
$str .= '</tr>'."\n";
}
/*с този цикъл се отпечатва само долния ред с $budget2*/
/*foreach ($budget2 as $key=>$value) { 
	   
$str .= '<td>' . $value['Месец'] . '</td>';
$str .='<td>' . $value['Приходи'] . '</td>';
$str .= '<td>' . $value['Разходи'] . '</td>';
$str .= '<td>' . $value['Печалба'] . '</td>';
$str .= '</tr>'."\n";
}*/

$str .= '</table>'."\n";
return $str;

}
//echo printTable($a);
?>





</body>
</html>