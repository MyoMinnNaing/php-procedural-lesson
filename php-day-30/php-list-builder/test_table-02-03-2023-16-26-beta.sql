-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_13
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

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
-- Table structure for table `test_table`
--

DROP TABLE IF EXISTS `test_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_table`
--

LOCK TABLES `test_table` WRITE;
/*!40000 ALTER TABLE `test_table` DISABLE KEYS */;
INSERT INTO `test_table` VALUES (86,'Layne Beatty Jr.',90,'2001-10-31 15:24:34'),(87,'Yessenia Graham',38710,'2007-10-21 12:50:52'),(88,'Mandy Heathcote',28240,'1976-05-03 21:15:44'),(89,'Marjorie Dickens',905732333,'2002-01-14 11:25:44'),(90,'Dr. Tess Beatty',91859272,'2016-10-30 10:20:35'),(91,'Anibal Hermann',72690,'1982-09-23 19:28:59'),(92,'Dr. Nicklaus Emard',3838762,'1974-04-30 18:56:32'),(93,'Annabelle Stehr Jr.',44581,'2014-01-22 06:18:07'),(94,'Mrs. Arvilla Stamm',580,'2003-04-29 06:32:13'),(95,'Roel Cormier',867531,'2014-06-15 11:44:31'),(96,'Dr. Domenica Windler',50284229,'1978-12-06 03:54:51'),(97,'Prof. Carlo Stark I',0,'2014-12-27 02:54:34'),(98,'Bella Dare',67201614,'1996-06-13 00:33:17'),(99,'Miss Eunice Muller PhD',9,'1973-09-28 03:08:34'),(100,'Evert Schimmel',0,'2003-03-22 09:04:27'),(101,'Gilda Reilly',52,'1972-04-20 09:41:44'),(102,'Sven Lynch',54809,'2002-03-26 14:36:49'),(103,'Dr. Braxton Mann',379,'2018-03-22 15:22:35'),(104,'May Prohaska',978549,'2012-01-29 05:11:28'),(105,'Brielle Roberts',3,'2021-05-27 01:43:14'),(106,'Golda Becker',81979008,'1978-09-23 10:04:29'),(107,'Mandy Conn',68941040,'1997-09-22 07:59:11'),(108,'Oceane Jacobi',17254,'2001-02-13 23:37:03'),(109,'Garfield Purdy',8677,'1976-10-28 06:02:02'),(110,'Sherman Bechtelar',33063029,'1998-06-30 05:57:11'),(111,'Allene Kub',134362,'2010-02-24 06:49:10'),(112,'Ms. Dahlia Sawayn IV',8314,'2003-11-02 20:24:13'),(113,'Pablo Ziemann',945163,'1995-12-08 15:03:03'),(114,'Bobby Howell Sr.',8488,'1995-05-30 11:53:54'),(115,'Addie Mayert II',65728,'2018-12-21 21:25:41'),(116,'Dahlia McClure',7175269,'2015-04-02 20:04:48'),(117,'Vida Leuschke',780257532,'1994-11-09 22:57:23'),(118,'Mr. Obie Dickinson',9803,'2007-12-07 18:13:18'),(119,'Robert Kiehn',648,'2003-05-09 23:22:38'),(120,'Meaghan Reilly',9262506,'2014-01-06 19:06:03'),(121,'Miss Lina Gorczany',392,'2015-03-23 13:30:37'),(122,'Jakob Wisozk',0,'1970-11-17 13:40:29'),(123,'Angelo Rau',893312,'2016-04-26 12:48:36'),(124,'Mr. Grover McDermott',535,'1971-09-01 07:23:06'),(125,'Dr. Ozella Rath',151311,'1994-09-16 01:15:39'),(126,'Uriel Stanton V',5959207,'1995-02-08 09:47:57'),(127,'Khalid Greenholt',6678385,'1994-02-03 04:14:38'),(128,'Wilburn Murphy',904966453,'2011-08-06 08:29:01'),(129,'Brice McDermott PhD',797090334,'1980-08-03 15:43:12'),(130,'Prof. Mose O\'Reilly',240,'2006-02-19 18:25:22'),(131,'Miss Lina Kirlin V',7,'2009-01-12 07:44:11'),(132,'Ms. Meaghan Mayert III',3,'1995-10-20 08:42:48'),(133,'Jennings McLaughlin',31,'1991-07-30 20:51:23'),(134,'Danny DuBuque Sr.',1043529,'1981-01-22 06:04:38'),(135,'Dayana Johns',7161,'1972-03-15 06:50:17'),(136,'Miss Marisol Frami',860264520,'2011-02-09 07:35:12'),(137,'Rosemary Koelpin IV',303787188,'2009-03-13 03:30:01'),(138,'Mr. Ezequiel Langworth',0,'1986-02-10 15:05:47'),(139,'Miss Delia Shanahan',5809384,'2021-05-11 02:52:03'),(140,'Kaylee Rau',349350941,'1992-07-31 03:01:21'),(141,'Dejon Breitenberg',75,'1991-07-16 23:17:49'),(142,'Prof. Marquis Hessel',8416011,'1976-07-31 18:31:39'),(143,'Sarai Dare',920,'1991-09-13 16:04:37'),(144,'Dax Lind Sr.',0,'1985-06-26 09:18:13'),(145,'Jolie Schmidt MD',3715877,'1998-09-17 23:26:39'),(146,'Clyde Okuneva',90376,'1988-08-07 12:50:02'),(147,'Miss Clare Spinka Sr.',18,'2009-06-15 18:11:12'),(148,'Reva Considine',2613951,'2022-01-14 19:16:09'),(149,'Keagan Balistreri MD',929,'1972-08-13 04:01:54'),(150,'Estella Oberbrunner',7543,'2016-08-29 00:37:03'),(151,'Nathan Tremblay',9753148,'2017-01-29 06:14:46'),(152,'Miss Graciela Nikolaus IV',49250,'2012-12-13 20:54:24'),(153,'Carey Sanford',710451352,'1971-08-15 21:14:53'),(154,'Adah Ruecker',89,'1991-07-25 10:01:06'),(155,'Prof. Alyce Williamson',37361,'1977-03-24 17:56:17'),(156,'Miss Claudine Kling DDS',238097,'2018-07-11 22:00:38'),(157,'Mrs. Theresa Considine IV',0,'1982-09-25 15:57:26'),(158,'Gunner Morar I',849,'1988-02-04 07:48:05'),(159,'Dr. Kane Tremblay',2212672,'1990-04-08 03:24:34'),(160,'Mike Little',64794,'1999-11-27 19:30:53'),(161,'Dr. Sonny Rau',101157,'1987-03-13 22:28:26'),(162,'Sonya Marvin',815435662,'1983-12-07 02:18:20'),(163,'Bell Tromp',76,'1984-07-06 18:42:49'),(164,'Jack Spinka',370,'1984-02-17 04:32:37'),(165,'Pasquale Ondricka',9344,'1998-01-13 23:41:12'),(166,'Mr. Brain Zulauf',70,'1997-01-13 23:53:49'),(167,'Heidi Blick',49671,'1977-09-07 02:20:14'),(168,'Kaycee Hessel',702915,'2018-03-22 19:27:13'),(169,'Earnest Romaguera',4990203,'2007-01-05 07:12:59'),(170,'Mittie Little',3707021,'2010-02-08 17:33:02'),(171,'Kadin Ebert',99340265,'1987-07-26 06:53:54'),(172,'Prof. Loyce Kuhic Sr.',32,'1999-12-08 06:07:22'),(173,'Gillian Schmitt',99,'1988-11-24 13:02:49'),(174,'Misael Sporer MD',1580,'1974-10-29 09:54:52'),(175,'Dariana Price',19,'1973-12-12 23:39:40'),(176,'Hope Boyle',0,'1984-11-23 11:04:46'),(177,'Duane Lynch',115698,'2011-09-03 20:05:43'),(178,'Kolby Hane III',896148612,'1974-08-24 07:19:20'),(179,'Margie Pollich IV',6731389,'2012-10-18 17:26:29'),(180,'Alexis Breitenberg',8228938,'2001-05-05 02:56:48'),(181,'Isabell Stroman',1955,'2017-06-16 04:22:26'),(182,'Norval Gottlieb DDS',0,'1989-07-23 23:27:50'),(183,'Vicente Lockman',9,'2012-04-30 00:51:35'),(184,'Mrs. Gilda Gusikowski',9,'1994-04-01 02:49:04'),(185,'Dr. Jamar Lueilwitz',4117182,'2001-05-24 06:42:24');
/*!40000 ALTER TABLE `test_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02 16:26:39
