#!/usr/bin/php
<?php
	function ft_split($str, $av)
	{
		$output = array();
		if (strlen($av) > 0)
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
		}
		
		return $output;
	}

	function get_int_name($argv)
	{
		$name = -1;
		if (strtolower($argv) == "nom")
			$name = 0;
		else if (strtolower($argv) == "prenom")
			$name = 1;
		else if (strtolower($argv) == "mail")
			$name = 2;
		else if (strtolower($argv) == "ip")
			$name = 3;
		else if (strtolower($argv) == "pseudo")
			$name = 4;
		return $name;
	}

	if (count($argv) == 3 && file_exists($argv[1]) && ($argv[2] == "nom" || $argv[2] == "prenom" || $argv[2] == "mail" || $argv[2] == "IP" || $argv[2] == "pseudo"))
	{
		$cvs = file_get_contents($argv[1]);
		$name = get_int_name($argv[2]);
		$tmp = ft_split($cvs, "\n");
		echo "Entrez votre commande: ";
		while ($line = fgets(STDIN))
		{
			$line3 = str_replace(".", " ", $line);
			$line_tmp = ft_split($line3, " ");
			$output = "";
			$print = false;
			if ($line_tmp[0] == "echo")
			{
				$i = 1;
				while ($line_tmp[$i])
				{
					$tmp3 = substr($line_tmp[$i], strpos($line_tmp[$i], "$") + 1, strpos($line_tmp[$i], "[") - strpos($line_tmp[$i], "$") - 1);
					$name1 =  get_int_name($tmp3);
					$test_name = substr($line_tmp[$i], strpos($line_tmp[$i], "'") + 1, strpos($line_tmp[$i], "]") - strpos($line_tmp[$i], "'") - 2);
					if ($name1 != -1)
					{
						foreach ($tmp as $key => $value)
						{
							$tmp2 = ft_split($tmp[$key], ";");
							if ($tmp2[$name] == $test_name)
								$output .= $tmp2[$name1]." ";
						}
					}
					else
					{
						$output .= str_replace(';', "", str_replace('"', "", str_replace('\n', "\n", $line_tmp[$i])))." ";
					}
					$i++;
				}
				$output = substr($output, 0, strlen($output) - 2);
				$tmp_print = ft_split($output, " ");
				foreach ($tmp_print as $key => $value)
				{
					if ($value != "echo")
					{
						if ($key < count($tmp_print) - 1)
							echo $value." ";
						else
							echo $value;
					}
				}
				$print = true;
			}
			else if (($pos = strpos($line, 'print_r(explode("')) != 1)
			{
				$line = substr($line, $pos + 17, strlen($line) - ($pos + 17));
				$line = str_replace("echo", "", $line);
				$line_tmp = ft_split($line, " ");
				$output = "";
				$i = 1;
				while ($line_tmp[$i])
				{
					$tmp3 = substr($line_tmp[$i], strpos($line_tmp[$i], "$") + 1, strpos($line_tmp[$i], "[") - strpos($line_tmp[$i], "$") - 1);
					$name1 =  get_int_name($tmp3);
					$test_name = substr($line_tmp[$i], strpos($line_tmp[$i], "'") + 1, strpos($line_tmp[$i], "]") - strpos($line_tmp[$i], "'") - 2);
					if ($name1 != -1)
					{
						foreach ($tmp as $key => $value)
						{
							$tmp2 = ft_split($tmp[$key], ";");
							if ($tmp2[$name] == $test_name)
								$output .= $tmp2[$name1]." ";
						}
					}
					else
					{
						$output .= str_replace(';', "", str_replace('"', "", str_replace('\n', "\n", $line_tmp[$i])))." ";
					}
					$i++;
				}
				$output = substr($output, 0, strlen($output) - 2);
				$tmp_print = ft_split($output, substr($line, 0, strpos($line, '"')));
				if (count($tmp_print) > 0)
				{
					$print = true;
					print_r($tmp_print);
				}
			}
			if ($print == false)
				echo "PHP Parse error:  syntax error, unexpected T_STRING in [....]\n";
			echo "Entrez votre commande: ";
		}
		
	}
?>