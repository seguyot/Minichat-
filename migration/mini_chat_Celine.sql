-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2018 at 11:36 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_chat_Celine`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ip` varchar(15) CHARACTER SET utf8 NOT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `pseudo`, `message`, `date`, `ip`, `user_agent`) VALUES
(340, 'Celine', 'hi', '2018-08-06 11:34:57', '192.168.1.73', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0'),
(341, 'Celine', '', '2018-08-06 11:34:58', '192.168.1.73', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `color`) VALUES
(1, 'ses', '#0bea3c'),
(2, 'se', '#fcc4cd'),
(3, 'segu', '#abfcde'),
(4, 'seguy', '#95af13'),
(5, 'seguyo', '#dc4cef'),
(6, 'SELINE', '#ed0e8c'),
(7, 'Wilfried', '#8c1e02'),
(8, 'Willou', '#e074b1'),
(9, 'Wil', '#47a6e5'),
(10, 'df', '#e05e66'),
(11, 're', '#419aa0'),
(12, 'sqs', '#d10a6a'),
(13, 'estelle', '#04a547'),
(14, 'water', '#b227e5'),
(15, 'cHRIS', '#1d618e'),
(16, 'leila', '#d987dd'),
(17, 'jehanne', '#81dcea'),
(18, 'jehannee', '#1ff45f'),
(19, 'jehanneeq', '#25aa9d'),
(20, NULL, '#85e835'),
(21, 'Céline', '#ce5ae2'),
(22, NULL, '#f7c5af'),
(23, NULL, '#1d678e'),
(24, NULL, '#6fdbcb'),
(25, 'Gael', '#c7d9fc'),
(26, 'Hello Kitty', '#3618f9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
