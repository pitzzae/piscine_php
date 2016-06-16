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

	function tri_bulle(&$tableau, &$tableau2)
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
					$temp2 = $tableau2[$j+1];
					$tableau2[$j+1] = $tableau2[$j];
					$tableau2[$j] = $temp2;
				}
			}
		}
	}

	function moyenne()
	{
		$pass = 0;
		$note = 0;
		$line = trim(fgets(STDIN));
		while ($line = trim(fgets(STDIN)))
		{
			$tmp = $ary = explode(";", $line);
			if ($tmp[2] != "moulinette" && $tmp[1] != "")
			{
				$pass++;
				$note = $note + intval($tmp[1]);
			}
		}
		echo ($note / $pass)."\n";
	}

	function moyenne_user()
	{
		$ary_tmp = array();
		$ary_tmp2 = array();
		$line = trim(fgets(STDIN));
		while ($line = trim(fgets(STDIN)))
		{
			
			$tmp = $ary = explode(";", $line);
			if ($tmp[2] != "moulinette" && $tmp[1] != "")
			{
				if (isset($ary_tmp[$tmp[0]]))
				{
					$ary_tmp[$tmp[0]] += intval($tmp[1]);
					$ary_tmp2[$tmp[0]]++;
				}
				else
				{
					$ary_tmp[$tmp[0]] = intval($tmp[1]);
					$ary_tmp2[$tmp[0]] = 1;
				}
			}
		}
		$tmp1 = array();
		$tmp2 = array();
		$i = 0;
		foreach ($ary_tmp as $key => $value)
		{
		 	$tmp1[$i] = $key;
		 	$tmp2[$i] = $value / $ary_tmp2[$key];
		 	$i++;
		}
		tri_bulle($tmp1, $tmp2);
		foreach ($tmp1 as $key => $value)
		{
		 	if ($tmp2[$key] > 0)
		 		echo $value.":".$tmp2[$key]."\n";
		}
	}

	function ecart_moulinette()
	{
		$ary_tmp = array();
		$ary_tmp2 = array();
		$ary_tmp3 = array();
		$line = trim(fgets(STDIN));
		while ($line = trim(fgets(STDIN)))
		{
			$tmp = $ary = explode(";", $line);
			if ($tmp[1] != "")
			{
				if ($tmp[2] != "moulinette")
				{
					if (isset($ary_tmp[$tmp[0]]))
					{
						$ary_tmp[$tmp[0]] += intval($tmp[1]);
						$ary_tmp2[$tmp[0]]++;
					}
					else
					{
						$ary_tmp[$tmp[0]] = intval($tmp[1]);
						$ary_tmp2[$tmp[0]] = 1;
					}
				}
				else
				{
					$ary_tmp3[$tmp[0]] = intval($tmp[1]);
				}
			}
			$i++;
		}
		$tmp1 = array();
		$tmp2 = array();
		$i = 0;
		foreach ($ary_tmp as $key => $value)
		{
		 	$tmp1[$i] = $key;
		 	$tmp2[$i] = $value / $ary_tmp2[$key] - $ary_tmp3[$key];
		 	$i++;
		}
		tri_bulle($tmp1, $tmp2);
		$i = 0;
		while ($tmp1[$i])
		{
		 	echo $tmp1[$i].":".$tmp2[$i]."\n";
		 	$i++;
		}
	}

	if (isset($argv[1]))
	{
		if ($argv[1] == "moyenne")
			moyenne();
		else if ($argv[1] == "moyenne_user")
			moyenne_user();
		else if ($argv[1] == "ecart_moulinette")
			ecart_moulinette();
	}
?>