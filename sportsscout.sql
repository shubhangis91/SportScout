-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2019 at 07:29 PM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportsscout`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerslogin`
--

DROP TABLE IF EXISTS `playerslogin`;
CREATE TABLE IF NOT EXISTS `playerslogin` (
  `playersUsername` varchar(20) NOT NULL,
  `playersPassword` varchar(20) NOT NULL,
  PRIMARY KEY (`playersUsername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playerssignup`
--

DROP TABLE IF EXISTS `playerssignup`;
CREATE TABLE IF NOT EXISTS `playerssignup` (
  `playersUsername` varchar(20) NOT NULL,
  `playersName` varchar(30) NOT NULL,
  `playersAge` int(11) NOT NULL,
  `playersGender` varchar(20) NOT NULL,
  `playersBio` varchar(1000) NOT NULL,
  `playersAddress` varchar(100) NOT NULL,
  `playersCity` varchar(100) NOT NULL,
  `playersContact` varchar(10) NOT NULL,
  `playersPhoto` varchar(1024) NOT NULL,
  PRIMARY KEY (`playersUsername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerssignup`
--

INSERT INTO `playerssignup` (`playersUsername`, `playersName`, `playersAge`, `playersGender`, `playersBio`, `playersAddress`, `playersCity`, `playersContact`, `playersPhoto`) VALUES
('vij', 'vishal', 21, 'male', 'naaah ', '11th st', 'vadodara', '1112223333', ''),
('kris', 'vishal', 22, 'Male', 'iooooo', 'xjjjj`', 'blooo', '1112223333', 'bac.PNG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
