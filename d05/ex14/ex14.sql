SELECT `etage_salle` as `etage`, SUM(`nbr_siege`) as 'nb_sieges'
FROM `db_gtorresa`.`salle`
GROUP BY `etage_salle`
ORDER BY `nb_sieges` DESC