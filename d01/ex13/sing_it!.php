#!/usr/bin/php
<?php
	if (isset($argv[1]))
	{
		if ($argv[1] == "mais pourquoi cette demo ?")
			echo "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
		if ($argv[1] == "mais pourquoi cette chanson ?")
			echo "Parce que Kwame a des enfants\n";
		if ($argv[1] == "vraiment ?")
		{
			$i = rand(0,1);
			if ($i == 0)
				echo "Nan c'est parce que c'est le premier avril\n";
			else
				echo "Oui il a vraiment des enfants\n";
		}
	}
?>