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

	if (count($argv) == 2)
	{
		$outadd = ft_split($argv[1], "+");
		$outsou = ft_split($argv[1], "-");
		$outmul = ft_split($argv[1], "*");
		$outdiv = ft_split($argv[1], "/");
		$outmod = ft_split($argv[1], "%");
		$out = "";
		if (count($outadd) == 2 && count($outsou) == 1 && count($outmul) == 1 && count($outdiv) == 1 && count($outmod) == 1 && is_numeric(trim($outadd[0])) && is_numeric(trim($outadd[1])))
		{
			$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($outadd[0]))));
			$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($outadd[1]))));
			$out = $a + $b . "\n";
		}
		if (count($outadd) == 1 && count($outsou) == 2 && count($outmul) == 1 && count($outdiv) == 1 && count($outmod) == 1 && is_numeric(trim($outsou[0])) && is_numeric(trim($outsou[1])))
		{
			$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($outsou[0]))));
			$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($outsou[1]))));
			$out = $a - $b . "\n";
		}
		if (count($outadd) == 1 && count($outsou) == 1 && count($outmul) == 2 && count($outdiv) == 1 && count($outmod) == 1 && is_numeric(trim($outmul[0])) && is_numeric(trim($outmul[1])))
		{
			$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($outmul[0]))));
			$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($outmul[1]))));
			$out = $a * $b . "\n";
		}
		if (count($outadd) == 1 && count($outsou) == 1 && count($outmul) == 1 && count($outdiv) == 2 && count($outmod) == 1 && is_numeric(trim($outdiv[0])) && is_numeric(trim($outdiv[1])))
		{
			$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($outdiv[0]))));
			$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($outdiv[1]))));
			$out = $a / $b . "\n";
		}
		if (count($outadd) == 1 && count($outsou) == 1 && count($outmul) == 1 && count($outdiv) == 1 && count($outmod) == 2 && is_numeric(trim($outmod[0])) && is_numeric(trim($outmod[1])))
		{
			$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($outmod[0]))));
			$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($outmod[1]))));
			$out = $a % $b . "\n";
		}
		if ($out != "")
			echo $out;
		else
			echo "Syntax Error\n";
	}
	else
	{
		echo "Incorrect Parameters\n";
	}
?>