<?php

$egn = "8804284362";

$year = substr("$egn",0,2);
$month = substr("$egn",2,2);
$day = substr("$egn",4,2);
function OddOrEven($egn) {
	if($egn[8] % 2 == 0)
	{
		echo "Предпоследното числото от ЕГН-то е четно"."<br/>";
	}
	else 
	{
		echo "Предпоследното числото от ЕГН-то е нечетно"."<br/>";
	}

}
echo "$year". "."."$month"."."."$day"."<br/>";
echo OddOrEven($egn);
?>


<!DOCTYPE html>
<html>
<head>
    <title>ЕГН</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="Vladimir Kirov">
    <style type="text/css">
    <!--
        body    { background: #A3CEE7; font: 11pt Verdana,Arial,Helvetica,sans-serif; }
        a       { color: #2020E0; text-decoration: underline; padding:3px; border:1px solid #A3CEE7; }
        a:hover { background:#cdcdff; text-decoration: underline; border:1px solid blue; }
        h2      { margin:0px; }
        h3      { margin-bottom:0px; }
        .result { background:#be93d7; padding:4px; }
        li.result { background:#be93d7; }
        form    { margin:0px; }
    -->
    </style>
</head>

<body>
<h2><b>Информация, проверка за единни граждански номера (ЕГН)</b></h2>

<p><b>Генерирай ЕГН<b/></p>

<?php
    $egn = preg_replace("/[^0-9]/","",@$_GET["egn"]);
    if (@$_GET["a"] == "check") {
        print "<p class=\"result\"><b><em>Информация за ЕГН:</em></b> ";
        print "$egn";
        print "</p>\n";
    }
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
    <input type="hidden" name="a" value="check">
    ЕГН <input type="text" size="10" maxlength="10" name="egn" value="<?=htmlspecialchars($egn)?>">
    <input type="submit" value=" Информация за ЕГН ">
</form>


</body>
</html>