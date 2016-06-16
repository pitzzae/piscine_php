#!/usr/bin/php
<?php
	if (isset($argv[1]))
	{
		$tmp = explode(" ", $argv[1]);
		$i = 0;
		$output = "";
		while (isset($tmp[$i]))
		{
			if ($tmp[$i] != "")
				$output = $output.$tmp[$i]." ";
			$i++;
		}
		$output = substr($output, 0, strlen($output) - 1);
		$output = $output."\n";
		echo $output;
	}
?>