<?php
	$link = mysqli_connect('203.155.18.105', 'root_agp', 'rootAdm1n', 'mobile_service');
	// Check connection
	if (mysqli_connect_errno($link))
  	{
  		echo "Failed to connect to MySQL: " .mysqli_connect_error();
  	}
	@mysqli_query($link, "SET NAMES utf8");
	mysqli_select_db($link,"mobile_service");
?>