#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$ary = explode(" ", $str);
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

	if (isset($argv[1]))
	{
		$tmp = ft_split($argv[1]);
		$output = "";
		$i = 1;
		while (isset($tmp[$i]))
		{
			$output = $output.$tmp[$i]." ";
			$i++;
		}
		$output = $output.$tmp[0]."\n";
		echo $output;
	}
?>