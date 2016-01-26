-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: YaleIMs
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sport` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `BK` int(10) unsigned DEFAULT NULL,
  `BR` int(10) unsigned DEFAULT NULL,
  `CC` int(10) unsigned DEFAULT NULL,
  `DC` int(10) unsigned DEFAULT NULL,
  `ES` int(10) unsigned DEFAULT NULL,
  `JE` int(10) unsigned DEFAULT NULL,
  `MC` int(10) unsigned DEFAULT NULL,
  `PC` int(10) unsigned DEFAULT NULL,
  `SY` int(10) unsigned DEFAULT NULL,
  `SM` int(10) unsigned DEFAULT NULL,
  `TD` int(10) unsigned DEFAULT NULL,
  `TC` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matches`
--

LOCK TABLES `matches` WRITE;
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;
INSERT INTO `matches` VALUES (10,'women_soccer','2015-02-04',0,0,0,0,0,100,0,0,0,0,0,0),(12,'coed_football','2015-02-03',0,0,0,0,0,0,0,0,0,100,0,0),(13,'men_football','2015-03-05',0,0,0,0,0,0,0,0,0,0,0,0),(14,'c_hoops','2015-05-05',0,0,0,0,0,0,8,0,0,0,0,10),(15,'women_volleyball','2015-04-05',0,0,10,0,0,5,0,0,0,0,0,0),(16,'women_soccer','2015-09-06',0,5,0,0,0,10,0,0,0,0,0,0),(17,'b_hoops','2015-09-12',0,0,11,0,0,0,7,0,0,0,0,0),(18,'coed_tennis','2015-09-05',0,0,7,0,0,3,0,0,0,0,0,0),(19,'women_squash','2015-06-08',0,0,0,0,0,8,0,3,0,0,0,0),(20,'ice_hockey','2015-06-07',0,0,0,2,0,0,0,0,0,0,7,0),(21,'coed_swimming','2015-09-06',12,20,50,0,10,0,10,0,0,0,0,0),(22,'women_soccer','2015-02-07',0,0,50,0,0,0,0,0,10,0,0,0);
/*!40000 ALTER TABLE `matches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `college` char(2) NOT NULL,
  `img_URL` varchar(1024) NOT NULL,
  `total` int(10) unsigned NOT NULL,
  `men_soccer` int(10) unsigned NOT NULL,
  `women_soccer` int(10) unsigned NOT NULL,
  `men_football` int(10) unsigned NOT NULL,
  `coed_football` int(10) unsigned NOT NULL,
  `men_xc` int(10) unsigned NOT NULL,
  `women_xc` int(10) unsigned NOT NULL,
  `borsodi_invitational` int(10) unsigned NOT NULL,
  `coed_table_tennis` int(10) unsigned NOT NULL,
  `coed_tennis` int(10) unsigned NOT NULL,
  `coed_volleyball` int(10) unsigned NOT NULL,
  `a_hoops` int(10) unsigned NOT NULL,
  `b_hoops` int(10) unsigned NOT NULL,
  `c_hoops` int(10) unsigned NOT NULL,
  `women_basketball` int(10) unsigned NOT NULL,
  `men_volleyball` int(10) unsigned NOT NULL,
  `women_volleyball` int(10) unsigned NOT NULL,
  `men_squash` int(10) unsigned NOT NULL,
  `women_squash` int(10) unsigned NOT NULL,
  `coed_bowling` int(10) unsigned NOT NULL,
  `coed_innertube_waterpolo` int(10) unsigned NOT NULL,
  `coed_swimming` int(10) unsigned NOT NULL,
  `ice_hockey` int(10) unsigned NOT NULL,
  `coed_softball` int(10) unsigned NOT NULL,
  `coed_ultimate` int(10) unsigned NOT NULL,
  `coed_golf` int(10) unsigned NOT NULL,
  `coed_billiards` int(10) unsigned NOT NULL,
  `coed_4x4_volleyball` int(10) unsigned NOT NULL,
  `coed_badminton` int(10) unsigned NOT NULL,
  `coed_soccer` int(10) unsigned NOT NULL,
  `coed_dodgeball` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `college` (`college`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='This table will store the scores for each college.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (1,'BK','https://upload.wikimedia.org/wikipedia/en/thumb/1/13/Berkeleyshield.png/220px-Berkeleyshield.png',12,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,12,0,0,0,0,0,0,0,0,0),(2,'BR','https://upload.wikimedia.org/wikipedia/en/3/30/Branford_College_shield.png',25,0,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,20,0,0,0,0,0,0,0,0,0),(3,'CC','https://upload.wikimedia.org/wikipedia/en/c/ce/Calhoun_College_shield.png',128,0,50,0,0,0,0,0,0,7,0,0,11,0,0,0,10,0,0,0,0,50,0,0,0,0,0,0,0,0,0),(4,'DC','https://upload.wikimedia.org/wikipedia/en/thumb/b/b3/Davenportshield.png/220px-Davenportshield.png',2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0),(5,'ES','https://upload.wikimedia.org/wikipedia/en/thumb/b/b7/EzraStilesshield.png/220px-EzraStilesshield.png',10,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,0),(6,'JE','http://upload.wikimedia.org/wikipedia/en/4/4e/JonathanEdwardsshield.png',126,0,110,0,0,0,0,0,0,3,0,0,0,0,0,0,5,0,8,0,0,0,0,0,0,0,0,0,0,0,0),(7,'MC','https://upload.wikimedia.org/wikipedia/en/thumb/7/7b/Morseshield.png/220px-Morseshield.png',25,0,0,0,0,0,0,0,0,0,0,0,7,8,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,0),(8,'PC','https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Piersonshield.png/220px-Piersonshield.png',3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,0,0,0,0),(9,'SY','https://upload.wikimedia.org/wikipedia/en/2/2c/Saybrook_shield.png',10,0,10,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(10,'SM','https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/Sillimanshield.png/220px-Sillimanshield.png',100,0,0,0,100,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(11,'TD','https://upload.wikimedia.org/wikipedia/en/5/53/Timothy_Dwight_shield.png',7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,0,0,0,0,0,0,0,0),(12,'TC','https://upload.wikimedia.org/wikipedia/en/thumb/4/44/Trumbullshield.png/220px-Trumbullshield.png',10,0,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `master` tinyint(1) NOT NULL DEFAULT '0',
  `college` char(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,1,'','','$2y$10$Np03AaWxspjiw7hDRnAS1OK.CARHygVKDBL6EJe6YxuDhydW4ZsNW','developer'),(10,1,'JE','Gabriel','$2y$10$NomoFy1KzoBxZF8l.mXbZO3Sv1J/1gl0hL7yJxPFZ7084PG40Ee3W','gabriel'),(18,1,'CC','gustavo','$2y$10$OOGh0CF2P4msJJhTpxkjTeD058y82VCbtS4ibwSNVJRBBwzHk8Gkm','gustavo');
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

-- Dump completed on 2015-12-11 16:33:08
