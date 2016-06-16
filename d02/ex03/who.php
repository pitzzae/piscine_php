#!/usr/bin/php
<?php
	date_default_timezone_set('CET');
	
	function tri_bulle(&$tableau)
	{
		$taille = count($tableau);
		for($i = 1; $i < $taille; $i++)
		{
			for($j = 0; $j < $taille - 1; $j++)
			{
				if($tableau[$j+1]['time'] < $tableau[$j]['time'])
				{
					$temp = $tableau[$j+1];
					$tableau[$j+1] = $tableau[$j];
					$tableau[$j] = $temp;
				}
			}
		}
	}

	function get_char_day($day)
	{
		if (is_numeric($day))
		{
			$int_day = intval($day);
			if ($int_day == 0)
				return "Dim";
			if ($int_day == 1)
				return "Lun";
			if ($int_day == 2)
				return "Mar";
			if ($int_day == 3)
				return "Mer";
			if ($int_day == 4)
				return "Jeu";
			if ($int_day == 5)
				return "Ven";
			if ($int_day == 6)
				return "Sam";
		}
		else
			return "";
	}

	function ft_who()
	{
		$file = fopen("/var/run/utmpx", "r");
		$i = 0;
		while ($buff = fread($file, 628))
		{
			$unpack = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $buff);
			if ($unpack["type"] == 7)
				$tmp[$i++] = array("line" => $unpack["line"], "user" => $unpack["user"], "time" => $unpack["time1"]);
		}
		tri_bulle($tmp);
		$i = 0;
		foreach ($tmp as $key => $value)
		{
			$output = $value["user"]."\t".$value["line"]."\t\t".get_char_day(date("w", $value["time"]))." ".date("j H:i", $value["time"]);
			$test = preg_filter ("/[^[:print:]]/", "", $output);
			echo $output."\n";
			$i++;
		}
	}

	ft_who();
?>