DROP TABLE IF EXISTS `player_scores`;

CREATE TABLE `player_scores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `score` INT,
  `created_at` DATE,
  `updated_at` DATE,
  PRIMARY KEY (`id`)
);

INSERT INTO `player_scores` (name, score) VALUES (‘Petter’,748),(’Sara’,834),(‘Lucas’,563);
