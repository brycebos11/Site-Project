-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2012 at 11:35 AM
-- Server version: 5.1.48
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `login_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login_time` datetime NOT NULL,
  PRIMARY KEY (`login_id`),
  KEY `username_id` (`username_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `username_id`, `login_time`) VALUES
(10, 'username', '2012-05-20 18:25:36'),
(11, 'username', '2012-05-20 18:31:46'),
(12, 'username', '2012-05-20 19:25:30'),
(13, 'username', '2012-05-20 19:27:01'),
(14, 'username', '2012-05-22 14:22:37'),
(15, 'username', '2012-05-22 14:36:05'),
(16, 'username', '2012-05-22 14:38:24'),
(17, 'username', '2012-05-22 14:40:59'),
(18, 'username', '2012-05-30 11:24:21');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_table`
--
ALTER TABLE `login_table`
  ADD CONSTRAINT `login_table_ibfk_1` FOREIGN KEY (`username_id`) REFERENCES `members_table` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
