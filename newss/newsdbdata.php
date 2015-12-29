<?php
require 'config.php';

/*$newsdatadb = array();
$newsdatadb[] = array(
   'id' => '1',
   'title' => 'Новина 1',
   'content' => 'Текст на новина',
   'datepub' => '2014-12-22',
   'images' => 'images/news01.jpg',
   'thumbs' => 'images/thumbs/news01.jpg',
	);

function db_get_res($h,$u,$p,$dbn, $query)  {*/
$connection = mysqli_connect($host,$username,$password,$dbname);

if($connection === false) {
echo "Cannot connect to DB";
}
else {
   mysqli_set_charset($connection,'utf-8');
   $query = 'SELECT * from news';
   $result = mysqli_query($connection, $query);
   $newsdatadb = array();
   while ($row = mysqli_fetch_assoc($result)) {
       $newsdatadb[] = $row;
   }
}
/*foreach ($rows as $row) {
	echo $row['id'] . '' .$row['title'] . '<br>'; /*принтира текста от таблиците в колоните*/
	/*echo $row['content'] .'</br>';
}*/
		/*echo '<pre>';
		print_r($rows);
		echo '</pre>';*/

  /* if(is_array($rows)) return $rows;
   else return $error;
} //end function
//////////////
$myquery = 'SELECT * FROM news';
//$myquery2 = 'SELECT COUNT(*) AS cnt FROM news'; //връща масив с 1 ред,където има брой на редове на таблицата
$contacts = db_get_res($host,$username,$password,$dbname, $myquery);
 if(is_array($contacts)) {
 	    echo '<pre>';
		print_r($contacts);
		echo '</pre>';
 } else {
 	echo $contacts;
 }*/
?>