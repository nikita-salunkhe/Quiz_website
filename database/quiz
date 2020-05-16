-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 08:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `quizid1` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `discription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `quiz_id`, `quizid1`, `title`, `name`, `timein`, `timeout`, `discription`) VALUES
(1, 114, 1589647735, 'Quiz on space', 'Nikita Salunkhe', '22:43:00', '23:31:00', 'start your career in space engineering'),
(2, 115, 1589649066, 'Musical instrument', 'Nikita Salunkhe', '23:24:00', '23:41:00', 'lets begin');

-- --------------------------------------------------------

--
-- Table structure for table `quizoid`
--

CREATE TABLE `quizoid` (
  `id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `quizid` int(6) NOT NULL,
  `question` varchar(30) NOT NULL,
  `option1` varchar(20) NOT NULL,
  `option2` varchar(20) NOT NULL,
  `option3` varchar(20) NOT NULL,
  `option4` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizoid`
--

INSERT INTO `quizoid` (`id`, `quiz_id`, `quizid`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 114, 1589647735, 'The following is not NASA spac', 'Discovery', 'Endeavour', 'Challenger', 'Fortuner', 'Fortuner'),
(2, 114, 1589647735, 'First human to travel into spa', 'Alan Shepard', 'Neil Armstrong', 'Yuri Gagarin', 'Vladimir Komarov', 'Yuri Gagarin'),
(3, 114, 1589647735, 'Vladimir Komarov', ' Apollo 1', 'Sputnik 1', ' Salyut 1', 'None of the above', 'Sputnik 1'),
(4, 115, 1589649066, 'The oldest form of composition', 'Ghazal', 'Dhrupad', 'Thumri', 'Qawwali', 'Dhrupad'),
(5, 115, 1589649066, 'Yakshagana is a dance form of ', 'Andhra Pradesh', 'Karnataka', 'Tamil Nadu', 'aharashtra', 'Karnataka'),
(6, 115, 1589649066, 'Sattriya is a classical dance ', 'Assam', 'West Bengal', 'Odisha', 'Kerala', 'Assam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'nikita@rediffmail.com', '123', 'admin'),
(2, 'brent.rivera@yahoo.com', '456', 'player');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `quizoid`
--
ALTER TABLE `quizoid`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizoid`
--
ALTER TABLE `quizoid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
