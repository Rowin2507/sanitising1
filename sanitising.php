<?php


if(isset($_REQUEST["RowinSchmidt"]))
{
	$number = filter_var($_REQUEST["RowinSchmidt"], FILTER_SANITIZE_NUMBER_INT);
	$number=substr($number,0,9);// niet langer dan 9.
	echo "BSN: ".$number."<br>";
}


?>
