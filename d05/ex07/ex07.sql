SELECT `titre`, `resum` FROM `db_gtorresa`.`film` WHERE `titre` LIKE '%42%' OR `resum` LIKE '%42%' ORDER BY `film`.`duree_min` ASC