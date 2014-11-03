
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- redir301_redirections
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `redir301_redirections`;

CREATE TABLE `redir301_redirections`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `pattern` VARCHAR(255) NOT NULL,
    `target` VARCHAR(255) NOT NULL,
    `triggered` INTEGER,
    `triggered_first` DATETIME,
    `triggered_last` DATETIME,
    `active` TINYINT NOT NULL,
    `created_on` DATETIME,
    `updated_on` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
