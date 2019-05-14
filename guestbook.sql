-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2019 at 05:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(2, 'quoc', 'nguyen', '2019-05-13 15:23:20', '2019-05-14 09:40:29'),
(3, 'quoc', 'nguyen', '2019-05-13 15:23:27', '2019-05-14 09:40:29'),
(4, 'quoc', 'nguyen', '2019-05-13 15:23:54', '2019-05-14 09:40:29'),
(5, 'chao', 'bao', '2019-05-13 16:44:59', '2019-05-14 09:40:29'),
(7, 'gi ', 'may', '2019-05-13 17:23:23', '2019-05-14 09:40:29'),
(9, 'verylong', 'do something', '2019-05-13 17:45:39', '2019-05-14 09:40:29'),
(10, 'quoc', 'nguyen', '2019-05-14 09:40:43', '2019-05-14 09:40:43'),
(11, 'chao', 'ban', '2019-05-14 09:40:50', '2019-05-14 09:40:50'),
(12, ':D', 'D', '2019-05-14 09:40:54', '2019-05-14 09:40:54'),
(13, 'asdasd', 'asdasdasd :Dasdasdasd :Dasdasdasd :Dasdasdasd :D', '2019-05-14 09:40:58', '2019-05-14 10:05:10'),
(14, 'vl', 'vbl', '2019-05-14 09:41:04', '2019-05-14 09:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
