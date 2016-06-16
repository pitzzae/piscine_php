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
		sort($output);
		return $output;
	}
?>