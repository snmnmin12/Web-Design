CREATE DATABASE  IF NOT EXISTS `MyApp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `MyApp`;
-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: MyApp
-- ------------------------------------------------------
-- Server version	5.7.16

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
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `username` varchar(25) NOT NULL,
  `carid` int(11) NOT NULL,
  `comments` blob,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`carid`),
  KEY `carid_idx` (`carid`),
  CONSTRAINT `carid` FOREIGN KEY (`carid`) REFERENCES `car` (`idcar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES ('snmnmin',1,'The BMW 2 Series is a new compact luxury coupe for 2014. (A convertible version is likely to come out in the future.) Two trim levels are available: 228i and M235i. The 228i comes with a 2.0-liter turbocharged four-cylinder engine that produces 240 horsepower and 255 pound-feet of torque. If you want some additional power, the M235i is equipped with a 3.0-liter inline six-cylinder engine with 320 hp and 330 lb-ft of torque. Directing this power to the rear wheels for both models is an eight-speed automatic transmission; a six speed manual is a no-cost option.\r\n\r\nStandard equipment for the 228i includes 17-inch alloy wheels, automatic headlights, foglights, rain-sensing wipers, cruise control, a 60/40-split-folding rear seat, a tilt-and-telescoping steering wheel and BMW\'s iDrive infotainment interface with a 6.5-inch display, Bluetooth and a 10-speaker sound system. The more powerful M235i adds extra features like adaptive xenon headlights and power front seats along with performance-oriented hardware such as an adaptive suspension, upgraded brakes and a sport exhaust. Major options for both the 228i and M235i include a navigation system with a larger display screen, leather upholstery, heated seats and additional active safety features.','2017-07-17 10:52:22'),('snmnmin123',1,'Many people aspire to own a luxury-branded sport coupe, but sometimes even established entry-level models can be financially out of reach. If you\'re in this situation and are searching for a more affordable option, the BMW 2 Series could very well hit the spot.\r\n\r\nCompared to BMW\'s other compact two-door, the 4 Series, the 2 Series isn\'t as roomy or as comprehensively equipped with standard features. But in just about every other aspect, the 2 Series earns the BMW badge on its hood. It\'s an impressively fun car to drive, with two powerful engines available and sharp and rewarding handling. And if you do want a fully loaded car, most of BMW\'s popular convenience and luxury features are still available as options. Granted, some other affordably priced entry-level luxury cars may prove more practical given their four doors or bigger backseats, but overall, the BMW 2 Series is an excellent choice.','2017-07-17 10:51:26');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-17 11:33:44
