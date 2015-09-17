-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2015 at 04:07 PM
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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `product` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product`, `price`, `image`) VALUES
(7, 43, 'Tool', '15.00', '8928d50ba75005d370a5d6082448d698933468cd.jpeg'),
(8, 43, 'A perfect circle', '15.00', '4235242373cd6dd9ab70b50e31435ae446d7b996.jpeg'),
(9, 43, 'SevenDust', '15.00', '1bcdc86dc4f276e34cbca2f5b3c965deb8735fba.jpeg'),
(10, 43, 'Deftones', '15.00', '61d2d1d767c15ef98978afe903b5f48ccb27989a.jpeg'),
(11, 40, 'Tacos', '3.50', ''),
(12, 40, 'Fish Taco', '6.00', 'bc5df4e9e2cd0ffa04024b8a94193e00f20928a4.jpeg'),
(13, 40, 'enchiladas', '8.00', ''),
(14, 40, 'ceviche', '8.00', '7b106edea91aece565762f7d7eb6e8f01dbe65fa.jpeg'),
(15, 23, 'AJW', '550.00', '6adf0b3d93509b71c5349e1fffd13bf1ccc1b1d3.jpeg'),
(16, 23, 'Lost', '650.00', '43004bbf7019c0c410fae73e86d84cbfc83fd614.jpeg'),
(17, 23, 'Rusty', '750.00', ''),
(18, 23, 'al merrick ', '650.00', '42313189e8bf5bc9d62436b509c227ec64b38b25.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`), ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
