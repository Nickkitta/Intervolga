-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: Comments
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comms`
--

DROP TABLE IF EXISTS `comms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comms`
--

LOCK TABLES `comms` WRITE;
/*!40000 ALTER TABLE `comms` DISABLE KEYS */;
INSERT INTO `comms` VALUES (1,'Hello world. I am Nick! It is beatiful film!'),(2,'Мне не понравилось данное произведение! Показалось слишком неинтересным и даже детским. НЕ РЕКОМЕНДУЮ к просмотру'),(3,'Вроде хорошее кино, мне всего хватило'),(4,'А у вас тут весело конечно'),(5,'Этот фильм полностью погрузил меня в свою атмосферу. Уникальный сюжет, потрясающая актерская игра и великолепная режиссура создали настоящий шедевр. Я не могу забыть его мощное впечатление и прекрасно отработанные детали каждой сцены.'),(6,'Фильм был невероятно трогательным и захватывающим. Он перенес меня в мир главных героев и заставил переживать с ними каждую эмоцию. Отличные визуальные эффекты и непредсказуемый сюжет только добавили интереса и волнения.'),(7,'Сюжет фильма был настолько непредсказуемым, что я не мог свести глаз с экрана. Актерская игра была великолепной, особенно показательными были монологи главного героя. Фильм оставил во мне глубокое впечатление и мысли на долгое время.');
/*!40000 ALTER TABLE `comms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-23 14:03:12
