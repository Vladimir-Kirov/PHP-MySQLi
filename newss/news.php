
<?php
/*include 'newsdata.php';

function news($newsarray) {
    $str = " ";
    
$str='<div style="width:450px;background:#C2DFFF">';
foreach($newsarray as $value) {
//$str.='<a href="http://mitak.uchenici.bg/news/images/thumbs/black.jpg">'
    //."<img src={$value['big image link']}/>".'</a>';

 $str.= "<style>img {float:left;}</style>"
            .$value['big image link'];
                      

$str.="<h3>{$value['title']}</h3>";
 $str.="<h5>{$value['datepub']}</h5>";
$str.=$value['content'] ."<br/>";
    
    } 
    
    return $str;
    //print_r($newsarray);
}
news($newsdata);*/
?>
<?php

include 'newsdbdata.php';
function news($newsdatadb) 
{

$str="";
$str .= '<div style="width:450px;padding-bottom:5px;background:#C2DFFF">
<div style="margin-left:15px;background:#C2DFFF;">';
 if (is_array($newsdatadb)) {
foreach($newsdatadb as $value)
{
$str .= '<a href="' . $value['thumbs'] . '">';
$str .= '<img src="images/brain.jpg' . $value['images'] 
. '" style="float:left;margin-right:20px;padding-top:5px;width:100px;height:80px;"/>';
$str .= '</a>';
$str .= "<h3>" . $value['title'] . "</h3>";
$str .= $value['datepub'].$value['content'];
  }
}
$str .= '</div>';
$str .= '</div>';

return $str;

}

?>
