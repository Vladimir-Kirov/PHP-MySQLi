<?php

$egn = "8804284362";

$year = substr("$egn",0,2);
$month = substr("$egn",2,2);
$day = substr("$egn",4,2);
function OddOrEven($egn) {
	if($egn[8] % 2 == 0)
	{
		echo "числото е четно"."<br/>";
	}
	else 
	{
		echo "числото е нечетно"."<br/>";
	}

}
echo "$year". "."."$month"."."."$day"."<br/>";
echo OddOrEven($egn);
?>