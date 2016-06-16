<?php
if (!$_SERVER['PHP_AUTH_USER'])
	{
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	exit;
	}
	else
	{
		if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
		{
			$img = "<img src= data:image/png;base64,".base64_encode(file_get_contents("../img/42.png")).">";
			echo "<html><body>\n";
			echo "Bonjour Zaz<br />\n";
			echo $img."\n";
			echo "</body></html>\n";
		}
	}
?>
