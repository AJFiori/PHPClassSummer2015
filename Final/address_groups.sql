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
-- Table structure for table `address_groups`
--

CREATE TABLE IF NOT EXISTS `address_groups` (
  `address_group_id` int(10) unsigned NOT NULL,
  `address_group` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address_groups`
--

INSERT INTO `address_groups` (`address_group_id`, `address_group`) VALUES
(3, 'Coworkers'),
(2, 'Family'),
(1, 'Friends');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_groups`
--
ALTER TABLE `address_groups`
  ADD PRIMARY KEY (`address_group_id`), ADD UNIQUE KEY `address_group` (`address_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_groups`
--
ALTER TABLE `address_groups`
  MODIFY `address_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
