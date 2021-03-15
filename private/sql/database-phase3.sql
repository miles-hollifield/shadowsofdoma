-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2021 at 07:58 PM
-- Server version: 5.7.32-35-log
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbiuluarg3kqiv`
--
CREATE DATABASE IF NOT EXISTS `dbiuluarg3kqiv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbiuluarg3kqiv`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_type` varchar(20) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_type`) VALUES
(1, 'Paladin');

-- --------------------------------------------------------

--
-- Table structure for table `free_company_rank`
--

CREATE TABLE IF NOT EXISTS `free_company_rank` (
  `free_company_rank_id` int(11) NOT NULL AUTO_INCREMENT,
  `free_company_rank_status` varchar(60) NOT NULL,
  `free_company_rank_desc` text NOT NULL,
  PRIMARY KEY (`free_company_rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `free_company_rank`
--

INSERT INTO `free_company_rank` (`free_company_rank_id`, `free_company_rank_status`, `free_company_rank_desc`) VALUES
(1, 'Recruit', 'New member of the free company.');

-- --------------------------------------------------------

--
-- Table structure for table `game_character`
--

CREATE TABLE IF NOT EXISTS `game_character` (
  `game_character_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `free_company_rank_id` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `game_character_first_name` varchar(60) NOT NULL,
  `game_character_last_name` varchar(60) NOT NULL,
  PRIMARY KEY (`game_character_id`),
  KEY `user_id` (`user_id`),
  KEY `free_company_rank_id` (`free_company_rank_id`),
  KEY `race_id` (`race_id`),
  KEY `class_id` (`class_id`),
  KEY `gender_id` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_character`
--

INSERT INTO `game_character` (`game_character_id`, `user_id`, `free_company_rank_id`, `race_id`, `class_id`, `gender_id`, `game_character_first_name`, `game_character_last_name`) VALUES
(1, 1, 1, 1, 1, 1, 'Falcor', 'Stormrage');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_type` char(1) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_type`) VALUES
(1, 'M'),
(2, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE IF NOT EXISTS `race` (
  `race_id` int(11) NOT NULL AUTO_INCREMENT,
  `race_type` varchar(10) NOT NULL,
  PRIMARY KEY (`race_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`race_id`, `race_type`) VALUES
(1, 'Elezen');

-- --------------------------------------------------------

--
-- Table structure for table `raid_progression`
--

CREATE TABLE IF NOT EXISTS `raid_progression` (
  `raid_progression_id` int(11) NOT NULL AUTO_INCREMENT,
  `character_id` int(11) NOT NULL,
  `raid_progression_name` varchar(50) NOT NULL,
  `raid_progression_boss_won` int(11) NOT NULL,
  PRIMARY KEY (`raid_progression_id`),
  KEY `character_id` (`character_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raid_progression`
--

INSERT INTO `raid_progression` (`raid_progression_id`, `character_id`, `raid_progression_name`, `raid_progression_boss_won`) VALUES
(1, 1, 'The Great Mountain', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(60) NOT NULL,
  `user_last_name` varchar(60) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_admin`) VALUES
(1, 'Miles', 'Hollifield', 'miles@email.com', 'thepassword', 1),
(2, 'Test', 'User', 'test@user.com', 'thepassword', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_character`
--
ALTER TABLE `game_character`
  ADD CONSTRAINT `game_character_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `game_character` (`game_character_id`),
  ADD CONSTRAINT `game_character_ibfk_2` FOREIGN KEY (`free_company_rank_id`) REFERENCES `game_character` (`game_character_id`),
  ADD CONSTRAINT `game_character_ibfk_3` FOREIGN KEY (`race_id`) REFERENCES `game_character` (`game_character_id`),
  ADD CONSTRAINT `game_character_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `game_character` (`game_character_id`),
  ADD CONSTRAINT `game_character_ibfk_5` FOREIGN KEY (`gender_id`) REFERENCES `game_character` (`game_character_id`);

--
-- Constraints for table `raid_progression`
--
ALTER TABLE `raid_progression`
  ADD CONSTRAINT `raid_progression_ibfk_1` FOREIGN KEY (`character_id`) REFERENCES `raid_progression` (`raid_progression_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
