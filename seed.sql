-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: hotelmiranda
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,1,'Shower'),(2,1,'Towel'),(3,1,'Bathup'),(4,2,'AC'),(5,2,'Double Bed'),(6,2,'Towel'),(7,2,'Bathup'),(8,2,'LED TV'),(9,2,'Wifi'),(10,3,'Double Bed'),(11,3,'Towel'),(12,3,'LED TV'),(13,4,'Shower'),(14,4,'Towel'),(15,4,'Cofee Set'),(16,4,'Wifi'),(17,5,'AC'),(18,5,'Bathup'),(19,5,'Cofee Set'),(20,5,'LED TV'),(21,6,'AC'),(22,6,'Bathup'),(23,6,'LED TV'),(24,6,'Wifi'),(25,7,'Shower'),(26,7,'Towel'),(27,7,'Bathup'),(28,7,'Cofee Set'),(29,7,'LED TV'),(30,8,'Shower'),(31,8,'Towel'),(32,8,'Cofee Set'),(33,9,'AC'),(34,9,'Bathup'),(35,9,'LED TV'),(36,9,'Wifi'),(37,10,'AC'),(38,10,'Cofee Set'),(39,10,'Wifi');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `guest` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `orderdate` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `roomid` int NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `roomid` (`roomid`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`roomid`) REFERENCES `rooms` (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Juana Kessler III','https://avatars.githubusercontent.com/u/45555600','2024-07-04','2024-08-29','2024-09-08','Animi cruciamentum vitiosus aptus alter communis suggero. Tumultus ager recusandae. Tremo una ipsum aperte toties.','check out',1),(2,'Benny Volkman','https://avatars.githubusercontent.com/u/62750385','2024-01-29','2024-08-28','2024-09-04','Decretum aegre deficio nam. Versus astrum ubi cras avarus absconditus unde triduana varius tempore. Aperio callide cubitum astrum.','in progress',2),(3,'Deborah Nolan','https://avatars.githubusercontent.com/u/55026485','2023-12-17','2024-08-27','2024-09-17',NULL,'check out',3),(4,'Ross Upton V','https://avatars.githubusercontent.com/u/62776677','2024-07-01','2024-08-27','2024-09-12','Voluptates dedico velit sponte eius accusamus.','in progress',4),(5,'Dianna Weissnat','https://avatars.githubusercontent.com/u/37381422','2024-06-06','2024-08-26','2024-08-30',NULL,'in progress',5),(6,'Wade Beier','https://avatars.githubusercontent.com/u/97126821','2023-10-06','2024-08-26','2024-09-20',NULL,'check in',6),(7,'Carla Stoltenberg','https://avatars.githubusercontent.com/u/55612038','2024-03-12','2024-08-25','2024-09-15','Acer theatrum amo trado tubineus demonstro eius corroboro. Sumo una comptus utrum conventus accusamus cito vicissitudo uterque. Sono spiritus suscipio demum tibi volup circumvenio tero.','check in',7),(8,'Mona Hintz Sr.','https://avatars.githubusercontent.com/u/21478411','2023-10-06','2024-08-24','2024-09-07','Uredo vel sordeo deserunt adhaero reiciendis. Contego cibo admoveo delectatio autem accommodo spoliatio caveo tergeo. Tero aequitas demitto.','check in',8),(9,'Willard Padberg DDS','https://avatars.githubusercontent.com/u/75096931','2024-07-29','2024-08-24','2024-09-17','Vulnero laudantium unus eveniet possimus. At vix conforto.','check out',9),(10,'Irma Jacobson','https://avatars.githubusercontent.com/u/63400057','2024-08-22','2024-08-23','2024-09-12','Celo fuga civitas sumptus.','in progress',10);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `archived` tinyint(1) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'2022-12-17','Lue Erdman','Lue.Erdman@gmail.com','(452) 374-4895 x99531','Trucido error itaque sequi venustas aegrotatio calamitas dolore adopto. Tertius vetus timor ex clam.',0),(2,'2020-07-31','Coby Rosenbaum','Coby_Rosenbaum98@gmail.com','590-873-7676 x71551','Depraedor armarium adipiscor. Venia ultio alii carpo aperte demens. Vigor assentator demum.',0),(3,'2022-05-16','Bria Hilpert','Bria.Hilpert@yahoo.com','379.916.7985 x57401','Cavus desparatus coerceo adulescens volup tutamen turba surculus speculum demo. Cado astrum sustineo uberrime magni consectetur dolorum terebro.',0),(4,'2019-12-09','Piper Terry','Piper.Terry@yahoo.com','1-617-629-4690','Cruciamentum textus thesaurus decerno trepide. Quidem una cribro. Conspergo speculum aestivus utique creptio ustilo omnis conitor.',0),(5,'2018-02-12','Khalid Ebert','Khalid.Ebert@yahoo.com','(336) 288-2148 x171','Voco vociferor acquiro adamo.',1),(6,'2016-07-31','Elvie Bahringer','Elvie.Bahringer@gmail.com','431.521.8500 x84666','Ademptio depromo vallum consequatur dolorem velut maiores abundans acer. Vulnus vivo attollo tremo undique. Caelum confido laudantium thermae aequitas aegrus curto audentia vociferor solutio.',0),(7,'2016-08-22','Aiyana Carroll','Aiyana.Carroll6@gmail.com','1-578-292-8381 x74816','Sublime anser cernuus clam adeo tempora adulescens. Universe capillus cultura defessus tracto adnuo repellat deduco.',0),(8,'2020-03-05','Audrey Johnston','Audrey_Johnston@hotmail.com','727-576-3856','Volva tollo virgo excepturi avarus maxime subnecto.',0),(9,'2018-07-04','Oma Sawayn-Kling','Oma_Sawayn-Kling@hotmail.com','971.342.9102','Benevolentia arcesso sortitus decipio distinctio approbo condico aperio. Crinis stultus tantillus celer certus harum casso id degusto depereo.',0),(10,'2020-03-30','Keyshawn Greenholt','Keyshawn_Greenholt@yahoo.com','(366) 999-4612 x424','Magnam depraedor cubicularis triumphus vicinus consequatur possimus. Clam ter demens curso accendo dolore crastinus. Vorax decens debeo culpa venustas similique voro.',0);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `offer` int NOT NULL,
  `available` tinyint(1) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'Room 875','Double Bed',285,133,1),(2,'Room 691','Double Bed',247,120,1),(3,'Room 859','Single Bed',218,217,1),(4,'Room 251','Double Superior',220,218,0),(5,'Room 703','Double Bed',258,252,0),(6,'Room 793','Single Bed',204,160,0),(7,'Room 380','Single Bed',336,128,1),(8,'Room 553','Suite',323,208,1),(9,'Room 93','Double Superior',310,299,1),(10,'Room 545','Double Bed',237,106,1);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_images`
--

DROP TABLE IF EXISTS `rooms_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_images` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `rooms_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_images`
--

LOCK TABLES `rooms_images` WRITE;
/*!40000 ALTER TABLE `rooms_images` DISABLE KEYS */;
INSERT INTO `rooms_images` VALUES (1,'https://picsum.photos/seed/ESDP4gxoB/640/480',1),(2,'https://picsum.photos/seed/XSDXuoj/640/480',2),(3,'https://picsum.photos/seed/Pud3NAO/640/480',3),(4,'https://picsum.photos/seed/tdt6xP/640/480',3),(5,'https://picsum.photos/seed/P3pcAVG/640/480',4),(6,'https://picsum.photos/seed/gqWhq/640/480',5),(7,'https://picsum.photos/seed/YJJza/640/480',6),(8,'https://picsum.photos/seed/qpZomsLu/640/480',6),(9,'https://picsum.photos/seed/7zUZN1KhL5/640/480',7),(10,'https://picsum.photos/seed/4P8rxUE7v/640/480',8),(11,'https://picsum.photos/seed/vpCOnp/640/480',8),(12,'https://picsum.photos/seed/NEp929xG8/640/480',9),(13,'https://picsum.photos/seed/YDVdx/640/480',10),(14,'https://picsum.photos/seed/Z8Nrhres8/640/480',10);
/*!40000 ALTER TABLE `rooms_images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-17 10:30:45
