<?php
	$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75,"Budi" => 85);
	echo $arrNilai['Ani']; //80
	echo "<br>" .$arrNilai['Otim']; //90
	$arrNilai = array();
	$arrNilai['Ami'] = 80;
	$arrNilai['Asma'] = 95;
	$arrNilai['Sri'] = 77;
	echo "<br>" .$arrNilai['Asma']; //95
	echo "<br>" .$arrNilai['Ami']; //80
?>