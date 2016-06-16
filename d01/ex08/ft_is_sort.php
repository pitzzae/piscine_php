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

	function ft_is_sort($tab)
	{
		$tmp = $tab;
		tri_bulle($tmp);
		$i = 0;
		$is_sort = true;
		while (isset($tab[$i]))
		{
			if ($tab[$i] != $tmp[$i])
				$is_sort = false;
			$i++;
		}
		return $is_sort;
	}
?>