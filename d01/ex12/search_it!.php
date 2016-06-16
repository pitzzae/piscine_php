#!/usr/bin/php
<?php
	function ft_split($str, $char)
	{
		$ary = explode($char, $str);
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

	if (count($argv) > 2)
	{
		$out = "";
		foreach ($argv as $key => $value)
		{
			if ($key > 1)
			{
				$tmp = ft_split($value, ":");
				if ($tmp[0] == $argv[1])
					$out = $tmp[1];
			}
		}
		if ($out != "")
			echo $out."\n";
	}
?>