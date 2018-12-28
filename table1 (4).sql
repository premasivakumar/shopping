-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 04:18 PM
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
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `url` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`url`, `category`, `description`, `price`) VALUES
('1857745a.jpg', 'tops', 'Beebay Sleeveless Dress Floral Motif - Green ', '299'),
('1857748a.jpg', 'tops', 'Beebay Sleeveless Dress Floral Motif - Yellow ', '290'),
('1783618a.jpg', 'tops', 'Awabox Pearl Applique Dress With Bow - Pink', '310'),
('1862548a.jpg', 'Frocks', 'Awabox  Dress - white', '1030'),
('1868465a.jpg', 'Frocks', 'Awabox Pearl Applique Dress With Bow - Pink', '446'),
('1874142a.jpg', 'Frocks', 'Plain Belt Dress - Red ', '490'),
('1874646a.jpg', 'Party Wear', 'Awabox Big Flower Belt Dress - Black and red', '1069'),
('1874691a.jpg', 'Party Wear', ' Flower Belt Dress - Red ', '1099'),
('1881013b.jpg', 'Party Wear', 'Awabox Pearl Applique Dress With Bow -Blue ', '1270'),
('1881016a.jpg', 'Party Wear', 'Beebay  Dress Floral Motif - Brown ', '1300'),
('1730286a.jpg', 'Jean', 'Carters suspender Jeans - Blue', '1109'),
('1716472a.jpg', 'Jean', ' Carter''s Chino Jean-Blue', '998'),
('1716141a.jpg', 'Jean', 'Carters suspender Jeans - Black', '1030'),
('1778589a.jpg', 'Pants', 'Babyhug full Length Pyjama - Red', '168'),
('1778603b.jpg', 'Pants', 'Babyhug full Length Pyjama - Yellow', '148'),
('1866019a.jpg', 'Pants', 'Mini Taurus Full Length Loung Pant Aeroplan print - Brown print ', '139'),
('1408430a.jpg', 'tops', 'Awabox Top - Blue', '299'),
('1198140a.jpg', 'Frocks', ' Flower Cotton Dress - Black', '560');
