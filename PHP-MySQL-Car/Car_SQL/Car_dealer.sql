-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: Car
-- ------------------------------------------------------
-- Server version	5.7.15

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
-- Table structure for table `dealer`
--

DROP TABLE IF EXISTS `dealer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dealer` (
  `dealerid` int(11) NOT NULL,
  `make` varchar(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `stateName` varchar(45) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  PRIMARY KEY (`dealerid`,`make`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dealer`
--

LOCK TABLES `dealer` WRITE;
/*!40000 ALTER TABLE `dealer` DISABLE KEYS */;
INSERT INTO `dealer` VALUES (17193,'Chrysler','Stanley-Lynd Autoplex',43.0086,'308 N Fannin Ave','Cameron','Texas',76520),(17193,'Dodge','Stanley-Lynd Autoplex',43.0086,'308 N Fannin Ave','Cameron','Texas',76520),(17193,'Jeep','Stanley-Lynd Autoplex',43.0086,'308 N Fannin Ave','Cameron','Texas',76520),(17193,'Ram','Stanley-Lynd Autoplex',43.0086,'308 N Fannin Ave','Cameron','Texas',76520),(17212,'Ford','Rockdale Country Ford',42.7659,'479 W US Hwy 79','Rockdale','Texas',76567),(17385,'Cadillac','Wiesner Cadillac of Huntsville',44.5859,'230 I-45 N','Huntsville','Texas',77320),(17402,'Chrysler','Team Chrysler Dodge Jeep Ram of Huntsville',44.8508,'130 I-45 S','Huntsville','Texas',77340),(17402,'Dodge','Team Chrysler Dodge Jeep Ram of Huntsville',44.8508,'130 I-45 S','Huntsville','Texas',77340),(17402,'Jeep','Team Chrysler Dodge Jeep Ram of Huntsville',44.8508,'130 I-45 S','Huntsville','Texas',77340),(17402,'Ram','Team Chrysler Dodge Jeep Ram of Huntsville',44.8508,'130 I-45 S','Huntsville','Texas',77340),(17528,'Scion','Atkinson Toyota Scion',4.5089,'728 N Earl Rudder Fwy','Bryan','Texas',77802),(17528,'Toyota','Atkinson Toyota Scion',4.5089,'728 N Earl Rudder Fwy','Bryan','Texas',77802),(17530,'BMW','Garlyn Shelton BMW',4.29296,'3100 Briarcrest Dr','Bryan','Texas',77802),(17532,'Chevrolet','Tom Light Chevrolet',4.53483,'738 N Earl Rudder Fwy','Bryan','Texas',77802),(17533,'Chrysler','Brenham Chrysler Jeep Dodge Ram',31.4649,'1880 Hwy 290 W','Brenham','Texas',77833),(17533,'Dodge','Brenham Chrysler Jeep Dodge Ram',31.4649,'1880 Hwy 290 W','Brenham','Texas',77833),(17533,'Jeep','Brenham Chrysler Jeep Dodge Ram',31.4649,'1880 Hwy 290 W','Brenham','Texas',77833),(17533,'Ram','Brenham Chrysler Jeep Dodge Ram',31.4649,'1880 Hwy 290 W','Brenham','Texas',77833),(17534,'Ford','Appel Ford',31.5649,'1820 Hwy 290 W','Brenham','Texas',77833),(17535,'Cadillac','LaRoche Cadillac',32.1174,'900 Hwy 290 W','Brenham','Texas',77833),(17536,'Scion','Tegeler Toyota Scion',31.8297,'1515 Hwy 290 W','Brenham','Texas',77833),(17536,'Toyota','Tegeler Toyota Scion',31.8297,'1515 Hwy 290 W','Brenham','Texas',77833),(17537,'Ford','Bud Cross Ford',23.0604,'150 State Hwy 36 S','Caldwell','Texas',77836),(17538,'Chevrolet','Caldwell Country Chevrolet',22.8648,'800 W Hwy 21','Caldwell','Texas',77836),(17539,'Honda','Allen Honda',1.38229,'2450 Earl Rudder Fwy S','College Station','Texas',77840),(17540,'Nissan','Douglass Nissan',2.45585,'1001 Earl Rudder Fwy S','College Station','Texas',77845),(17541,'Ford','College Station Ford Lincoln',2.19856,'1351 Earl Rudder Fwy S','College Station','Texas',77845),(17541,'Lincoln','College Station Ford Lincoln',2.19856,'1351 Earl Rudder Fwy S','College Station','Texas',77845),(17542,'Buick','Derek Scotts Auto Park',22.1885,'4556 S State Hwy 6','Hearne','Texas',77859),(17542,'Chevrolet','Derek Scotts Auto Park',22.1885,'4556 S State Hwy 6','Hearne','Texas',77859),(17542,'GMC','Derek Scotts Auto Park',22.1885,'4556 S State Hwy 6','Hearne','Texas',77859),(17543,'Toyota','Atkinson Toyota Madisonville',35.658,'204 1-45 S','Madisonville','Texas',77864),(17544,'Buick','Henson Chevrolet Buick GMC',33.7429,'201 N May St','Madisonville','Texas',77864),(17544,'Chevrolet','Henson Chevrolet Buick GMC',33.7429,'201 N May St','Madisonville','Texas',77864),(17544,'GMC','Henson Chevrolet Buick GMC',33.7429,'201 N May St','Madisonville','Texas',77864),(17545,'Ford','Henson Ford',35.728,'581 Interstate 45 N','Madisonville','Texas',77864),(17546,'Chrysler','Henson Motor',33.7045,'105 S May St','Madisonville','Texas',77864),(17546,'Dodge','Henson Motor',33.7045,'105 S May St','Madisonville','Texas',77864),(17546,'Jeep','Henson Motor',33.7045,'105 S May St','Madisonville','Texas',77864),(17546,'Ram','Henson Motor',33.7045,'105 S May St','Madisonville','Texas',77864),(17548,'Ford','Team Ford of Navasota',21.127,'9965 Hwy 6','Navasota','Texas',77868),(17840,'Chevrolet','Tegeler Chevrolet',45.1016,'17114 Fordtran','Industry','Texas',78944),(20701,'Cadillac','Sterling Cadillac',3.18512,'205 N Earl Rudder Fwy','Bryan','Texas',77802),(447795,'Buick','Team Buick Chevrolet GMC of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(447795,'Chevrolet','Team Buick Chevrolet GMC of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(447795,'GMC','Team Buick Chevrolet GMC of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(449268,'Buick','Miller-Starnes Chevrolet Buick',41.434,'476 W Cameron Ave','Rockdale','Texas',76567),(449268,'Chevrolet','Miller-Starnes Chevrolet Buick',41.434,'476 W Cameron Ave','Rockdale','Texas',76567),(647155,'Hyundai','Hyundai of Huntsville',45.4317,'755 I 45 S','Huntsville','Texas',77340),(715335,'Chrysler','Team Dodge Chrysler Jeep Ram of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(715335,'Dodge','Team Dodge Chrysler Jeep Ram of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(715335,'Jeep','Team Dodge Chrysler Jeep Ram of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(715335,'Ram','Team Dodge Chrysler Jeep Ram of Navasota',20.1413,'1614 E Washington Ave','Navasota','Texas',77868),(730211,'Subaru','Sterling Subaru',3.18512,'205 N Earl Rudder Fwy','Bryan','Texas',77802),(731660,'Kia','Sterling Kia',3.16503,'197 N Earl Rudder Fwy','Bryan','Texas',77802),(736176,'Hyundai','Hyundai of Brenham',31.6953,'1710 Hwy 290 W','Brenham','Texas',77833),(766636,'Volkswagen','Garlyn Shelton Volkswagen',4.29296,'3100 Briarcrest Dr','Bryan','Texas',77802),(766638,'Mazda','Garlyn Shelton Mazda of Bryan',4.29296,'3100 Briarcrest Dr','Bryan','Texas',77802),(766640,'Hyundai','Garlyn Shelton Hyundai',4.29296,'3100 Briarcrest Dr','Bryan','Texas',77802),(767972,'Buick','Wiesner Buick Chevrolet GMC of Huntsville',44.5859,'230 I-45 N','Huntsville','Texas',77320),(767972,'Chevrolet','Wiesner Buick Chevrolet GMC of Huntsville',44.5859,'230 I-45 N','Huntsville','Texas',77320),(767972,'GMC','Wiesner Buick Chevrolet GMC of Huntsville',44.5859,'230 I-45 N','Huntsville','Texas',77320),(767984,'Buick','LaRoche Chevrolet Buick GMC',32.1174,'900 Hwy 290 W','Brenham','Texas',77833),(767984,'Chevrolet','LaRoche Chevrolet Buick GMC',32.1174,'900 Hwy 290 W','Brenham','Texas',77833),(767984,'GMC','LaRoche Chevrolet Buick GMC',32.1174,'900 Hwy 290 W','Brenham','Texas',77833),(768178,'Buick','Sterling Buick GMC',3.18512,'205 N Earl Rudder Fwy','Bryan','Texas',77802),(768178,'GMC','Sterling Buick GMC',3.18512,'205 N Earl Rudder Fwy','Bryan','Texas',77802),(838055,'FIAT','FIAT Of Bryan College Station',3.47308,'301 N Earl Rudder Fwy','Bryan','Texas',77802),(849948,'Ford','Bill Fick Ford',45.957,'737 I-45 S','Huntsville','Texas',77340);
/*!40000 ALTER TABLE `dealer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-26 10:56:11
