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

	if ($argv[1])
	{
		$i = 0;
		$tmp = ft_split(trim($argv[1]));
		while ($tmp[$i])
			echo $tmp[$i++]." ";
		echo "\n";
	}
?>