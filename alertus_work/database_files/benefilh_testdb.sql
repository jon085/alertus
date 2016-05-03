-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2016 at 02:19 PM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benefilh_testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_track`
--

CREATE TABLE IF NOT EXISTS `location_track` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  KEY `index` (`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_track`
--

INSERT INTO `location_track` (`index`, `latitude`, `longitude`) VALUES
(0, -26.1647, 28.2336);

-- --------------------------------------------------------

--
-- Table structure for table `master_users`
--

CREATE TABLE IF NOT EXISTS `master_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datecreate` int(11) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_bin NOT NULL,
  `surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `telnum` varchar(16) COLLATE utf8_bin NOT NULL,
  `privilege` tinyint(4) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `master_users`
--

INSERT INTO `master_users` (`id`, `datecreate`, `firstname`, `surname`, `email`, `password`, `telnum`, `privilege`) VALUES
(1, 1461529814, 'Jonathan', 'Kartun', 'jontykartun@gmail.com', 'passwordy', '27828810837', 1);

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
