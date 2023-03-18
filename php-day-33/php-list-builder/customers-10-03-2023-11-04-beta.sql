-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: mysql.hostinger.ro    Database: u574849695_18
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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contactName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Rafaela Roob','Bryce','34144 Keebler Park Suite 150\nEast Janaeton, NM 59776-5385','Auershire','Honduras','2015-10-01 07:10:20'),(2,'Bette Koch','Scottie','4227 Jonathan Plains\nCronafurt, NC 01958-9342','Port Jayce','Germany','1993-07-31 04:10:00'),(3,'Miss Jennyfer O\'Reilly Sr.','Candace','43175 Bennett Spur Apt. 915\nEast Cristalhaven, CO 10012','Beattyland','Ecuador','2003-07-01 16:07:32'),(4,'Ilene Terry','Brittany','52415 Koelpin Summit\nNorth Hassan, UT 55828-1819','Lake Simoneview','Saint Vincent and the Grenadines','1986-02-20 20:54:11'),(5,'Frederique Mertz Sr.','Stephen','9533 Stefanie Pines Suite 454\nAlexandermouth, CT 72581-1963','Uptonland','Bulgaria','2012-05-05 10:31:37'),(6,'Miss Julia Feest','Lucinda','38729 Marcella Orchard Suite 590\nRomagueraview, TX 75362','Lake Floton','Vanuatu','2020-05-09 23:08:30'),(7,'Palma Renner Jr.','Jon','007 Omer Spur\nLake Ericaland, MS 78505-3626','Port Rogelio','Yemen','2011-03-20 01:35:26'),(8,'Silas Bergnaum I','Taya','8099 Blanca Extension\nPort Joannieview, OH 38693-6807','Pfeffertown','Colombia','2000-07-31 03:57:23'),(9,'Dr. Greg Johnston III','Hosea','40639 Ledner Roads Apt. 403\nPeggieburgh, GA 20913','Port Johannaville','Yemen','2005-03-25 00:36:47'),(10,'Mozelle Vandervort','Lupe','66882 Bryce Common Suite 117\nRathside, CT 30506-5184','Ryanport','India','1973-08-13 22:06:41'),(11,'Jamaal Keebler','Stephan','3795 Davis Vista\nNorth Kacie, PA 68297','Rosarioland','Svalbard & Jan Mayen Islands','2008-07-04 04:41:00'),(12,'Miss Adela Denesik V','Carolina','844 Perry Centers\nWest Meda, MD 11117-8975','Rosenbaumbury','Latvia','1995-07-28 19:59:14'),(13,'Cade Jenkins MD','Lolita','7738 Julius Garden Suite 865\nLake Mustafaside, MT 62469-4709','Borerberg','Cook Islands','1977-01-16 20:01:39'),(14,'Samir Dietrich DVM','Lionel','85875 Astrid Spurs\nOsinskifort, WV 56171-9725','Kertzmannton','Mongolia','1970-07-17 03:20:33'),(15,'Dr. Leonor Boehm DVM','Brenden','9343 Leanna Alley\nNorrismouth, DE 75364','Parisianport','Chile','1970-07-12 07:41:59'),(16,'Kenyon Connelly IV','Kasey','53125 Effertz Drive Apt. 595\nAldaside, AL 83261-4877','Bradtkemouth','Serbia','2001-02-03 17:40:01'),(17,'Miss Martina Upton MD','Adolph','16473 Wyman Harbor\nEviebury, LA 02007-1168','South Skye','Uzbekistan','1992-02-10 22:01:18'),(18,'Amina Hilll','Alexandre','1221 Mathew Flat Apt. 726\nWest Geovannystad, AZ 83106-3015','Lake Hal','Djibouti','2014-03-01 09:56:05'),(19,'Art O\'Keefe II','Flossie','90668 Toy Ports Apt. 413\nEast Terrancebury, OH 15715','Lueilwitzland','Chile','2003-05-15 03:46:09'),(20,'Mrs. Brianne Koss','Haven','511 Larissa Parkway\nNew Johannmouth, AK 33769-3340','North Andyport','Peru','1989-04-26 00:52:39'),(21,'Raina Reilly','Jesse','6730 Lawson Shoals\nPadbergtown, LA 75362-2063','West Buck','Papua New Guinea','1979-06-24 11:16:39'),(22,'Ms. Tessie Pollich V','Adele','0515 Erdman Corners Apt. 526\nReillymouth, NM 53935','Lorenzmouth','Taiwan','1992-07-14 14:44:39'),(23,'Cicero Franecki','Amiya','53533 Trystan Crossroad\nRaquelton, CT 05237','West Ora','Nigeria','2008-11-08 08:31:21'),(24,'Mara Howe','Presley','8981 Hintz Squares\nNorth Orrinstad, AR 68710-9387','West Lilliana','Iraq','2016-02-29 04:22:37'),(25,'Lennie Labadie','Grover','915 Paris Skyway\nKuhicmouth, IA 50676-9277','Port Lincolntown','Malawi','2007-03-30 05:01:04'),(26,'Erika Ankunding','Ruth','45313 Treutel Locks\nEast Andreanne, AL 57924-4610','Ernserland','Falkland Islands (Malvinas)','2009-07-20 05:28:01'),(27,'Miss Eleanore Monahan','Allie','64809 Aileen Cove\nEast Fidel, NJ 67512-4135','Lake Myriamshire','Iran','1992-02-27 19:17:45'),(28,'Nakia Cassin','Tod','93977 Edythe Isle Apt. 762\nWolffport, ME 18515','Leiftown','Spain','1988-10-31 20:48:12'),(29,'Cristobal Goldner','Harley','99666 Emilio Squares\nPort Kirsten, FL 81088-3371','New Willa','Bolivia','2019-10-23 18:15:58'),(30,'Mr. Jeffry McLaughlin','Sasha','125 Rodriguez Station\nNorth Mabelfort, OK 95585-7595','South Odaview','Gibraltar','1994-12-11 19:53:32'),(31,'Prof. Prudence Hoppe','Frances','37341 Demetris Canyon Suite 106\nPort Jalenhaven, DE 12092-2193','New Laurinechester','Jamaica','1971-01-14 00:39:30'),(32,'Tristin Langosh','Gerda','45638 Kimberly Crossing\nZboncakshire, OH 60392-2037','North Jeramyshire','Solomon Islands','1989-02-03 16:42:33'),(33,'Lacy Walter IV','Edison','5835 Lisandro Viaduct\nHansenhaven, MO 22511-6196','Starkside','Isle of Man','1999-12-02 21:40:17'),(34,'Barry Jones','Elwin','49276 Cyril Village\nSouth Leda, IL 64823-5965','North Selena','Dominican Republic','1976-08-07 05:41:55'),(35,'Velva Bernier','Willa','762 Shanahan Extension\nHintzhaven, UT 82238-2737','Lake Dillon','Comoros','1976-07-07 17:36:28'),(36,'Dr. Erich Welch','Elian','0590 Turner Stream Apt. 630\nTitusport, MN 52732','New Samantha','Ukraine','1972-09-26 14:46:22'),(37,'Laurence Dach','Gino','8616 Orn Extensions\nLake Omashire, NJ 69804','Ziememouth','French Polynesia','1973-12-11 09:57:42'),(38,'Susana Bartoletti','Karl','96461 Ledner Flat Suite 644\nWest Florencioburgh, AL 66788','Beckerton','Anguilla','2007-06-05 10:59:57'),(39,'Rhett Nolan','Nelle','9890 D\'Amore Gateway Suite 830\nLueilwitzborough, CA 25085-7939','Port Lorenzo','El Salvador','1995-12-24 03:09:47'),(40,'Carey Reichel III','Vida','48965 Trent Bridge\nSatterfieldport, DE 31953-3044','South Percyport','Zambia','1972-01-12 23:04:14'),(41,'Reyna Wisozk','Eve','8737 Nelson Burgs Apt. 629\nLake Glen, WV 94588-6975','Sipesland','Kazakhstan','2001-11-21 16:23:09'),(42,'Dolly West','Wilber','8294 Hills Hill\nNorth Dashawn, CO 48598','Greenfort','Bahamas','2020-04-23 19:49:13'),(43,'Randy Waelchi','Nikki','3036 Ceasar Inlet\nNorth Lailaborough, AR 32090','East Anikaland','China','2001-10-12 20:23:04'),(44,'Rowena Reinger','Vergie','6697 Smith Landing Apt. 054\nNovellachester, ME 44486-9472','Willchester','Dominican Republic','1998-01-24 06:54:54'),(45,'Torey Hamill III','Gunner','738 Uriel Extensions\nPort Dawson, ME 29225','Kassulkeville','Sao Tome and Principe','1994-05-25 09:41:05'),(46,'Kathryne Wiegand','Craig','3705 Tristian Drive Apt. 399\nLake Bertram, GA 42660-5213','West Van','Saint Kitts and Nevis','1989-12-07 06:46:38'),(47,'Ophelia Collier','Shanie','40688 Abernathy Landing Suite 167\nDavisborough, ME 68672','Port Arjuntown','Maldives','2018-06-10 12:55:32'),(48,'Maxime Murazik','Marcelo','0876 Tremayne Cape\nEast Delpha, KS 34696-8614','Kochborough','Burundi','1973-04-29 23:34:04'),(49,'Vincent Stokes MD','Shaun','15091 Bechtelar Grove\nLangport, NM 93345-8341','South Marian','Nigeria','1998-04-22 06:03:26'),(50,'Prof. Eliezer McDermott','Ruby','8464 Sanford Lock Apt. 172\nLake Marquise, AL 15445-8826','Noahport','Gibraltar','1977-03-14 21:38:01');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-10 11:04:17
