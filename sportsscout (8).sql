-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2019 at 08:08 PM
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
-- Table structure for table `playerslookingtrainer`
--

DROP TABLE IF EXISTS `playerslookingtrainer`;
CREATE TABLE IF NOT EXISTS `playerslookingtrainer` (
  `playersUsername` varchar(30) NOT NULL,
  `playersSport` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerslookingtrainer`
--

INSERT INTO `playerslookingtrainer` (`playersUsername`, `playersSport`) VALUES
('Gourav11', 'tennis'),
('Gourav11', 'cricket'),
('Gourav11', 'badminton'),
('vishal', 'badminton');

-- --------------------------------------------------------

--
-- Table structure for table `playerssignup`
--

DROP TABLE IF EXISTS `playerssignup`;
CREATE TABLE IF NOT EXISTS `playerssignup` (
  `playersUsername` varchar(20) NOT NULL,
  `playersPassword` varchar(50) NOT NULL,
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

INSERT INTO `playerssignup` (`playersUsername`, `playersPassword`, `playersName`, `playersAge`, `playersGender`, `playersBio`, `playersAddress`, `playersCity`, `playersContact`, `playersPhoto`) VALUES
('Gourav11', '12345', 'Gourav Shukla', 23, 'MALE', 'Reliance Employee', 'Woodbridge', 'Bloomington', '1234567890', 'IMG-20171224-WA0001.jpg'),
('Rakhsit', '12345', 'Rakshit Patel', 20, 'MALE', 'Footballer', 'Woodbridge', 'Indianapolis', '2245511947', '2016-10-10--15-29-01.jpeg'),
('Jatan', '12345', 'Jatan Amin', 22, 'MALE', 'Footballer', 'fountain park', 'Indianapolis', '2245511943', ''),
('vishal', '12345', 'Vishal Patel', 22, 'MALE', 'student at IU', 'fountain park', 'Bloomington', '2245511942', '2017-14-5--08-34-23.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sporthobbies`
--

DROP TABLE IF EXISTS `sporthobbies`;
CREATE TABLE IF NOT EXISTS `sporthobbies` (
  `playersUsername` varchar(30) NOT NULL,
  `playersSport` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sporthobbies`
--

INSERT INTO `sporthobbies` (`playersUsername`, `playersSport`) VALUES
('vishal', 'soccer'),
('Gourav11', 'soccer');

-- --------------------------------------------------------

--
-- Table structure for table `trainersignup`
--

DROP TABLE IF EXISTS `trainersignup`;
CREATE TABLE IF NOT EXISTS `trainersignup` (
  `trainerUsername` varchar(30) NOT NULL,
  `trainerPassword` varchar(30) NOT NULL,
  `trainerName` varchar(50) NOT NULL,
  `trainerAge` int(11) NOT NULL,
  `trainerGender` varchar(20) NOT NULL,
  `trainerBio` varchar(5000) NOT NULL,
  `trainerAddress` varchar(100) NOT NULL,
  `trainerCity` varchar(30) NOT NULL,
  `trainerContact` varchar(100) NOT NULL,
  `image` varchar(2024) NOT NULL,
  PRIMARY KEY (`trainerUsername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainersignup`
--

INSERT INTO `trainersignup` (`trainerUsername`, `trainerPassword`, `trainerName`, `trainerAge`, `trainerGender`, `trainerBio`, `trainerAddress`, `trainerCity`, `trainerContact`, `image`) VALUES
('Arpit99', '12345', 'Arpit B', 25, 'MALE', 'ex football team captian at Indiana University', 'College Mall', 'Bloomington', '9998007894', 'IMG_1023.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
