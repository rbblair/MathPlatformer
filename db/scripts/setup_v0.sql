-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for math_sucks
DROP DATABASE IF EXISTS `math_sucks`;
CREATE DATABASE IF NOT EXISTS `math_sucks` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `math_sucks`;

-- Dumping structure for table math_sucks.answers
DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `answer_data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.answers_has_tasks
DROP TABLE IF EXISTS `answers_has_tasks`;
CREATE TABLE IF NOT EXISTS `answers_has_tasks` (
  `task_id` int(10) unsigned NOT NULL,
  `answer_id` int(10) unsigned NOT NULL,
  `is_correct` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`task_id`,`answer_id`),
  KEY `fk_answer_id` (`answer_id`),
  KEY `fk_task_id` (`task_id`),
  CONSTRAINT `fk_answer_id` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`),
  CONSTRAINT `fk_task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.avatars
DROP TABLE IF EXISTS `avatars`;
CREATE TABLE IF NOT EXISTS `avatars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar_data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.scores
DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `user_id` int(10) unsigned NOT NULL,
  `task_id` int(10) unsigned NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`task_id`),
  KEY `fk_scores_task_id` (`task_id`),
  KEY `fk_scores_user_id` (`user_id`),
  CONSTRAINT `fk_scores_task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  CONSTRAINT `fk_scores_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.tasks
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_difficulties_id` int(10) unsigned NOT NULL,
  `task` varchar(256) NOT NULL,
  `creation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `task` (`task`),
  KEY `fk_task_difficulties_id` (`task_difficulties_id`),
  CONSTRAINT `fk_task_difficulties_id` FOREIGN KEY (`task_difficulties_id`) REFERENCES `task_difficulties` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.task_difficulties
DROP TABLE IF EXISTS `task_difficulties`;
CREATE TABLE IF NOT EXISTS `task_difficulties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
-- Dumping structure for table math_sucks.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar_id` int(10) unsigned NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `fk_avatar_id` (`avatar_id`),
  CONSTRAINT `fk_avatar_id` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
