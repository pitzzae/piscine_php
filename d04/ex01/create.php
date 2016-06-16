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
		if (($key == "login" && $value != "") || ($key == "passwd" && $value != "") || ($key == "submit" && $value == "OK"))
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
			if ($value["login"] == $_POST["login"])
				$is_set = true;
		}
		if ($is_set == false && $_POST["login"] != "" && $_POST["passwd"] != "")
		{
			$account_list[$key_tmp + 1]["login"] = $_POST["login"];
			$hash_tmp = hash("whirlpool", "salutlavache");
			$account_list[$key_tmp + 1]["passwd"] = hash("whirlpool", $hash_tmp.$_POST["passwd"]);
			file_put_contents("../private/passwd", serialize($account_list));
		}
	}
	if ($i == 3 && $is_set == false)
	{
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>

