-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: periodismo
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `periodismo`
--

DROP TABLE IF EXISTS `periodismo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodismo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(32) DEFAULT NULL,
  `IdPresentador` int(8) DEFAULT NULL,
  `Edicion` varchar(32) DEFAULT NULL,
  `Emitido` varchar(32) DEFAULT NULL,
  `IdProductor` int(8) DEFAULT NULL,
  `Descripcion` varchar(32) DEFAULT NULL,
  `Formato` varchar(32) DEFAULT NULL,
  `Ciudad` varchar(32) DEFAULT NULL,
  `IdPeriodista` int(8) DEFAULT NULL,
  `IdEditor` int(8) DEFAULT NULL,
  `Contenido` varchar(32) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `Bloque` varchar(32) DEFAULT NULL,
  `mm_ss` time DEFAULT NULL,
  `Hora_Prog` time DEFAULT NULL,
  `Realiza_en` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdPresentador` (`IdPresentador`),
  KEY `IdPeriodista` (`IdPeriodista`,`IdEditor`),
  KEY `IdEditor` (`IdEditor`),
  KEY `IdProductor` (`IdProductor`),
  CONSTRAINT `periodismo_ibfk_1` FOREIGN KEY (`IdEditor`) REFERENCES `editor` (`IdEditor`),
  CONSTRAINT `periodismo_ibfk_2` FOREIGN KEY (`IdPeriodista`) REFERENCES `periodista` (`IdPeriodista`),
  CONSTRAINT `periodismo_ibfk_3` FOREIGN KEY (`IdPresentador`) REFERENCES `presentador` (`IdPresentador`),
  CONSTRAINT `periodismo_ibfk_4` FOREIGN KEY (`IdProductor`) REFERENCES `productor` (`IdProductor`)
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodismo`
--

LOCK TABLES `periodismo` WRITE;
/*!40000 ALTER TABLE `periodismo` DISABLE KEYS */;
INSERT INTO `periodismo` VALUES (1,'2022-09-29',1,'Tercera Edicion','Si',2,'','','',1,1,'','00:10:00','','20:30:00','20:35:00','Cochabamba'),(2,'2022-09-29',1,'Tercera Edicion','Si',2,'','','',1,1,'','00:00:10','','20:30:00','20:45:10','Cochabamba'),(3,'2022-09-29',1,'Tercera Edicion','Si',2,'','','',1,1,'','00:00:00','','20:30:00','20:45:10','Cochabamba'),(4,'2022-09-29',1,'Tercera Edicion','Si',2,'','','',1,1,'','00:00:00','','20:30:00','20:45:10','Cochabamba'),(5,'2022-09-29',1,'Tercera Edicion','Si',2,'','','',1,1,'','00:00:00','','20:30:00','20:45:10','Cochabamba');
/*!40000 ALTER TABLE `periodismo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-29 16:03:39
