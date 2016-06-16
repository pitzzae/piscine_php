<?php
	function auth($login, $passwd)
	{
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
				if ($value["login"] == $login && $value["passwd"] == hash("whirlpool", hash("whirlpool", "salutlavache").$passwd))
					$is_set = true;
			}
		}
		if ($is_set == true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>

