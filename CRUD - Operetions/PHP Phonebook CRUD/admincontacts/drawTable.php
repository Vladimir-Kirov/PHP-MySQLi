<?php

function drawtable($arr) {
	$tbl = '<table class="table table-striped table-bordered table-hover">';

	foreach ($arr as $k =>$tblrow) {
		$tbl .= '<tr>';
		$tbl .= '<td>' . $tblrow['id'] .'</td>';
		$tbl .= '<td>' . $tblrow['firstname'] .'</td>';
		$tbl .= '<td>' . $tblrow['lastname'] .'</td>';
		$tbl .= '<td>' . $tblrow['phone'] .'</td>';
		$tbl .= '<td>' . '<a class="btn btn-info" href=read.php?id=' . $tblrow['id'] .'>Read</a></td>';
		$tbl .= '<td>' . '<a class="btn btn-success" href=update.php?id=' . $tblrow['id'] .'>Update</a></td>';
		$tbl .= '<td>' . '<a class="btn btn-danger" href=delete.php?id=' . $tblrow['id'] .'>Delete</a></td>';
		$tbl .= '</tr>';
	}
	$tbl .= '</table>';

	return $tbl;
}


?>