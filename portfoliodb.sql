-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: portfoliodb
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_intro` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freelance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_intro` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'An Independent, self-motivated, fast learner and hardworking person who is looking for opportunities to extend my web development skills and knowledge. I have a lot of experience in HTML, CSS, Git Version Control, and Javascript. I am also familiar with Codeigniter 3, and Laravel 9.','Software Developer','MUHAMMAD HANIF BIN ISKANDAR','upload/about_images/1746849632657502.jpeg','30 May 1996','www.my-portfolio26.com.my','011-3612 4444','Selangor, Malaysia','26','Degree','muhdhanif0096@gmail.com','No','<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p>',NULL,'2022-10-17 20:59:39');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (2,'Muhammad Hanif','Hanif@gmail.com','Job Invitation','We are glad to take you on a board','2022-10-17 07:13:03',NULL),(3,'anoyny','anoy@gmail.com','good website','you website have a good performance','2022-10-17 21:03:12',NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homes`
--

DROP TABLE IF EXISTS `homes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `homes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homes`
--

LOCK TABLES `homes` WRITE;
/*!40000 ALTER TABLE `homes` DISABLE KEYS */;
INSERT INTO `homes` VALUES (1,'Your Title','Enter your short description','Your Phone Number','2024-04-28 07:55:10','2024-04-28 07:55:10');
/*!40000 ALTER TABLE `homes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_10_13_214928_create_homes_table',2),(6,'2022_10_14_044435_create_abouts_table',3),(7,'2022_10_16_131753_create_skills_table',4),(8,'2022_10_16_143035_remove_title_column_from_skills',5),(9,'2022_10_16_174833_create_resumes_table',6),(10,'2022_10_16_183503_create_works_table',7),(11,'2022_10_16_193853_create_contacts_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resumes`
--

DROP TABLE IF EXISTS `resumes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resumes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumes`
--

LOCK TABLES `resumes` WRITE;
/*!40000 ALTER TABLE `resumes` DISABLE KEYS */;
INSERT INTO `resumes` VALUES (1,'Education','BACHELOR OF COMPUTER SCIENCE ( SOFTWARE ENGINEERING)','2017-2021','UNIVERSITY MALAYSIA PAHANG, MY','<p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>','2022-10-16 10:09:03','2022-10-17 21:02:15'),(2,NULL,'DIPLOMA IN COMPUTER SCIENCE','2015 - 2017','UNIVERSITY MALAYSIA PAHANG, MY','<p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>','2022-10-16 10:14:22','2022-10-17 21:01:36'),(3,'Professional Experience','Programmer','2021 - Present','Selangor, MY','<ul>\r\n<li>Develop new functionality and features as requested by the client for 3 websites using the CodeIgniter framework and MySQL workbench for the database.</li>\r\n<li>Involve with bug fixing on functionality, performance, and database.</li>\r\n<li>Improving the website design and also making it more responsive to mobile devices using HTML, CSS, Javascript, and Bootstrap framework.</li>\r\n<li>Worked alongside system analyst, project manager, and user to understand new development of the project.</li>\r\n</ul>','2022-10-16 10:14:56','2022-10-16 11:21:24'),(4,NULL,'Programmer2','2021 - Present','Selangor, MY','<ul>\r\n<li>Develop new functionality and features as requested by the client for 3 websites using the CodeIgniter framework and MySQL workbench for the database.</li>\r\n<li>Involve with bug fixing on functionality, performance, and database.</li>\r\n<li>Improving the website design and also making it more responsive to mobile devices using HTML, CSS, Javascript, and Bootstrap framework.</li>\r\n<li>Worked alongside system analyst, project manager, and user to understand new development of the project.</li>\r\n</ul>','2022-10-16 10:14:56','2022-10-16 11:21:24');
/*!40000 ALTER TABLE `resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'HTML',100,'2022-10-16 06:42:12',NULL),(2,'CSS',100,'2022-10-16 06:45:10',NULL),(3,'JAVASCRIPT',80,'2022-10-16 06:45:22','2022-10-16 06:56:35'),(4,'PHP',100,'2022-10-16 06:45:41',NULL),(5,'MySQL',100,'2022-10-16 06:45:50',NULL),(7,'LARAVEL',75,'2022-10-16 06:46:22',NULL),(8,'CODEIGNITER',90,'2022-10-16 07:31:53',NULL),(9,'BOOTSTRAP2',80,'2022-10-16 07:32:09','2024-04-27 03:46:57');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User','user@gmail.com',NULL,'$2y$10$ikQAdrtVTkobH07IYdpouOZhg6DR1rj9zCSCN25Vzhlwk1NLrADIi',NULL,NULL,'hLItRlSDz7uS66RoNJJRswE5YBigEcMy9CzeQ1IVtrk3r18C0lYCMxpZCEva','2022-09-22 14:19:12','2022-09-25 05:07:00'),(2,'hagneeb','hagneeb@gmail.com',NULL,'$2y$10$tTaoDLGIO5rq8b/Q5mAQhuu6giq2FwRhGeNB.mSykpqlIxqa6g9N6','hagneeb',NULL,NULL,'2022-09-23 23:14:06','2022-09-23 23:14:06'),(3,'tester','tester@gmail.com',NULL,'$2y$10$BA1gPbE1QLkvoDPSst6VZu1.HO5mnUrTtef3VVyqk/TJGckE.LPYa',NULL,NULL,NULL,'2022-09-25 05:17:35','2022-09-25 05:17:35'),(4,'demos','demo@gmail.com','2022-09-26 13:48:23','$2y$10$7Nnv16/wJCi/yyCx78PgpuYAA8.WHUXbvBRDEvsH4p1GUNVJoUdZ.','demo','202209292142202203112055download.jpg',NULL,'2022-09-25 05:51:50','2022-09-29 14:01:47'),(5,'hanif qwe','hanif22@gmail.com','2022-09-28 12:46:52','$2y$10$CtG6V.kl3IW27kXexXmXmu.2hgBVjV4mH.j3GXQvy3TWhs6GvVMQ6','hanif','202209301147neww.png','b3970aFsxe1hFBZdTf3oWNFEOQ92EZ2UBiqgk0zxBmH86tQdxANSP0xn9pT4','2022-09-25 08:31:34','2022-10-17 22:06:20'),(6,'TEST','test@gmail.com','2022-09-27 13:55:42','$2y$10$QkEJ3NXu/Z8YX5wLGkBCJOCcQ.W4Iw45Q6a4TF3caD7T1jmWB6AXG','test',NULL,NULL,'2022-09-27 13:55:15','2022-09-27 13:55:42'),(7,'final','final@gmail.com',NULL,'$2y$10$UPsGiJZXxukB3.yWDeqsFuQr6CmBWVNZ//Gr/HZWtb.u2y1GRdFqG','finalday',NULL,NULL,'2022-11-20 14:54:30','2022-11-20 14:54:30'),(8,'Hanif','hanifiskandar@gmail.com','2024-04-27 10:55:42','$2y$10$CtG6V.kl3IW27kXexXmXmu.2hgBVjV4mH.j3GXQvy3TWhs6GvVMQ6','Iskandar',NULL,NULL,'2024-04-27 03:34:56','2024-04-27 03:34:56'),(9,'Hanif 28 April','hanif28@gmail.com','2024-04-28 03:56:56','$2y$10$.26IO8lGEARbzRHJOsz8Qu1H/8w8AIAaJwEsx/vrViw2a/uxaXVWW','hanif28',NULL,NULL,'2024-04-28 03:55:05','2024-04-28 03:56:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `works` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `works`
--

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;
INSERT INTO `works` VALUES (1,'E-ACE','upload/work_images/1746871559419134.JPG','Leave Management System','<div class=\"row\">\r\n<div class=\"col-lg-6\">\r\n<ul>\r\n<li><strong>Framework:&nbsp;</strong>Codeigniter</li>\r\n<li><strong>Language:&nbsp;</strong>HTML, CSS, JAVASCRIPT, PHP</li>\r\n<li><strong>Database:&nbsp;</strong>MYSQL</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid adipisci recusandae esse voluptate quidem iste reprehenderit? Delectus porro voluptate temporibus!</p>','2022-10-16 10:55:40','2022-10-17 06:22:44'),(2,'MyAPBESYS','upload/work_images/1746872169452718.JPG','Assetx Management System','<div class=\"row\">\r\n<div class=\"col-lg-6\">\r\n<ul>\r\n<li><strong>Framework:&nbsp;</strong>Codeigniter</li>\r\n<li><strong>Language:&nbsp;</strong>HTML, CSS, JAVASCRIPT, PHP</li>\r\n<li><strong>Database:&nbsp;</strong>MYSQL</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid adipisci recusandae esse voluptate quidem iste reprehenderit? Delectus porro voluptate temporibus!</p>','2022-10-16 11:05:22','2022-10-17 06:22:32'),(4,'MyPortfolio','upload/work_images/1746943475556307.JPG','Portfolio Management System','<div class=\"row\">\r\n<div class=\"col-lg-6\">\r\n<ul>\r\n<li><strong>Framework:&nbsp;</strong>Laravel 9, Bootstrap 5</li>\r\n<li><strong>Language:&nbsp;</strong>HTML, CSS, JAVASCRIPT, PHP</li>\r\n<li><strong>Database:&nbsp;</strong>MYSQL</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid adipisci recusandae esse voluptate quidem iste reprehenderit? Delectus porro voluptate temporibus!</p>','2022-10-17 05:58:45','2022-10-17 06:24:17');
/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29  0:16:46
