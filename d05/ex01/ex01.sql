CREATE TABLE IF NOT EXISTS `ft_table` (
	`id` int(11) NOT NULL,
	`login` varchar(8) NOT NULL,
	`group` enum('staff','student','other') NOT NULL,
	`date_de_creation` datetime NOT NULL
);