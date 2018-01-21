-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: learn_php
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `description` text,
  `price` decimal(10,0) DEFAULT NULL,
  `offered_price` decimal(10,0) DEFAULT NULL,
  `product_img_link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (3,'PARKA','If normal, choose your normal size. Relaxed silhouette.  The model is 177 cm tall and wears a size S.',250,200,'https://d1csr3q4rjsmej.cloudfront.net/1_18_nile/nile_F15898_02_carbon.jpg'),(5,'REGULAR LONG','81% Cotton, 18% Polyester, 1% Elastane',150,100,'https://d1csr3q4rjsmej.cloudfront.net/1_18_nile/nile_F15885_01_raw%20denim.jpg'),(6,'SCARF','100% silk',79,70,'https://d1csr3q4rjsmej.cloudfront.net/1_18_nile/nile_F15941_02_nude.jpg'),(7,'LOOPSHAWL','55% cotton, 44% viscose, 1% lurex',99,89,'https://d1csr3q4rjsmej.cloudfront.net/4_17_nile/nile_W15719_03_dark%20taupe.jpg'),(12,'BRACELET CLOVER','Artikelnummer',80,50,'https://d1csr3q4rjsmej.cloudfront.net/4_17_nile/nile_W50169_02_olive.jpg'),(13,'SCARF 80X195','50% silk, 50% viscose',135,130,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H50082_02_midnight.jpg'),(14,'SHAWL','85% Wolle, 15% Nylon',99,79,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H50080_02_multicolour.jpg'),(15,'COAT DOWN','100% polyester',150,140,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H15466_02_pearl.jpg'),(16,'PARKA','100% cotton',120,100,'https://d1csr3q4rjsmej.cloudfront.net/1_18_nile/nile_F15897_02_sky.jpg'),(17,'SHIRT LONGSLEEVE','100% cotton',150,147,'https://d1csr3q4rjsmej.cloudfront.net/1_18_nile/nile_F15892_01_nude.jpg'),(18,'NECKLACE WING','Artikelnummer',120,80,'https://d1csr3q4rjsmej.cloudfront.net/4_17_nile/nile_W50180_02_silver.jpg'),(19,'BRACELET CLOVER','Artikelnummer',80,50,'https://d1csr3q4rjsmej.cloudfront.net/4_17_nile/nile_W50169_03_olive.jpg'),(20,'WALLET','100% leather',80,50,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H50130_03_silver.jpg'),(21,'NECKLACE LEAF','Artikelnummer',59,40,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H50106_03_coffee.jpg'),(22,'SCARF','100% viscose',89,70,'https://d1csr3q4rjsmej.cloudfront.net/3_17_nile/nile_H15527_02_dark%20stone.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Test','Admin','123456','admin@email.com','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-21 23:01:57
