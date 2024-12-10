-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 01:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authenticate`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `user_id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `elem` varchar(255) NOT NULL,
  `elemgrad` year(4) NOT NULL,
  `high` varchar(255) NOT NULL,
  `juniorgrad` year(4) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `seniorgrad` year(4) NOT NULL,
  `college` varchar(255) NOT NULL,
  `collegegrad` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`user_id`, `info_id`, `birthday`, `section`, `bio`, `contact`, `address`, `email`, `elem`, `elemgrad`, `high`, `juniorgrad`, `shs`, `seniorgrad`, `college`, `collegegrad`) VALUES
(33, 5, '2024-12-26', '', '', '5346357', 'ma@gmail.com', 'mariaericha_g@yahoo.com', 'Sultan Kudarat', '2007', 'Sourcesogon', '2009', 'Oxford', '2010', 'Malate', '2008'),
(36, 6, '2024-12-18', 'ACT AD 2', 'di ko Lm', '54545', 'sultan kudarat', 'mariaericha_g@yahoo.com', 'Sultan Kudarat', '2009', 'Sourcesogon', '2013', 'Oxford', '2014', 'Malate', '2016'),
(37, 7, '2004-08-30', 'ACT AD 2', 'PASADO SA FINALS CUTIEE', '097787878787', 'sultan kudarat', 'mariaericha_g@yahoo.com', 'Sultan Kudarat', '2010', 'Sourcesogon', '2014', 'Oxford', '2013', 'WMSU', '2009'),
(38, 8, '2024-12-31', 'BSCS', 'bio whaaaaaaaaaa', '13534654754', 'sultan kudarat', 'mariaericha_g@gmail.com', 'Sultan Kudarat', '2019', 'Sourcesogon', '2011', 'Oxford', '2009', 'WMSU', '2009');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL,
  `fourt` varchar(255) NOT NULL,
  `fifth` varchar(255) NOT NULL,
  `sixth` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_id`, `user_id`, `first`, `second`, `third`, `fourt`, `fifth`, `sixth`) VALUES
(1, 33, 'HTML', 'PHYTON', 'PHP', 'JAVA', 'C++', 'JS'),
(2, 37, 'HTML', 'PHYTON', '', '', '', ''),
(3, 38, 'HTML', 'PHYTON', 'hdf', 'JAVA', 'C++', 'PHYTON');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `lastname`, `firstname`, `email`, `username`, `password`) VALUES
(33, 'Guanzon', 'Ma. Ericha', 'mariaericha_g@yahoo.com', 'riaericha', '$2y$10$R9IETZA14C6N2S2zjX03KuAIIAYOwEsTe8lCy7m9zxqGOThI8pHKa'),
(36, 'new', 'new', 'new@gmail.com', 'new', '$2y$10$vVCjg2eMdxOr8PibDbzRr.exL/P027ifNmgTbYoEa3vDyFgy7.53C'),
(37, 'Guanzon', 'Ma. Ericha', 'coopersheldon@gmail.com', 'mariah', '$2y$10$zUlps0lRn40Lwdhe1l7P2.1Iq/ZOgkojyG.oEYMrmy1f49rSoOeAq'),
(38, 'Manon-og', 'Marlo', 'mariaericha_g@gmail.com', 'mar', '$2y$10$c5q5KxGCgb17aI22yAWODefbKspCSJtsqFMrOK1.aESEiyy/Hu0WC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `infos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
