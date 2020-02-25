-- MySQL dump 10.13  Distrib 5.6.31, for osx10.8 (x86_64)
--
-- Host: localhost    Database: llibres_php
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `autors`
--

DROP TABLE IF EXISTS `autors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autors` (
  `id` int(11) unsigned NOT NULL,
  `editorial` varchar(500) NOT NULL,
  `valoracio` decimal(4,2) NOT NULL DEFAULT '0.00',
  `telf_agent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_autors` FOREIGN KEY (`id`) REFERENCES `persones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autors`
--

LOCK TABLES `autors` WRITE;
/*!40000 ALTER TABLE `autors` DISABLE KEYS */;
INSERT INTO `autors` VALUES (5,'La pàgina blanca',4.10,NULL),(6,'L\'esquellot',3.00,NULL),(7,'La pàgina blanca',2.10,NULL),(8,'La pàgina blanca',2.00,NULL),(9,'Reader',4.55,NULL),(10,'L\'esquellot',3.78,NULL),(11,'La pàgina blanca',4.10,NULL),(12,'Reader',3.00,NULL),(13,'Reader',3.60,NULL);
/*!40000 ALTER TABLE `autors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `llibres`
--

DROP TABLE IF EXISTS `llibres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `llibres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titol` varchar(80) DEFAULT '',
  `subtitol` varchar(80) DEFAULT '',
  `autor_ref` int(11) unsigned DEFAULT NULL,
  `valoracio` decimal(4,2) unsigned DEFAULT '0.00',
  `preu` decimal(7,2) unsigned DEFAULT '0.00',
  `id_imatge` varchar(45) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `any_publicacio` smallint(4) unsigned DEFAULT '0',
  `resum` text,
  PRIMARY KEY (`id`),
  KEY `FK_ref_autors_idx` (`autor_ref`),
  CONSTRAINT `FK_ref_autors` FOREIGN KEY (`autor_ref`) REFERENCES `autors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `llibres`
--

LOCK TABLES `llibres` WRITE;
/*!40000 ALTER TABLE `llibres` DISABLE KEYS */;
INSERT INTO `llibres` VALUES (115,'L\'ovella negra 2','',5,0.00,20.00,'115.png','L\'esquellot',2011,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(116,'L\'home invisible','Part 1',6,3.50,30.00,NULL,'La pàgina blanca',2011,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(117,'L\'Alba Vermella','',5,4.50,100.00,NULL,'L\'esquellot',2012,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(118,'L\'home invisible','Part 2',6,2.50,35.00,NULL,'La pàgina blanca',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(119,'L\'home sensible','',10,3.50,30.00,NULL,'La pàgina blanca',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(120,'La màquina','',5,3.50,30.00,NULL,'L\'esquellot',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(121,'La dona nua','',6,3.50,30.00,NULL,'Reader',2017,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(122,'El Terror','Part 2',8,2.50,35.00,NULL,'La pàgina blanca',2010,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(123,'La Por','',8,3.50,30.00,NULL,'La pàgina blanca',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(124,'El Pànic','',5,1.80,30.00,NULL,'La pàgina blanca',2017,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(125,'El gran pànic','',9,2.20,30.00,NULL,'L\'esquellot',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(126,'La dona valenta','',6,4.50,20.00,NULL,'Reader',2017,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(127,'La Por','',13,3.50,30.00,NULL,'La pàgina blanca',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(128,'El picapedra','',13,2.00,35.00,NULL,'La pàgina blanca',2017,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(129,'El gran boom','El dia final',11,1.20,50.00,NULL,'L\'esquellot',2015,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(130,'La dona gran','',6,3.50,29.00,NULL,'Reader',2017,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt \nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation \nullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit \nin voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat \ncupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
/*!40000 ALTER TABLE `llibres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persones`
--

DROP TABLE IF EXISTS `persones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `cognoms` varchar(45) NOT NULL,
  `telf` varchar(45) DEFAULT '',
  `email` varchar(100) DEFAULT '',
  `alias` varchar(45) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persones`
--

LOCK TABLES `persones` WRITE;
/*!40000 ALTER TABLE `persones` DISABLE KEYS */;
INSERT INTO `persones` VALUES (5,'Arturo','Pérez','91919191','arturo.perez@llibres.cat',''),(6,'Josep','Lletra','91919191','josep.lletra@llibres.cat',''),(7,'Jaume','Llopis','91919191','jaume.llop@llibres.cat',''),(8,'Michael','Write','91919191','michwr@llibres.cat',''),(9,'James','Pen','91919191','jpen@llibres.cat',''),(10,'Marge','Simpson','91919191','m_simpson@llibres.cat',''),(11,'Linda','Pincel','91919191','l_pincel@llibres.cat',''),(12,'Jack','Buck','91919191','j.buck@llibres.cat',''),(13,'Raimon','Page','91919191','rpg@llibres.cat','');
/*!40000 ALTER TABLE `persones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-13  2:09:24
