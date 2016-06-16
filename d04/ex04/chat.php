<?php
	session_start();
	if ($_SESSION["loggued_on_user"] != "")
	{
		if (file_exists("../private") == false)
		{
			mkdir("../private", 0777, true);
		}
		if (file_exists("../private/chat") == false)
			file_put_contents("../private/chat", "");
		$file = unserialize(file_get_contents("../private/chat"));
		foreach($file as $key => $value)
			echo "[".date("H:i" ,$value['time'])."] <b>".$value['login']."</b>: ".$value['msg']."<br/>";
	}
?>