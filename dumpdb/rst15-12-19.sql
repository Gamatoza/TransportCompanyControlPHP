-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: CompanyDataBase
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Accountants`
--

DROP TABLE IF EXISTS `Accountants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Accountants` (
  `AID` int(11) NOT NULL,
  `NIS` varchar(50) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`AID`),
  CONSTRAINT `Accountants_ibfk_1` FOREIGN KEY (`AID`) REFERENCES `Employee` (`EmpID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Accountants`
--

LOCK TABLES `Accountants` WRITE;
/*!40000 ALTER TABLE `Accountants` DISABLE KEYS */;
/*!40000 ALTER TABLE `Accountants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cargo`
--

DROP TABLE IF EXISTS `Cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cargo` (
  `CargoID` int(11) NOT NULL AUTO_INCREMENT,
  `CargoName` varchar(20) DEFAULT NULL,
  `PlaceID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CargoID`),
  KEY `Cargo` (`PlaceID`),
  CONSTRAINT `Cargo_ibfk_1` FOREIGN KEY (`PlaceID`) REFERENCES `CollectionPlace` (`CPID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cargo`
--

LOCK TABLES `Cargo` WRITE;
/*!40000 ALTER TABLE `Cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientele`
--

DROP TABLE IF EXISTS `Clientele`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientele` (
  `ClientID` int(11) NOT NULL,
  `NIS` varchar(50) DEFAULT NULL,
  `OrderBroduectID` int(11) NOT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Emil` varchar(50) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`ClientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientele`
--

LOCK TABLES `Clientele` WRITE;
/*!40000 ALTER TABLE `Clientele` DISABLE KEYS */;
/*!40000 ALTER TABLE `Clientele` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CollectionPlace`
--

DROP TABLE IF EXISTS `CollectionPlace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CollectionPlace` (
  `CPID` int(11) NOT NULL AUTO_INCREMENT,
  `PlaceName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CPID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CollectionPlace`
--

LOCK TABLES `CollectionPlace` WRITE;
/*!40000 ALTER TABLE `CollectionPlace` DISABLE KEYS */;
INSERT INTO `CollectionPlace` (`CPID`, `PlaceName`) VALUES (1,'Место не определено');
/*!40000 ALTER TABLE `CollectionPlace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employee`
--

DROP TABLE IF EXISTS `Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employee` (
  `EmpID` int(11) NOT NULL AUTO_INCREMENT,
  `Password` varchar(32) NOT NULL,
  `Login` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`EmpID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` (`EmpID`, `Password`, `Login`) VALUES (1,'e118bf75901cc7450903f9f4c5d5c21e','God');
/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FarRobbers`
--

DROP TABLE IF EXISTS `FarRobbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FarRobbers` (
  `FRID` int(11) NOT NULL,
  `NIS` varchar(50) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `WorkPlaceID` int(11) DEFAULT NULL,
  PRIMARY KEY (`FRID`),
  KEY `FarRobbers` (`WorkPlaceID`),
  CONSTRAINT `FarRobbers_ibfk_1` FOREIGN KEY (`WorkPlaceID`) REFERENCES `CollectionPlace` (`CPID`),
  CONSTRAINT `FarRobbers_ibfk_2` FOREIGN KEY (`FRID`) REFERENCES `Employee` (`EmpID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FarRobbers`
--

LOCK TABLES `FarRobbers` WRITE;
/*!40000 ALTER TABLE `FarRobbers` DISABLE KEYS */;
/*!40000 ALTER TABLE `FarRobbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Loaders`
--

DROP TABLE IF EXISTS `Loaders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Loaders` (
  `LID` int(11) NOT NULL,
  `NIS` varchar(50) NOT NULL,
  `Birthday` date DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `WorkPlaceID` int(11) DEFAULT NULL,
  PRIMARY KEY (`LID`),
  KEY `Loaders` (`WorkPlaceID`),
  CONSTRAINT `Loaders_ibfk_1` FOREIGN KEY (`WorkPlaceID`) REFERENCES `CollectionPlace` (`CPID`),
  CONSTRAINT `Loaders_ibfk_2` FOREIGN KEY (`LID`) REFERENCES `Employee` (`EmpID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Loaders`
--

LOCK TABLES `Loaders` WRITE;
/*!40000 ALTER TABLE `Loaders` DISABLE KEYS */;
/*!40000 ALTER TABLE `Loaders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Orders`
--

DROP TABLE IF EXISTS `Orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL,
  `OrderName` varchar(250) DEFAULT NULL,
  `ClietID` int(11) DEFAULT NULL,
  `FarRobberID` int(11) DEFAULT NULL,
  `LoaderID` int(11) DEFAULT NULL,
  `From` int(11) DEFAULT NULL,
  `To` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Orders`
--

LOCK TABLES `Orders` WRITE;
/*!40000 ALTER TABLE `Orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `Orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Trucks`
--

DROP TABLE IF EXISTS `Trucks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Trucks` (
  `TruckID` int(11) NOT NULL,
  `TruckName` varchar(250) DEFAULT NULL,
  `CurrentPlaceID` int(11) DEFAULT NULL,
  PRIMARY KEY (`TruckID`),
  KEY `Trucks` (`CurrentPlaceID`),
  CONSTRAINT `Trucks_ibfk_1` FOREIGN KEY (`CurrentPlaceID`) REFERENCES `CollectionPlace` (`CPID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Trucks`
--

LOCK TABLES `Trucks` WRITE;
/*!40000 ALTER TABLE `Trucks` DISABLE KEYS */;
/*!40000 ALTER TABLE `Trucks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vGetPasses`
--

DROP TABLE IF EXISTS `vGetPasses`;
/*!50001 DROP VIEW IF EXISTS `vGetPasses`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vGetPasses` AS SELECT 
 1 AS `EmpID`,
 1 AS `Password`,
 1 AS `Login`,
 1 AS `Name`,
 1 AS `Type`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vReport`
--

DROP TABLE IF EXISTS `vReport`;
/*!50001 DROP VIEW IF EXISTS `vReport`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vReport` AS SELECT 
 1 AS `OrderID`,
 1 AS `OrderName`,
 1 AS `Client`,
 1 AS `FarRobber`,
 1 AS `Loader`,
 1 AS `PlaceName`,
 1 AS `To`,
 1 AS `Price`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vGetPasses`
--

/*!50001 DROP VIEW IF EXISTS `vGetPasses`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vGetPasses` AS select `emp`.`EmpID` AS `EmpID`,`emp`.`Password` AS `Password`,`emp`.`Login` AS `Login`,coalesce(`fr`.`NIS`,`ld`.`NIS`,`ac`.`NIS`,`cl`.`NIS`) AS `Name`,(case when (`fr`.`NIS` is not null) then 'FarRobber' when (`ld`.`NIS` is not null) then 'Loader' when (`ac`.`NIS` is not null) then 'Accountant' when (`cl`.`NIS` is not null) then 'Client' end) AS `Type` from ((((`Employee` `emp` left join `FarRobbers` `fr` on((`fr`.`FRID` = `emp`.`EmpID`))) left join `Loaders` `ld` on((`ld`.`LID` = `emp`.`EmpID`))) left join `Accountants` `ac` on((`ac`.`AID` = `emp`.`EmpID`))) left join `Clientele` `cl` on((`cl`.`ClientID` = `emp`.`EmpID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vReport`
--

/*!50001 DROP VIEW IF EXISTS `vReport`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vReport` AS select `ord`.`OrderID` AS `OrderID`,`ord`.`OrderName` AS `OrderName`,`cl`.`NIS` AS `Client`,`fr`.`NIS` AS `FarRobber`,`ld`.`NIS` AS `Loader`,`cp`.`PlaceName` AS `PlaceName`,`ord`.`To` AS `To`,`ord`.`Price` AS `Price` from ((((`Orders` `ord` join `Loaders` `ld` on((`ld`.`LID` = `ord`.`LoaderID`))) join `FarRobbers` `fr` on((`fr`.`FRID` = `ord`.`FarRobberID`))) join `CollectionPlace` `cp` on((`cp`.`CPID` = `ord`.`From`))) join `Clientele` `cl` on((`cl`.`ClientID` = `ord`.`ClietID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-15 22:53:34
