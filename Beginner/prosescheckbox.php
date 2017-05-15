<?php
	if(ISSET($_POST['pilih']))
	{
		echo "Club favorit anda adalah :<br>";
		if(ISSET($_POST['club01']))
		{
			echo "+ " .$_POST['club01']. "<br>";
		}
		if(ISSET($_POST['club02']))
		{
			echo "+ " .$_POST['club02']. "<br>";
		}
		if(ISSET($_POST['club03']))
		{
			echo "+ " .$_POST['club03']. "<br>";
		}
		if(ISSET($_POST['club04']))
		{
			echo "+ " .$_POST['club04']. "<br>";
		}
	}
?>