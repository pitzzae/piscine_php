<?php
	session_start();
	include("./auth.php");
	
	$i = 0;
	foreach($_GET as $key => $value)
	{
		if ($key == "login" || $key == "passwd")
			$i++;
	}
	if ($i == 2)
	{
		if (auth($_GET["login"], $_GET["passwd"]) == true)
		{
			$_SESSION['loggued_on_user'] = $_GET["login"];
			echo "OK\n";
		}
		else
		{
			$_SESSION['loggued_on_user'] = "";
			echo "ERROR\n";
		}
	}
?>