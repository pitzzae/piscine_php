#!/usr/bin/php
<?php
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
		return $output;
	}

	if ($argv[1] && strpos($argv[1], "http://") != -1)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $argv[1]);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		$tab = ft_split($result, "\n");
		$url_img = array();
		$i = 0;
		foreach ($tab as $key => $value)
		{
			if (($pos = strpos($value, "<img")) != "")
			{
				$tmp = substr($value, $pos, strlen($value) - $pos);
				$pos2 =  strpos($tmp, 'src="');
				$tmp2 =  substr($tmp, $pos2 + 5, strlen($tmp) - $pos2 + 5);
				$pos2 =  strpos($tmp2, '"');
				$tmp3 =  substr($tmp2, 0, $pos2);
				$url_img[$i++] = $tmp3;
			}
		}
		$i = 0;
		while($url_img[$i])
		{
			$tmp = substr($argv[1], strpos($argv[1], "http://") + 7, strlen($argv[1]) - strpos($argv[1], "http://") + 7);
			if (!file_exists("./".$tmp))
				mkdir("./".$tmp, 0700);
			$name = ft_split($url_img[$i], "/");
			$len = count($name);
			shell_exec("curl -s ".$url_img[$i]." > ./".$tmp."/".$name[$len - 1]);
			$i++;
		}
	}
?>