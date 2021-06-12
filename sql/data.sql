-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: mobiliaria
-- ------------------------------------------------------
-- Server version	5.7.34-0ubuntu0.18.04.1

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
-- Table structure for table `casas`
--

DROP TABLE IF EXISTS `casas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` varchar(200) NOT NULL,
  `metros_cuadrados` double NOT NULL,
  `precio_metro_cuadrado` double NOT NULL,
  `costo_final` double NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas`
--

LOCK TABLES `casas` WRITE;
/*!40000 ALTER TABLE `casas` DISABLE KEYS */;
INSERT INTO `casas` (`id`, `propietario`, `metros_cuadrados`, `precio_metro_cuadrado`, `costo_final`, `ciudad`) VALUES (2,'Antonio Escobar',100,20,2000,'Quito'),(3,'Martha Santos',20,20,400,'Zapotillo'),(7,'María Salazar',200,10,2000,'Machala'),(8,'Andrés Puertas',1000,10,10000,'Macas');
/*!40000 ALTER TABLE `casas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constructoras`
--

DROP TABLE IF EXISTS `constructoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constructoras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `ambito` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constructoras`
--

LOCK TABLES `constructoras` WRITE;
/*!40000 ALTER TABLE `constructoras` DISABLE KEYS */;
INSERT INTO `constructoras` (`id`, `nombre`, `ciudad`, `ambito`) VALUES (1,'Casa Para Todos','Loja','Casas y Departamentos'),(2,'Todo los parques','Quito','Parques y Jardínes'),(3,'JJ constructora','Cuenca','Edificios');
/*!40000 ALTER TABLE `constructoras` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-11 20:46:24
