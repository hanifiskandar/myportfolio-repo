CREATE DATABASE  IF NOT EXISTS `portfoliodb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portfoliodb`;
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

-- Dump completed on 2022-10-17 23:25:09
