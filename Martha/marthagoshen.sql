-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2019 at 06:29 AM
-- Server version: 5.5.60
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marthagoshen`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `billid` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `duedate` datetime NOT NULL,
  `totalamount` int(10) NOT NULL,
  `type` enum('rent','utility','maintenance','') NOT NULL,
  `empid` varchar(11) NOT NULL,
  `unitId` varchar(10) NOT NULL,
  `building` enum('harvard','princeton','wharton','') NOT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billid`, `date`, `duedate`, `totalamount`, `type`, `empid`, `unitId`, `building`) VALUES
('B001', '2019-05-13 06:27:16', '2019-06-10 17:00:00', 1245, 'rent', 'EP02', '5LM-E', 'princeton');

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

DROP TABLE IF EXISTS `concern`;
CREATE TABLE IF NOT EXISTS `concern` (
  `concernid` varchar(10) NOT NULL,
  `reporteddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(70) NOT NULL,
  `timeavailable` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('done','processing') NOT NULL,
  `dateavailable` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total` int(10) DEFAULT NULL,
  `id` int(8) NOT NULL,
  `response` varchar(70) NOT NULL,
  `feedback` varchar(70) NOT NULL,
  PRIMARY KEY (`concernid`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`concernid`, `reporteddate`, `description`, `timeavailable`, `status`, `dateavailable`, `total`, `id`, `response`, `feedback`) VALUES
('CO1', '2019-05-13 03:59:40', 'broken door', '2019-09-18 04:30:00', 'processing', '2019-10-26 16:00:00', NULL, 1, 'In the process of repairing', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empid` varchar(7) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` char(50) NOT NULL,
  `lastname` char(50) NOT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `position` enum('admin','leasing officer','leasing manager','accounting officer','accounting manager','maintenance') NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`empid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `email`, `firstname`, `lastname`, `contact`, `position`, `password`) VALUES
('EP01', 'ferdinanddeasis@marthservices.com', 'Ferdinand II', 'De Asis', '09175057090', 'admin', 'ferdinand'),
('EP02', 'abigail@marthaservices.com', 'Abigail', 'Rubrico', '09875261895', 'accounting officer', 'abigailrubrico'),
('EP03', 'hazelignacio@marthaservices.com', 'Hazel', 'Ignacio', '09739486184', 'leasing manager', 'hazenacio'),
('EP04', 'drevasuncion@marthaservices.com', 'Drev', 'Asuncion', '09785261846', 'leasing officer', 'drevesper');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `uniprice` int(6) NOT NULL,
  `itemid` int(11) NOT NULL,
  `idemp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `itemid` varchar(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text,
  `quantity` int(6) DEFAULT NULL,
  `unitprice` double DEFAULT NULL,
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `item` (`item`),
  UNIQUE KEY `item_2` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `item`, `brand`, `description`, `quantity`, `unitprice`) VALUES
('IT0001', 'doorknob', 'Medeco', 'doorknob with a lock', 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `requesteditem`
--

DROP TABLE IF EXISTS `requesteditem`;
CREATE TABLE IF NOT EXISTS `requesteditem` (
  `concernid` varchar(10) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `unitprice` int(10) NOT NULL,
  PRIMARY KEY (`concernid`,`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requesteditem`
--

INSERT INTO `requesteditem` (`concernid`, `itemid`, `quantity`, `total`, `unitprice`) VALUES
('CO1', 'IT001', 3, 750, 250);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
CREATE TABLE IF NOT EXISTS `tenant` (
  `id` varchar(7) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `building` enum('harvard','princeton','wharton') NOT NULL,
  `unitid` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `email`, `firstname`, `lastname`, `password`, `contact`, `building`, `unitid`) VALUES
('T001', 'jeffpaswick@marthaservices.com', 'Jeff', 'Paswick', 'jeffpaswick', '09065792344', 'princeton', '5LM-E'),
('T002', 'yvonnemanuel@marthaservices.com', 'Yvonne', 'Manuel', 'yvonnemanuel12', '09302406268', 'wharton', '5LA-W'),
('T003', 'apostoljohn@marthaservices.com', 'John Raphael', 'Apostol', 'raphpostol', '09516782905', 'harvard', '3RS-B');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `unitId` varchar(6) NOT NULL,
  `building` enum('harvard','princeton','wharton','') NOT NULL,
  `owner` char(50) DEFAULT NULL,
  `status` enum('open','reserved','occupied') NOT NULL,
  PRIMARY KEY (`unitId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitId`, `building`, `owner`, `status`) VALUES
('5LM-E', 'princeton', 'Jeff Paswick', 'occupied'),
('5LN-E', 'wharton', NULL, 'open'),
('5LO-E', 'princeton', NULL, 'open'),
('5LE-E', 'harvard', NULL, 'open');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
