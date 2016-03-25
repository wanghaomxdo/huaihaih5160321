<?php
	$arr = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M');
	$id  = 99;//$_POST['id'];
	$i=rand(0,25);
	$var=sprintf("%03d", $id);
	$numbers = "P".$var.$arr[$i];
	echo $numbers;
?>