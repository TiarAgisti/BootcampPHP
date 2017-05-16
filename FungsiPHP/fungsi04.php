<!-- Program passing by value dalam fungsi. -->
<?php
	function tambah_string ($str) 
	{
		$str = $str . ", Tangerang";
		return $str;
	}
	//
	$str = "STMIK INSAN PEMBANGUNAN";
	echo "\$str = $str<br>";
	echo tambah_string ($str). "<br>";
	echo "\$str = $str<br>";
?>