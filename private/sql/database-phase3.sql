-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 05:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

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

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_type`) VALUES
(1, 'Paladin'),
(2, 'Warrior'),
(3, 'Dark Knight'),
(4, 'Gunbreaker'),
(5, 'White Mage'),
(6, 'Scholar'),
(7, 'Astrologian'),
(8, 'Monk'),
(9, 'Dragoon'),
(10, 'Ninja'),
(11, 'Samurai'),
(12, 'Bard'),
(13, 'Machinist'),
(14, 'Dancer'),
(15, 'Black Mage'),
(16, 'Summoner'),
(17, 'Red Mage'),
(18, 'Blue Mage');

-- --------------------------------------------------------

--
-- Table structure for table `free_company_rank`
--

CREATE TABLE `free_company_rank` (
  `free_company_rank_id` int(11) NOT NULL,
  `free_company_rank_status` varchar(60) NOT NULL,
  `free_company_rank_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `free_company_rank`
--

INSERT INTO `free_company_rank` (`free_company_rank_id`, `free_company_rank_status`, `free_company_rank_desc`) VALUES
(1, 'Recruit', 'New recruit of the Free Company. Official member status to be determined.'),
(2, 'Member', 'Officially a full-fledged member of the Free Company.'),
(3, 'Veteran', 'Veteran player and trusted member of the Free Company.'),
(4, 'Officer', 'Officer of the Free Company. High-ranking member in charge of various responsibilities.'),
(5, 'Council Member', 'Highest-ranking member below Guildmaster. Council Members have official say in how the Free Company is run.'),
(6, 'Guildmaster', 'Leader of the Free Company. Guildmaster has final say in all decisions, with consideration from the Council Members.');

-- --------------------------------------------------------

--
-- Table structure for table `game_character`
--

CREATE TABLE `game_character` (
  `game_character_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `free_company_rank_id` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `game_character_first_name` varchar(60) NOT NULL,
  `game_character_last_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_character`
--

INSERT INTO `game_character` (`game_character_id`, `user_id`, `free_company_rank_id`, `race_id`, `class_id`, `gender_id`, `game_character_first_name`, `game_character_last_name`) VALUES
(1, 1, 6, 6, 1, 1, 'Falcor', 'Stormrage'),
(2, 2, 5, 3, 15, 2, 'Gloria', 'Vidar'),
(3, 4, 4, 3, 5, 2, 'Naga', 'Fellrain'),
(4, 1, 4, 4, 4, 1, 'Alfred', 'Galar'),
(5, 10, 5, 2, 6, 1, 'Marco', 'Wrynn'),
(6, 6, 5, 1, 16, 1, 'Lukas', 'Reeves'),
(7, 3, 4, 7, 12, 2, 'Aleidis', 'Westmoore'),
(8, 2, 4, 8, 13, 2, 'Yuki', 'Nawashiro'),
(9, 2, 4, 4, 16, 1, 'Aang', 'Jopino'),
(10, 5, 2, 2, 17, 1, 'Ali', 'Tarfair'),
(11, 7, 2, 1, 18, 2, 'Morgana', 'Skye'),
(12, 8, 3, 3, 3, 1, 'Francis', 'Von Drake'),
(13, 9, 1, 5, 2, 1, 'Donovan', 'Vagora');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_type` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `race_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`race_id`, `race_type`) VALUES
(1, 'Elezen'),
(2, 'Hyur'),
(3, 'Miqo\'te'),
(4, 'Roegadyn'),
(5, 'Lalafell'),
(6, 'Au Ra'),
(7, 'Hrothgar'),
(8, 'Viera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(60) NOT NULL,
  `user_last_name` varchar(60) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_hashed_password` varchar(255) NOT NULL,
  `user_level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_name`, `user_hashed_password`, `user_level`) VALUES
(1, 'Miles', 'Hollifield', 'miles@admin.com', 'mileshollifield', '$2y$10$Mo4OyHwzNNsixty4BbPXHebfwxdZwlo0Lt0e/XWKDO4VR8aZrt/D6', 'a'),
(2, 'test', 'user', 'test@user.com', 'testuser', '$2y$10$4EsYf8xYSZKXCbfSPxWCBuspBxXsACTqY3Jj285iUYY5S4SWOsyLS', 'm'),
(3, 'Sam', 'Frederickson', 'sam@example.com', 'samfredson', '$2y$10$IoII3uaC6wm1xgzN8m63leMljdTf2kv7dWCNm1QgpQYWmhPYmG00C', 'm'),
(4, 'Lana', 'Williams', 'lana@example.com', 'lanawilliams', '$2y$10$rPo7/1ZpoQoytibVPB2pFOFv2ezDnKKTkMlRE2jFxCy7qTP/th/zq', 'm'),
(5, 'Ethan', 'Brady', 'ethan@example.com', 'ethanbrady', '$2y$10$N5V5d9sUYIX24DzWGPSar.xV/CaaPcDGF5w4Z5XrFf0SLfHtEAn6e', 'm'),
(6, 'Victoria', 'Hawthorne', 'victoria@example.com', 'victoriahawthorne', '$2y$10$InveQG6aikHpIKJpCNRYzeMGbzXfvtFGH9egfa1h.7KQR446YFyMa', 'm'),
(7, 'Sara', 'Rogers', 'sara@example.com', 'sararogers', '$2y$10$WQtvHnReB1sP81wr3JRiHOScfhaNJzuXD0mNIjyK9GvGCXDZOLZUO', 'm'),
(8, 'Jimmy', 'Smith', 'jimmy@example.com', 'jimmysmith', '$2y$10$KKmwkNcAKm/kOUuRf3n1fOIfVqVaQpQxq3.tOvGvHrdpfKUKwUqCC', 'm'),
(9, 'Rebecca', 'Reed', 'rebecca@example.com', 'rebeccareed', '$2y$10$kDZP5d8P24iJ6gOZ9ZBMveYhU9kYddaK/lu/l7VQT0GAbxIFcet6e', 'm'),
(10, 'Clancy', 'Javis', 'clancy@example.com', 'clancyjavis', '$2y$10$nAKd9GFB9nok9/LWUWYXCO4HPNdOqDAF4M1wBtKU5hwOAYtdWh1gq', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `free_company_rank`
--
ALTER TABLE `free_company_rank`
  ADD PRIMARY KEY (`free_company_rank_id`);

--
-- Indexes for table `game_character`
--
ALTER TABLE `game_character`
  ADD PRIMARY KEY (`game_character_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `free_company_rank_id` (`free_company_rank_id`),
  ADD KEY `race_id` (`race_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `free_company_rank`
--
ALTER TABLE `free_company_rank`
  MODIFY `free_company_rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game_character`
--
ALTER TABLE `game_character`
  MODIFY `game_character_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_character`
--
ALTER TABLE `game_character`
  ADD CONSTRAINT `game_character_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `game_character_ibfk_2` FOREIGN KEY (`free_company_rank_id`) REFERENCES `free_company_rank` (`free_company_rank_id`),
  ADD CONSTRAINT `game_character_ibfk_3` FOREIGN KEY (`race_id`) REFERENCES `race` (`race_id`),
  ADD CONSTRAINT `game_character_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `game_character_ibfk_5` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
