<?php
	session_start();
	$i = 0;
	$login = "";
	$passwd = "";
	foreach($_GET as $key => $value)
	{
		if ($key == "login"  || $key == "passwd" || $key == "submit")
			$i++;
	}
	if ($i == 3)
	{
		$_SESSION['login'] = $_GET["login"];
		$_SESSION['passwd'] = $_GET["passwd"];
		$login = $_SESSION['login'];
		$passwd = $_SESSION['passwd'];
	}
	else
	{
		if ((isset($_SESSION['login']) && $_SESSION['passwd']))
		{
			$login = $_SESSION['login'];
			$passwd = $_SESSION['passwd'];
		}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<form  action="index.php">
Identifiant: <input type="text" name="login" value="<?php echo $login ?>" />
<br/>
Mot de passe: <input  type="password" name="passwd" value="<?php echo $passwd ?>" />
<input type="submit" name="submit" value="OK" />
</form>
</body>
</html>
