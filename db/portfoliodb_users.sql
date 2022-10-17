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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User','user@gmail.com',NULL,'$2y$10$ikQAdrtVTkobH07IYdpouOZhg6DR1rj9zCSCN25Vzhlwk1NLrADIi',NULL,NULL,'hLItRlSDz7uS66RoNJJRswE5YBigEcMy9CzeQ1IVtrk3r18C0lYCMxpZCEva','2022-09-22 14:19:12','2022-09-25 05:07:00'),(2,'hagneeb','hagneeb@gmail.com',NULL,'$2y$10$tTaoDLGIO5rq8b/Q5mAQhuu6giq2FwRhGeNB.mSykpqlIxqa6g9N6','hagneeb',NULL,NULL,'2022-09-23 23:14:06','2022-09-23 23:14:06'),(3,'tester','tester@gmail.com',NULL,'$2y$10$BA1gPbE1QLkvoDPSst6VZu1.HO5mnUrTtef3VVyqk/TJGckE.LPYa',NULL,NULL,NULL,'2022-09-25 05:17:35','2022-09-25 05:17:35'),(4,'demos','demo@gmail.com','2022-09-26 13:48:23','$2y$10$7Nnv16/wJCi/yyCx78PgpuYAA8.WHUXbvBRDEvsH4p1GUNVJoUdZ.','demo','202209292142202203112055download.jpg',NULL,'2022-09-25 05:51:50','2022-09-29 14:01:47'),(5,'hanif Iskandar','hanif27@gmail.com','2022-09-28 12:46:52','$2y$10$3OfzeudfnUh9OvK1n2N0rO2TqOhnYnUaohhT/dg5ZBFlZhn560aAa','hanif','202209301147neww.png','HXI5vo8ROaGKSdiIzYiIqz6BhpXRUsZg2HlZ6elsX0PA3dlkmzZzPQOMlpq3','2022-09-25 08:31:34','2022-10-02 01:48:06'),(6,'TEST','test@gmail.com','2022-09-27 13:55:42','$2y$10$QkEJ3NXu/Z8YX5wLGkBCJOCcQ.W4Iw45Q6a4TF3caD7T1jmWB6AXG','test',NULL,NULL,'2022-09-27 13:55:15','2022-09-27 13:55:42');
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

-- Dump completed on 2022-10-17 23:25:08
