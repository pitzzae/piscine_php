<?php
	session_start();
	
	function ft_split($str, $av)
	{
		$ary = explode($av, $str);
		$output = array();
		$i = 0;
		$j = 0;
		while (isset($ary[$i]))
		{
			if ($ary[$i] != "")
			{
				$output[$j] = $ary[$i];
				$j++;
			}
			$i++;
		}
		sort($output);
		return $output;
	}
	
	$i = 0;
	foreach($_POST as $key => $value)
	{
		if (($key == "login" && $value != "") || ($key == "oldpw" && $value != "") || ($key == "newpw" && $value != "") || ($key == "submit" && $value == "OK"))
			$i++;
	}
	$account_list = array();
	$is_set = false;
	if (file_exists("../private") == false)
	{
		mkdir("../private", 0777, true);
	}
	if (file_exists("../private/passwd") == false)
		file_put_contents("../private/passwd", serialize($account_list));
	$file = file_get_contents("../private/passwd");
	if ($file != "")
	{
		$account_list = unserialize($file);
		$key_tmp = 0;
		foreach($account_list as $key => $value)
		{
			$key_tmp = $key;
			$tmp_passwd = hash("whirlpool", hash("whirlpool", "salutlavache").$_POST["oldpw"]);
			if ($value["login"] == $_POST["login"] && $value["passwd"] == $tmp_passwd)
			{
				$hash_tmp = hash("whirlpool", "salutlavache");
				$account_list[$key_tmp]["passwd"] = hash("whirlpool", $hash_tmp.$_POST["newpw"]);
				file_put_contents("../private/passwd", serialize($account_list));
				$is_set = true;
			}
		}
	}
	if ($i == 4 && $is_set == true)
	{
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>

