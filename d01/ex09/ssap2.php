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

	function tri_bulle_insen(&$tableau)
	{
		$taille = count($tableau);
		for($i = 1; $i < $taille; $i++)
		{
			for($j = 0; $j < $taille - 1; $j++)
			{
				if(strtolower($tableau[$j+1]) < strtolower($tableau[$j]))
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

	function get_full_argv($argv)
	{
		if (isset($argv[1]))
		{
			$i = 1;
			$k = 0;
			$out_av = array();
			while (isset($argv[$i]))
			{
				$tmp = ft_split($argv[$i]);
				$j = 0;
				while (isset($tmp[$j]))
				{
					$out_av[$k] = $tmp[$j];
					$j++;
					$k++;
				}
				$i++;
			}
		}
		return $out_av;
	}

	function main($argv)
	{
		$ag = get_full_argv($argv);
		$alpha = array();
		$numeric = array();
		$other = array();
		$i = 0;
		$a = 0;
		$n = 0;
		$o = 0;
		while (isset($ag[$i]))
		{
			if (is_numeric($ag[$i]) == true)
			{
				$numeric[$n] = $ag[$i];
				$n++;
			}
			else
			{
				if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $ag[$i]))
				{
					$other[$o] = $ag[$i];
					$o++;
				}
				else
				{
					$alpha[$a] = $ag[$i];
					$a++;
				}
			}
			$i++;
		}
		tri_bulle($numeric);
		tri_bulle($other);
		tri_bulle_insen($alpha);
		$i = 0;
		while (isset($alpha[$i]))
		{
			echo $alpha[$i]."\n";
			$i++;
		}
		$i = 0;
		$output = "";
		while (isset($numeric[$i]))
		{
			$output = $numeric[$i]."\n".$output;
			$i++;
		}
		echo $output;
		$i = 0;
		while (isset($other[$i]))
		{
			echo $other[$i]."\n";
			$i++;
		}
	}

	main($argv);
?>