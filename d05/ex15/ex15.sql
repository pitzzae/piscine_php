SELECT REVERSE(SUBSTRING(`telephone`,2,CHAR_LENGTH(`telephone`))) as `enohpelet` FROM `db_gtorresa`.`distrib` WHERE SUBSTRING(`telephone`,1,2) = '05';