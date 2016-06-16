SELECT MD5(REPLACE(CONCAT(`telephone`, '42'), '7', '9')) as 'ft5'
	FROM `db_gtorresa`.`distrib`
	WHERE `id_distrib` = 84