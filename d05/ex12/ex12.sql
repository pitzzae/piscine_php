SELECT `nom`, `prenom` FROM `db_gtorresa`.`fiche_personne`
	WHERE `nom` LIKE '%-%' OR `prenom` LIKE '%-%'
	ORDER BY `nom` ASC, `prenom` ASC