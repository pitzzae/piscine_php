SELECT `film`.`id_genre`, `genre`.`nom` as `nom genre`, `distrib`.`id_distrib`, `distrib`.`nom` as `nom distrib`, `film`.`titre` AS `titre film`
	FROM `film` INNER JOIN `genre` ON `genre`.`id_genre` = `film`.`id_genre` INNER JOIN `distrib` ON (`distrib`.`id_distrib` = `film`.`id_distrib`)
	WHERE `genre`.`id_genre` > 3 AND `genre`.`id_genre` < 9