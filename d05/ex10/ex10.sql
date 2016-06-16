SELECT `F`.`titre` as `Titre`, `F`.`resum` as `Resume`, `F`.`annee_prod`
	FROM `db_gtorresa`.`film` `F`, `db_gtorresa`.`genre` `G`
	WHERE `F`.`id_genre` = `G`.`id_genre` AND `G`.`nom` = 'erotic'
	ORDER BY `F`.`annee_prod` DESC