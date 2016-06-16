#!/usr/bin/php
<?php
	function tri_bulle(&$tableau)
	{
		$taille = count($tableau);
		for($i = 1; $i < $taille; $i++)
		{
			for($j = 0; $j < $taille - 1; $j++)
			{
				if($tableau[$j+1] < $tableau[$j])
				{
					$temp = $tableau[$j+1];
					$tableau[$j+1] = $tableau[$j];
					$tableau[$j] = $temp;
				}
			}
		}
	}

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
		$newargv = array();
		$output = "";
		$i = 1;
		while (isset($argv[$i]))
		{
			$output = $output." ".$argv[$i];
			$i++;
		}
		$newargv = ft_split($output);
		tri_bulle($newargv);
		$i = 0;
		while (isset($newargv[$i]))
		{
			echo $newargv[$i]."\n";
			$i++;
		}
	}
?>