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

	if (strpos($argv[1], ".html") && strlen($argv[1]) > 5 )
	{
		$page = file_get_contents($argv[1]);
		$line = ft_split($page, "\n");
		$i = 0;
		while ($line[$i])
		{
			$pos = strpos($line[$i], "<a");
			if ($pos)
			{
				$newline = substr($line[$i], 0, $pos);
				$tmp = substr($line[$i], $pos, strlen($line[$i]) - $pos);
				$pos2 = strpos($tmp, 'title="');
				if ($pos2)
				{
					$tmp2 = substr($tmp, 0, $pos2 + 7);
					$newline = $newline.$tmp2;
					$tmp3 = substr($line[$i], $pos + $pos2 + 7, strlen($line[$i]) - ($pos2 + 7 + $pos));
					$pos3 = strpos($tmp3, '"');
					$tmp4 = substr($tmp3, 0, $pos3);
					$tmp5 = substr($tmp3, $pos3, strlen($tmp3));
					$newline = $newline.strtoupper($tmp4);
					$newline = $newline.$tmp5;
				}
				$line[$i] = $newline;
				$newline = substr($line[$i], 0, $pos);
				$tmp = substr($line[$i], $pos, strlen($line[$i]) - $pos);
				$pos2 = strpos($tmp, '>');
				if ($pos2)
				{
					$tmp2 = substr($tmp, 0, $pos2);
					$newline = $newline.$tmp2;
					$tmp3 = substr($line[$i], $pos + $pos2, strlen($line[$i]) - ($pos2 + $pos));
					$pos3 = strpos($tmp3, '<');
					$tmp4 = substr($tmp3, 0, $pos3);
					$tmp5 = substr($tmp3, $pos3, strlen($tmp3));
					$newline = $newline.strtoupper($tmp4);
					$newline = $newline.$tmp5;
				}
				$line[$i] = $newline;		
			}
			echo $line[$i]."\n";	
			$i++;
		}
	}
?>