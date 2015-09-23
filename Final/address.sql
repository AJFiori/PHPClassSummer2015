-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2015 at 11:34 PM
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
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `address_group_id` int(10) unsigned NOT NULL,
  `fullname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `address_group_id`, `fullname`, `email`, `address`, `phone`, `website`, `birthday`, `image`) VALUES
(1, 1, 1, 'Anthony J Fiori', 'AJFioriiii@email.neit.edu', '300 Lambert Lind Hwy 529B', '(401) 316-4996', 'http://www.surfline.com', '1989-11-30 00:00:00', '88008c23a842fa546d06a29ce441d523e2726d42.jpg'),
(3, 2, 1, 'Anthony J Fiori', 'AJFioriiii@email.neit.edu', '300 Lambert Lind Hwy 529B', '(401) 316-4996', 'http://www.surfline.com', '1989-11-30 00:00:00', '0ddd2037907a3067f0cab9142b5fba6cfd977f1e.jpg'),
(4, 2, 2, 'Joe Pesci', 'JoePesci54@yahoo.com', '300 Lambert Lind Hwy 529B', '(401) 316-4996', 'http://www.surfline.com', '1954-10-07 00:00:00', '6267ddaa327e7c0c32341e68a77ab59a4a396673.jpg'),
(6, 2, 3, 'Eric Larson', 'beatkeeper89@yahoo.com', '300 Lambert Lind Hwy 529B', '(401) 316-4996', 'http://www.surfline.com', '2014-11-02 00:00:00', '0ddd2037907a3067f0cab9142b5fba6cfd977f1e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`), ADD KEY `user_id` (`user_id`), ADD KEY `address_group_id` (`address_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`address_group_id`) REFERENCES `address_groups` (`address_group_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
