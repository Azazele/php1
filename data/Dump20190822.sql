-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.16

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
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `price` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'IT It Spector',3000,NULL,1,'Дизайнерские очки от Stapes'),(2,'Toward space',2500,NULL,2,'Вы ни увидите не просто солнечного света, вообще ничего!'),(3,'Future Magnetic',4320,NULL,3,'Смотри в успешное IT будущее с фьюча магнетик'),(4,'Fortune Sun',7400,NULL,4,'Сегодня тебе повезет и твой код не назовут говном вместе с этими очками.'),(5,'Sun Road',1990,NULL,5,'Посмотри вперед, а потом назад, а потом снова перед и снова назад, делай это пока не устанешь! Да, в этом нет смысла!');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_comments`
--

DROP TABLE IF EXISTS `goods_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `goods_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `good` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_comments`
--

LOCK TABLES `goods_comments` WRITE;
/*!40000 ALTER TABLE `goods_comments` DISABLE KEYS */;
INSERT INTO `goods_comments` VALUES (5,'DAVID MAKHNEV','devidwm27@gmail.com','fsdfgf',4),(6,'Константин Махов','devidwm27@gmail.com','Как дела, йоу! Неплохие очки!',4),(7,'Гусь','sdfm27@gmail.com','Дайте гуся!',3),(8,'Денис Махнёв','sssss@gmail.com','Комментарий к очками!',4);
/*!40000 ALTER TABLE `goods_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_images`
--

DROP TABLE IF EXISTS `goods_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `goods_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_images`
--

LOCK TABLES `goods_images` WRITE;
/*!40000 ALTER TABLE `goods_images` DISABLE KEYS */;
INSERT INTO `goods_images` VALUES (1,'glasses1.jpg',1180,786),(2,'glasses2.jpg',1180,786),(3,'glasses3.jpg',1180,786),(4,'glasses4.jpg',1180,786),(5,'glasses5.jpg',1180,786);
/*!40000 ALTER TABLE `goods_images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-22 17:45:34
