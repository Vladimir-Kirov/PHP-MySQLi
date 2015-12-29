

<?
include 'newsdata.php';

function news($newsarray) {
	$str = " ";
	
$str='<div style="width:450px;padding-bottom:5px;padding-left:10px;background:#C2DFFF">';
foreach($newsarray as $value) {
//$str.='<a href="http://mitak.uchenici.bg/news/images/thumbs/black.jpg">'
	//."<img src={$value['big image link']}/>".'</a>';

 $str.= "<style>img {float:left;margin-right:20px;padding-top:5px;width:100px;height:80px;}</style>"
            .$value['big image link'];
                      

$str.="<h3>{$value['title']}</h3>";
 $str.="<h5>{$value['datepub']}</h5>";
$str.= "<h5>{$value['content']}</h5>" ."<br/>";
	
	} 
	
	return $str;
	//print_r($newsarray);
}
news($newsdata);
?>



