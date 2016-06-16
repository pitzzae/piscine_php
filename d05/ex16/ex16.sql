SELECT COUNT(*)
	FROM `db_gtorresa`.`historique_membre`
	WHERE (`date` > '2006-10-30 00:00:00' AND `date` < '2007-07-27 00:00:00')
		OR (MONTH(`date`) = 12 AND DAY(`date`) = 24)