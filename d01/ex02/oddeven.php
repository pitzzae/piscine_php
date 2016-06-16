#!/usr/bin/php
<?php
	echo "Entrez un nombre: ";
	while ($line = fgets(STDIN))
	{
		$line = trim($line);
		if (strlen($line) == strlen(strval(intval($line))) && is_numeric($line))
		{
			if (intval($line) % 2 == 0)
				echo "Le chiffre ".$line." est Pair\n";
			else
				echo "Le chiffre ".$line." est Impair\n";
		}
		else
			echo "'".$line."' n'est pas un chiffre\n";
		echo "Entrez un nombre: ";
	}
?>