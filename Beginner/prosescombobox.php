<?php
	if(isset($_POST['pilih']))
	{
		$pemograman = $_POST['pemograman'];
		echo "Bahasa Pemograman favorite anda adalah : <font color='blue'><b>$pemograman</b></font>";
	}
?>