INSERT INTO `db_gtorresa`.`ft_table`(`login`, `date_de_creation`, `group`) 
	SELECT `nom` as `login`, `date_naissance` as `date_de_creation`, 'other' as `group` FROM `db_gtorresa`.`fiche_personne`
	WHERE `nom` LIKE '%a%' AND char_length(`nom`) < 9
	ORDER BY `fiche_personne`.`nom` ASC LIMIT 10;