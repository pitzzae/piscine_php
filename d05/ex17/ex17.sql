SELECT COUNT(*) as `nb_abo`, CAST((SUM(`AB`.`prix`) / COUNT(*)) AS SIGNED) as `moy_abo`, (SUM(`duree_abo`) % 2) as `ft`
	FROM `db_gtorresa`.`membre` `MB`, `db_gtorresa`.`abonnement` `AB`
	WHERE `MB`.`id_abo` = `AB`.`id_abo`
	GROUP BY `AB`.`id_abo`