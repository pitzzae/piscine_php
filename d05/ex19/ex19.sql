SELECT ABS(DATEDIFF(MIN(`date`), MAX(`date`))) AS `uptime`
	FROM `db_gtorresa`.`historique_membre`;