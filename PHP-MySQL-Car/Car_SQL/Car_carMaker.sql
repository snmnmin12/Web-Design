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
-- Table structure for table `carMaker`
--

DROP TABLE IF EXISTS `carMaker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carMaker` (
  `MakerId` int(11) NOT NULL,
  `Makername` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `manufactuer` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MakerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carMaker`
--

LOCK TABLES `carMaker` WRITE;
/*!40000 ALTER TABLE `carMaker` DISABLE KEYS */;
INSERT INTO `carMaker` VALUES (200000001,'Audi','Germany','Volkswagen Group','Ingolstadt, Germany'),(200000081,'BMW','Germany','Bayerische Motoren Werke AG','Munich, Bavaria, Germany'),(200000089,'Infiniti','Japan','Nissan Motor Company Ltd','Hopewell Centre, Wan Chai, Hong Kong'),(200000130,'Mercedes-Benz','Germany','Mercedes-Benz','Stuttgart, Germany'),(200000201,'Nissan','Japan','Nissan Motor Company Ltd','Nishi-ku, Yokohama, Japan'),(200000238,'Volkswagen','Germany','Volkswagen Group','Wolfsburg, Germany'),(200000404,'Chevrolet','USA','General Motors Company','Detroit, Michigan, U.S.'),(200000886,'Porsche','Germany','Dr.-Ing. h.c. F. Porsche AG','Stuttgart, Baden-Wurttemberg, Germany'),(200001398,'Hyundai','South Korea','Hyundai Group','Seoul, South Korea'),(200001444,'Honda','Japan','Honda Motor Co., Ltd.','Minato, Tokyo, Japan'),(200001510,'Jeep','USA',' Fiat Chrysler Automobiles','Toledo, Ohio, US'),(200001623,'Lexus','Japan','Toyota Motor Corporation','Nagoya, Japan'),(200001663,'Cadillac','USA','General Motors Company','New York City, New York, United States'),(200001769,'Aston Martin','United Kingdom','Aston Martin Lagonda Limited','Gaydon, Warwickshire, England, United Kingdom'),(200001777,'Lincoln','USA','Lincoln Motor Company','Dearborn, Michigan, U.S.'),(200001853,'Suzuki','Japan','Suzuki Motor Corporation','Hamamatsu, Shizuoka, Japan'),(200002038,'Acura','Japan','Honda Motor Co., Ltd.','Minato, Tokyo'),(200002305,'MINI','United Kingdom','British Motor Corporation','Longbridge, England, United Kingdom'),(200002634,'Pontiac','USA','General Motors Company','Detroit, Michigan, U.S.'),(200002915,'Mitsubishi','Japan','Mitsubishi Motors Corporation','Minato, Tokyo, Japan'),(200003063,'Kia','South Korea','Kia Motors Corporation','Seoul, South Korea'),(200003196,'Jaguar','United Kingdom','Jaguar Land Rover','Whitley, Coventry, United Kingdom'),(200003381,'Toyota','Japan','Toyota Motor Corporation.','Toyota, Aichi, Japan'),(200003644,'Chrysler','USA','Fiat Chrysler Automobiles N.V','Auburn Hills, Michigan, U.S.'),(200004021,'HUMMER','USA','AM General','Detroit, Michigan, U.S.'),(200004100,'Mazda','Japan','Mazda Motor Corporation','3-1 Shinchi, Fuchu, Aki, Hiroshima, Japan'),(200004446,'Saturn','USA','Saturn Corporation','Detroit, Michigan, U.S.'),(200004491,'Subaru','Japan','Fuji Heavy Industries','Ebisu, Tokyo, Japan'),(200005044,'Rolls-Royce','United Kingdom','Rolls-Royce Motor Cars Limited','Goodwood, England, United Kingdom'),(200005143,'Ford','USA','Ford Motor Company','Dearborn, Michigan, U.S.'),(200005745,'Fisker','USA','Fisker Automotive','Anaheim, California, U.S.'),(200005848,'Bentley','United Kingdom','Bentley Motors Limited','Crewe, England, United Kingdom.'),(200005922,'Lamborghini','Italy','Automobili Lamborghini S.p.A.','Sant\'Agata Bolognese, Italy'),(200006023,'Ferrari','Italy','Ferrari S.p.A.','Maranello, Italy'),(200006242,'Lotus','United Kingdom','Lotus Cars','Hethel, Norfolk, England, United Kingdom'),(200006515,'Scion','Japan','Toyota Motor Corporation','Torrance, California, U.S.'),(200006582,'Land Rover','United Kingdom','Jaguar Land Rover','Whitley, Coventry, United Kingdom'),(200006659,'Buick','USA','General Motors Company','Detroit, United States'),(200007302,'GMC','USA','General Motors Company','Detroit, United States'),(200007711,'Mercury','USA','Ford Motor Company','Dearborn, Michigan, U.S'),(200009788,'Dodge','USA','Chrysler Group LLC','Auburn Hills, Michigan, U.S.'),(200010382,'Volvo','Sweden','Volvo Group','Gothenburg, Sweden'),(200018920,'Tesla','USa','Tesla Motors, Inc.','Palo Alto, California, U.S.'),(200028029,'Maserati','Italy','Maserati','Modena, Italy'),(200030397,'Bugatti','French ','Automobiles Ettore Bugatti ','Molsheim, Alsace, France'),(200033022,'FIAT','Italy','Fiat Automobiles S.p.A.','Turin, Italy'),(200038885,'smart','Germany','Smart Automobile','Boblingen, Germany'),(200043087,'Maybach','Germany','Maybach Motorenbau','Stuttgart, Germany'),(200046567,'Spyker','Netherlands','Spyker Cars','Zeewolde, Netherlands'),(200051397,'McLaren','United Kingdom','McLaren Automotive','McLaren Technology Campus in Woking, Surrey.'),(200074504,'Saab','Sweden','Saab Automobile AB','Trollhattan, Sweden'),(200393150,'Ram','USA','Fiat Chrysler Automobiles','Auburn Hills, Michigan, U.S.'),(200464140,'Alfa Romeo','Italy','Alfa Romeo Automobiles S.p.A.','Turin, Italy');
/*!40000 ALTER TABLE `carMaker` ENABLE KEYS */;
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
