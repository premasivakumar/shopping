-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2018 at 01:17 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `img`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `url` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`url`, `category`, `description`, `price`) VALUES
('1874646a.jpg', 'Party Wear', '', '777'),
('1874121a.jpg', 'Party Wear', '', '1030'),
('1874703a.jpg', 'Party Wear', '', '1450'),
('1874632a.jpg', 'Party Wear', '', '1400'),
('1881013b.jpg', 'Party Wear', '', '1500'),
('1881016a.jpg', 'Party Wear', '', '1700'),
('1783618a.jpg', 'tops', 'Babyhug Flutter Sleeves Smocked Neckline Top - Dark Pink', '755'),
('1857745a.jpg', 'Party Wear', '', '600'),
('1857748a.jpg', 'tops', '', '');
