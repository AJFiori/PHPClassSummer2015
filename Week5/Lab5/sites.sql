-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 10:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpclasssummer2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `site_id` int(11) NOT NULL,
  `site` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site`, `date`) VALUES
(1, 'http://www.surfline.com/', '2015-08-26 13:10:31'),
(2, 'http://www.surfline.com/', '2015-08-26 13:22:31'),
(3, 'https://neit.instructure.com', '2015-08-26 13:35:28'),
(4, 'https://neit.instructure.com', '2015-08-26 13:35:34'),
(5, 'http://www.warmwinds.com/', '2015-08-26 13:37:12'),
(6, 'http://www.warmwinds.com/', '2015-08-26 13:39:08'),
(7, 'http://www.surfline.com/', '2015-08-26 13:39:13'),
(8, 'http://www.warmwinds.com/', '2015-08-26 13:47:45'),
(9, 'http://www.surfline.com/', '2015-08-26 14:53:17'),
(10, 'http://www.surfline.com/', '2015-08-26 14:58:51'),
(11, 'http://www.Warmwinds.com/', '2015-08-26 15:00:52'),
(12, 'http://www.warmwinds.com', '2015-08-26 15:01:16'),
(13, 'http://www.warmwinds.com', '2015-08-26 15:01:20'),
(14, 'http://www.warmwinds.com/', '2015-08-26 15:01:38'),
(15, 'http://www.surfline.com/', '2015-08-26 15:05:03'),
(16, 'http://www.surfline.com/sd', '2015-08-26 15:29:49'),
(17, 'https://neit.instructure.com', '2015-08-26 15:29:59'),
(18, 'http://www.surfline.com/', '2015-08-26 15:35:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
