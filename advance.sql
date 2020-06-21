-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2020 at 04:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advance`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dentry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(100) COLLATE utf16_swedish_ci NOT NULL,
  `device_name` varchar(100) COLLATE utf16_swedish_ci NOT NULL,
  `image` text COLLATE utf16_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `dentry`, `category`, `device_name`, `image`, `price`) VALUES
(3, '2020-01-09 04:34:44', 'CCTV', 'Cables', 'rBVaVF0yk0WAMjfHAATXmLb4wr8998.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `installation`
--

DROP TABLE IF EXISTS `installation`;
CREATE TABLE IF NOT EXISTS `installation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dentry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service` varchar(200) COLLATE utf16_swedish_ci NOT NULL,
  `product_img` text COLLATE utf16_swedish_ci NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service` (`service`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `installation`
--

INSERT INTO `installation` (`id`, `dentry`, `service`, `product_img`, `price`) VALUES
(1, '2020-01-06 07:16:52', 'DSTV', 'Explora3A.jpg', 100),
(2, '2020-01-06 07:17:23', 'CCTV', '716SlcqL7nL._AC_SX425_.jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dentry` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fname` varchar(25) COLLATE utf16_swedish_ci NOT NULL,
  `lname` varchar(25) COLLATE utf16_swedish_ci NOT NULL,
  `email` varchar(40) COLLATE utf16_swedish_ci DEFAULT NULL,
  `cellnumber` varchar(20) COLLATE utf16_swedish_ci NOT NULL,
  `current_address` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `service` varchar(100) COLLATE utf16_swedish_ci NOT NULL,
  `status` varchar(5) COLLATE utf16_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `dentry`, `fname`, `lname`, `email`, `cellnumber`, `current_address`, `service`, `status`) VALUES
(4, '2020-01-07 02:27:07', 'Advance ', 'Nyakupinda', 'anyakupinda@gmail.com', '263774294131', 'Rujeko C', 'ZW Lite', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `dentry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `product_img` text COLLATE utf16_swedish_ci NOT NULL,
  `price` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `dentry`, `category`, `product_img`, `price`) VALUES
(8, '2020-01-06 08:08:55', 'ZW Family', 'family.jpg', 300),
(9, '2020-01-09 04:32:41', 'ZW Lite', 'lite 1.jpeg', 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf16_swedish_ci NOT NULL,
  `password` varchar(10) COLLATE utf16_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'tagutaj@gmail.com', '1993');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
