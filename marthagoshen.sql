-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: marthagoshen
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `billing` (
  `billid` int(10) NOT NULL,
  `date` timestamp NOT NULL,
  `duedate` datetime NOT NULL,
  `totalamount` int(10) NOT NULL,
  `type` enum('rent','utility','maintenance','') NOT NULL,
  `empid` int(11) NOT NULL,
  `unit` int(10) NOT NULL,
  `building` enum('harvard','princeton','wharton','') NOT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing`
--

LOCK TABLES `billing` WRITE;
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;
/*!40000 ALTER TABLE `billing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concern`
--

DROP TABLE IF EXISTS `concern`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `concern` (
  `concernid` int(10) NOT NULL,
  `reporteddate` timestamp NOT NULL,
  `description` varchar(70) NOT NULL,
  `timeavailable` timestamp NOT NULL,
  `status` enum('done','processing') NOT NULL,
  `dateavailable` timestamp NOT NULL,
  `total` int(10) DEFAULT NULL,
  `id` int(8) NOT NULL,
  `response` varchar(70) NOT NULL,
  `feedback` varchar(70) NOT NULL,
  PRIMARY KEY (`concernid`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concern`
--

LOCK TABLES `concern` WRITE;
/*!40000 ALTER TABLE `concern` DISABLE KEYS */;
/*!40000 ALTER TABLE `concern` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employee` (
  `empid` int(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstname` char(30) NOT NULL,
  `lastname` char(20) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `position` enum('admin','leasing officer','leasing manager','accounting officer','accounting manager','maintenance') NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`empid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `time` timestamp NOT NULL,
  `data` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `uniprice` int(6) NOT NULL,
  `itemid` int(11) NOT NULL,
  `idemp` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `item` (
  `itemid` int(6) NOT NULL,
  `item` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text,
  `quantity` int(6) DEFAULT NULL,
  `unitprice` double DEFAULT NULL,
  PRIMARY KEY (`itemid`),
  UNIQUE KEY `item` (`item`),
  UNIQUE KEY `item_2` (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requesteditem`
--

DROP TABLE IF EXISTS `requesteditem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `requesteditem` (
  `concernid` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `unitprice` int(10) NOT NULL,
  PRIMARY KEY (`concernid`,`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requesteditem`
--

LOCK TABLES `requesteditem` WRITE;
/*!40000 ALTER TABLE `requesteditem` DISABLE KEYS */;
/*!40000 ALTER TABLE `requesteditem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tenant` (
  `id` int(7) NOT NULL,
  `email` int(50) NOT NULL,
  `firstname` int(50) NOT NULL,
  `lastname` int(10) NOT NULL,
  `password` int(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `building` enum('harvard','princeton','wharton') NOT NULL,
  `unitid` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenant`
--

LOCK TABLES `tenant` WRITE;
/*!40000 ALTER TABLE `tenant` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `unit` (
  `unitid` varchar(6) NOT NULL,
  `building` enum('harvard','princeton','wharton','') NOT NULL,
  `owner` char(50) DEFAULT NULL,
  `status` enum('open','reserved','occupied') NOT NULL,
  PRIMARY KEY (`unitid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unit`
--

LOCK TABLES `unit` WRITE;
/*!40000 ALTER TABLE `unit` DISABLE KEYS */;
INSERT INTO `unit` VALUES ('5LM-E','harvard',NULL,'open'),('5LN-E','wharton',NULL,'open');
/*!40000 ALTER TABLE `unit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-29  9:59:30
