<?php

function drawtable($arr) {
	$tbl = '<table border="1">';

	foreach ($arr as $k =>$tblrow) {
		$tbl .= '<tr>';
		$tbl .= '<td>' . $tblrow['id'] .'</td>';
		$tbl .= '<td>' . $tblrow['firstname'] .'</td>';
		$tbl .= '<td>' . $tblrow['lastname'] .'</td>';
		$tbl .= '<td>' . $tblrow['phone'] .'</td>';
		$tbl .= '</tr>';
	}
	$tbl .= '</table>';

	return $tbl;
}


?>