#!/usr/bin/php
<?php
	date_default_timezone_set(UTC);
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

	function get_string_day($day)
	{
		if ($day == "Lundi")
			return true;
		if ($day == "Mardi")
			return true;
		if ($day == "Mercredi")
			return true;
		if ($day == "Jeudi")
			return true;
		if ($day == "Vendredi")
			return true;
		if ($day == "Samedi")
			return true;
		if ($day == "Dimanche")
			return true;
		return false;
	}

	function get_string_mon($mon)
	{
		if ($mon == "Janvier")
			return 1;
		if ($mon == "Fevrier")
			return 2;
		if ($mon == "Mars")
			return 3;
		if ($mon == "Avril")
			return 4;
		if ($mon == "Mai")
			return 5;
		if ($mon == "Juin")
			return 6;
		if ($mon == "Juillet")
			return 7;
		if ($mon == "Aout")
			return 8;
		if ($mon == "Septembre")
			return 9;
		if ($mon == "Octrobre")
			return 10;
		if ($mon == "Novembre")
			return 11;
		if ($mon == "Decembre")
			return 12;
		return 0;
	}

	if ($argv[1])
	{
		$tmp = ft_split(trim($argv[1]), " ");
		$mon = get_string_mon($tmp[2]);
		$day = intval($tmp[1]);
		$year = intval($tmp[3]);
		$full_hour = ft_split($tmp[4], ":");
		$hour = intval($full_hour[0]);
		$minu = intval($full_hour[1]);
		$seco = intval($full_hour[2]);
		$timestamp = $seco;
		$timestamp += $minu * 60;
		$timestamp += $hour * 3600;
		if (get_string_day($tmp[0]) == true && $mon >= 0 && $day >= 0 && $day < 31 && count($full_hour) == 3 && is_numeric($full_hour[0]) && is_numeric($full_hour[1]) && is_numeric($full_hour[2]))
		{
			$hour = intval($full_hour[0]);
			$minu = intval($full_hour[1]);
			$seco = intval($full_hour[2]);
			echo mktime($hour, $minu, $seco, $mon, $day, $year, 1)."\n";
		}
		else
		{
			echo "Wrong Format\n";
		}
	}
?>