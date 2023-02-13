DROP TABLE IF EXISTS `player_scores`;

CREATE TABLE `player_scores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `score` INT,
  `created_at` DATE NULL,
  `updated_at` DATE NULL,
  PRIMARY KEY (`id`)
);