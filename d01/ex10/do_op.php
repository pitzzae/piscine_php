#!/usr/bin/php
<?php
	if (isset($argv[1]) && isset($argv[2]) && isset($argv[3]))
	{
		$a = intval(str_replace(" ", "",str_replace("\\t", "", trim($argv[1]))));
		$b = intval(str_replace(" ", "",str_replace("\\t", "", trim($argv[3]))));
		if (preg_match('/[+]/', $argv[2]))
		{
			echo $a + $b . "\n";
		}
		else if (preg_match('/[-]/', $argv[2]))
		{
			echo $a - $b . "\n";
		}
		else if (preg_match('/[*]/', $argv[2]))
		{
			echo $a * $b . "\n";
		}
		else if (preg_match('/[\/]/', $argv[2]))
		{
			echo $a / $b . "\n";
		}
		else if (preg_match('/[%]/', $argv[2]))
		{
			echo $a % $b . "\n";
		}
	}
	else
		echo "Incorrect Parameters\n";
?>