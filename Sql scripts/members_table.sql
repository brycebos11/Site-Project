-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2012 at 11:33 AM
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
-- Table structure for table `members_table`
--

CREATE TABLE IF NOT EXISTS `members_table` (
  `members_table_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`members_table_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `members_table`
--

INSERT INTO `members_table` (`members_table_id`, `first_name`, `last_name`, `city`, `state`, `zip_code`, `username`, `email`, `password`, `created`, `updated`) VALUES
(2, 'fat', 'albert', 'christmas', 'town', 12345, 'fatalbert', 'fat@albert.com', '0d8dc086e16e3ac48f05d555994da7d7', '2012-05-15 01:54:19', '2012-05-15 01:54:19'),
(3, 'hgah', 'hkjhda', 'hihi', 'hhi', 87980, 'hhh', 'gg@hkjh.bkjk', '92eb5ffee6ae2fec3ad71c777531578f', '2012-05-15 02:01:59', '2012-05-15 02:01:59'),
(4, 'hgah', 'hkjhda', 'hihi', 'hhi', 87980, 'greg', 'bif@bifr.cbon', '0cc175b9c0f1b6a831c399e269772661', '2012-05-15 02:07:20', '2012-05-15 02:07:20'),
(5, 'hgah', 'hkjhda', 'hihi', 'hhi', 87980, 'gregbif', 'b@bifr.cbon', '9e3669d19b675bd57058fd4664205d2a', '2012-05-15 02:12:01', '2012-05-15 02:12:01'),
(6, 'blah', 'blah', 'black', 'sheep', 9876, 'black', 'sheep@blah.blah', '23ec24c5ca59000543cee1dfded0cbea', '2012-05-15 11:46:12', '2012-05-15 11:46:12'),
(7, 'blah', 'blah', 'black', 'sheep', 9876, 'blacch', 'sheepch@blah.blahch', '48d6215903dff56238e52e8891380c8f', '2012-05-15 11:51:34', '2012-05-15 11:51:34'),
(8, 'blah', 'blah', 'black', 'sheep', 9876, 'scam', 'pamthescam@scam.pam', '91c0f7100bde719c44790e7df757a1a6', '2012-05-15 11:57:23', '2012-05-15 11:57:23'),
(9, 'dweeb', 'bleeb', 'punk', 'rock', 87666, 'flamer', 'jammer@flam.cam', 'ad017e9d6654bd0ccd978958fa1b6da6', '2012-05-15 12:10:33', '2012-05-15 12:10:33'),
(10, 'Bryce', 'Bostwick', 'Banks', 'Oregon', 97106, 'Bryce', 'brycebos11@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2012-05-15 14:31:32', '2012-05-15 14:31:32'),
(11, 'josh', 'posh', 'beaver', 'beaverslose', 98776, 'beavslosetoducks', 'quack@attacked.com', '8277e0910d750195b448797616e091ad', '2012-05-20 12:55:30', '2012-05-20 12:55:30'),
(12, 'josh', 'posh', 'beaver', 'beaverslose', 98776, 'beavslosetoduck', 'quack@attacked.co', 'b2f5ff47436671b6e533d8dc3614845d', '2012-05-20 13:04:09', '2012-05-20 13:04:09'),
(13, 'josh', 'posh', 'beaver', 'beaverslose', 98776, 'duck', 'quack@attack.com', 'b2f5ff47436671b6e533d8dc3614845d', '2012-05-20 13:16:59', '2012-05-20 13:16:59'),
(14, 'josh', 'posh', 'beaver', 'beaverslose', 98776, 'duc', 'quack@attack.co', '2510c39011c5be704182423e3a695e91', '2012-05-20 13:46:29', '2012-05-20 13:46:29'),
(15, 'c', 'd', 'd', 'c', 345656, 'ffff', 'rgf@hghju.ghj', '5e36941b3d856737e81516acd45edc50', '2012-05-20 13:52:04', '2012-05-20 13:52:04'),
(16, 'c', 'd', 'd', 'c', 345656, 'fftt', 'rgf@hghju.gghj', '47bce5c74f589f4867dbd57e9ca9f808', '2012-05-20 13:55:07', '2012-05-20 13:55:07'),
(17, 'a', 's', 'd', 'f', 547454, 'username', 'user@name.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2012-05-20 18:22:34', '2012-05-20 18:22:34'),
(18, 'b', 'b', 'b', 'b', 436, 'red', 'giggly@little.sam', 'ae64c716c8ae9cd3315227453314c957', '2012-05-22 14:46:37', '2012-05-22 14:46:37'),
(19, 'a', 'a', 'a', 'a', 6453, 'flat', 'flat@tire.com', '97f39cc5295544cab3686f626a9746f3', '2012-05-22 14:49:35', '2012-05-22 14:49:35'),
(20, 'bruce', 'blazer', 'chicago', 'IL', 97799, 'blazer', 'blazer@trail.com', 'e62e3ce65b4bd91d57353fa9473696e2', '2012-05-24 02:19:01', '2012-05-24 02:19:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
