<?php
	session_start();
	include("./auth.php");
	
	$i = 0;
	foreach($_POST as $key => $value)
	{
		if ($key == "login" || $key == "passwd")
			$i++;
	}
	if ($i == 2)
	{
		if (auth($_POST["login"], $_POST["passwd"]) == true)
		{
			$_SESSION['loggued_on_user'] = $_POST["login"];
			echo '<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe><iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>';
		}
		else
		{
			$_SESSION['loggued_on_user'] = "";
			echo "ERROR\n";
		}
	}
?>