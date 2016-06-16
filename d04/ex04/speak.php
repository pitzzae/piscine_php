<?php
	session_start();
	$i = 0;
	foreach($_POST as $key => $value)
	{
		if (($key == "msg" && $value != '') || ($key == "submit" && $value == 'OK'))
			$i++;
	}
	
	if ($_SESSION["loggued_on_user"] != "" && $i == 2)
	{
		if (file_exists("../private") == false)
		{
			mkdir("../private", 0777, true);
		}
		if (file_exists("../private/chat") == false)
			file_put_contents("../private/chat", "");
		$file = unserialize(file_get_contents("../private/chat"));
		$file[] = array("login" => $_SESSION["loggued_on_user"], "time" => time(), "msg" => $_POST['msg']);
		file_put_contents("../private/chat", serialize($file));
		echo "<script langage=\"javascript\">top.frames['chat'].location = 'chat.php';</script>";
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<form  action="speak.php"  method="post">
Message: <input type="text" name="msg" value="" style="width: 80%;"/>
<input type="submit" name="submit" value="OK"/>
</form>
</body>
</html>