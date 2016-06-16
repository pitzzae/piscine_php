SELECT UPPER(`AB`.`nom`) AS 'NOM', `FP`.`prenom` AS `prenom`, `AB`.`prix`
	FROM `db_gtorresa`.`abonnement` `AB`, `db_gtorresa`.`fiche_personne` `FP`, `db_gtorresa`.`membre` `MB`
	WHERE `MB`.`id_membre` = `FP`.`id_perso` AND  `AB`.`id_abo` = `MB`.`id_abo`
	ORDER BY `AB`.`prix` DESC