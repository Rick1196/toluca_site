-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: blogrodolfodb
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `catdirsis`
--

DROP TABLE IF EXISTS `catdirsis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catdirsis` (
  `cvedirsis` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Clave',
  `cvemodsis` int(10) unsigned DEFAULT NULL COMMENT 'Modulo del sistema',
  `nomdirsis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre',
  `dirdirsis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Dirección',
  `icndirsis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Icono',
  `orddirsis` int(10) unsigned NOT NULL COMMENT 'Orden',
  PRIMARY KEY (`cvedirsis`),
  UNIQUE KEY `catdirsis_nomdirsis_unique` (`nomdirsis`),
  UNIQUE KEY `catdirsis_dirdirsis_unique` (`dirdirsis`),
  KEY `catdirsis_cvemodsis_foreign` (`cvemodsis`),
  CONSTRAINT `catdirsis_cvemodsis_foreign` FOREIGN KEY (`cvemodsis`) REFERENCES `catmodsis` (`cvemodsis`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Catalogo de direcciones del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catdirsis`
--

LOCK TABLES `catdirsis` WRITE;
/*!40000 ALTER TABLE `catdirsis` DISABLE KEYS */;
INSERT INTO `catdirsis` VALUES (1,1,'Alta Foro','altaForo','portrait',1),(2,2,'Listado Denuncias','listadodenuncia','portrait',1),(3,3,'Realizar denuncia','denuncia','portrait',1);
/*!40000 ALTER TABLE `catdirsis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catentrol`
--

DROP TABLE IF EXISTS `catentrol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catentrol` (
  `cveentrol` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Clave rol',
  `nomentrol` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre rol',
  `desentrol` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Descripción rol',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cveentrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Catalogo de roles usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catentrol`
--

LOCK TABLES `catentrol` WRITE;
/*!40000 ALTER TABLE `catentrol` DISABLE KEYS */;
INSERT INTO `catentrol` VALUES (1,'Desarrollador','Acceso Total','2018-11-04 21:21:50','2018-11-04 21:21:50'),(2,'Ciudadano','Denuncia y Seguimiento','2018-11-04 23:21:57','2018-11-04 23:21:57');
/*!40000 ALTER TABLE `catentrol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catmodsis`
--

DROP TABLE IF EXISTS `catmodsis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catmodsis` (
  `cvemodsis` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Clave',
  `nommodsis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nombre',
  `dirmodsis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Dirección',
  `icnmodsis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Icono',
  `ordmodsis` int(10) unsigned NOT NULL COMMENT 'Orden',
  PRIMARY KEY (`cvemodsis`),
  UNIQUE KEY `catmodsis_nommodsis_unique` (`nommodsis`),
  UNIQUE KEY `catmodsis_dirmodsis_unique` (`dirmodsis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Catalogo de módulos del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catmodsis`
--

LOCK TABLES `catmodsis` WRITE;
/*!40000 ALTER TABLE `catmodsis` DISABLE KEYS */;
INSERT INTO `catmodsis` VALUES (1,'Administracion','admin','domain',1),(2,'Seguimiento','seguimiento','flag',2),(3,'Reportes','reportes','queue',3);
/*!40000 ALTER TABLE `catmodsis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denunciareplies`
--

DROP TABLE IF EXISTS `denunciareplies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denunciareplies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_denuncia` int(10) unsigned NOT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `denunciareplies_id_denuncia_foreign` (`id_denuncia`),
  CONSTRAINT `denunciareplies_id_denuncia_foreign` FOREIGN KEY (`id_denuncia`) REFERENCES `tbldenuncia` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denunciareplies`
--

LOCK TABLES `denunciareplies` WRITE;
/*!40000 ALTER TABLE `denunciareplies` DISABLE KEYS */;
/*!40000 ALTER TABLE `denunciareplies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forums`
--

DROP TABLE IF EXISTS `forums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `id_topic` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forums_id_user_foreign` (`id_user`),
  KEY `id_topic` (`id_topic`),
  CONSTRAINT `forums_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`),
  CONSTRAINT `forums_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forums`
--

LOCK TABLES `forums` WRITE;
/*!40000 ALTER TABLE `forums` DISABLE KEYS */;
INSERT INTO `forums` VALUES (1,'Un nuevo paradigma para el emprendimiento en Toluca','',1,1,'2018-11-04 22:10:58','2018-11-04 22:10:58'),(2,'Retos y oportunidades de Toluca ante el cambio climático','',1,1,'2018-11-09 18:23:57','2018-11-09 18:23:57'),(3,'Las bibliotecas municipales como espacios comunitarios de aprendizaje','',1,1,'2018-11-09 18:24:13','2018-11-09 18:24:13'),(4,'Trascendencia en los servidores públicos','',1,1,'2018-11-09 18:58:17','2018-11-09 18:58:17');
/*!40000 ALTER TABLE `forums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2014_10_12_000000_create_users_table',1),(7,'2014_10_12_100000_create_password_resets_table',1),(8,'2018_10_25_103413_create_forums_table',1),(9,'2018_10_25_103938_create_topics_table',1),(11,'2018_10_25_104418_add_foreign_keys_foro_rodo',1),(12,'2018_10_26_173855_add_field_forum',1),(13,'2018_04_10_182243_create_table_catentrol',2),(14,'2018_04_10_182957_create_fk_users_to_rol',3),(15,'2018_04_16_172521_create_table_catmodsis',3),(16,'2018_04_16_173508_create_table_catdirsis',3),(17,'2018_04_16_190717_create_table_relperrol',3),(18,'2018_04_16_192138_create_fk_relperrol_to_tables',3),(19,'2018_04_16_212150_create_fk_catdirsis_to_catmodsis',3),(20,'2018_11_04_150945_denuncia',4),(21,'2018_11_04_151507_denunciareply',5),(22,'2018_11_04_151621_add_fk_tbldenucia',5),(24,'2018_11_04_175209_add_title_denuncia',6),(26,'2018_10_25_104131_create_replies_table',7),(27,'2018_11_04_182136_add_personalinfo_replies',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `relperrol`
--

DROP TABLE IF EXISTS `relperrol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relperrol` (
  `cveperrol` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'clave',
  `cveentrol` int(10) unsigned DEFAULT NULL COMMENT 'clave rol',
  `cvemodsis` int(10) unsigned DEFAULT NULL COMMENT 'clave modulo',
  `cvedirsis` int(10) unsigned DEFAULT NULL COMMENT 'clave dirección',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cveperrol`),
  KEY `relperrol_cveentrol_foreign` (`cveentrol`),
  KEY `relperrol_cvemodsis_foreign` (`cvemodsis`),
  KEY `relperrol_cvedirsis_foreign` (`cvedirsis`),
  CONSTRAINT `relperrol_cvedirsis_foreign` FOREIGN KEY (`cvedirsis`) REFERENCES `catdirsis` (`cvedirsis`) ON DELETE SET NULL,
  CONSTRAINT `relperrol_cveentrol_foreign` FOREIGN KEY (`cveentrol`) REFERENCES `catentrol` (`cveentrol`) ON DELETE SET NULL,
  CONSTRAINT `relperrol_cvemodsis_foreign` FOREIGN KEY (`cvemodsis`) REFERENCES `catmodsis` (`cvemodsis`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Relación permisos usuarios modulos dirección';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relperrol`
--

LOCK TABLES `relperrol` WRITE;
/*!40000 ALTER TABLE `relperrol` DISABLE KEYS */;
/*!40000 ALTER TABLE `relperrol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_forum` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_topic` int(10) unsigned DEFAULT NULL,
  `id_user` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `replies_id_forum_foreign` (`id_forum`),
  CONSTRAINT `replies_id_forum_foreign` FOREIGN KEY (`id_forum`) REFERENCES `forums` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldenuncia`
--

DROP TABLE IF EXISTS `tbldenuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldenuncia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL,
  `id_topic` int(10) unsigned NOT NULL,
  `responsable` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbldenuncia_id_user_foreign` (`id_user`),
  KEY `tbldenuncia_id_topic_foreign` (`id_topic`),
  CONSTRAINT `tbldenuncia_id_topic_foreign` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`),
  CONSTRAINT `tbldenuncia_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldenuncia`
--

LOCK TABLES `tbldenuncia` WRITE;
/*!40000 ALTER TABLE `tbldenuncia` DISABLE KEYS */;
INSERT INTO `tbldenuncia` VALUES (1,'BACHES AV. COLON','HGSDLGHSDDSIOGHSDIGHSDGDSPGHPIHGIPSHGPS',2,1,4,1,'2018-11-05 02:17:05','2018-11-05 02:17:05'),(2,'BACHES AV. INDUSTRIA AUTOMOTRIZ','Es imposible transitar por aqui',2,1,2,1,'2018-11-05 02:34:14','2018-11-05 02:34:14');
/*!40000 ALTER TABLE `tbldenuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Transparencia','',1,'2018-10-31 06:30:06','2018-10-31 06:30:06'),(2,'Infraestructura','',1,'2018-10-31 06:30:22','2018-10-31 06:30:22'),(3,'Tramites','',1,'2018-10-31 06:30:39','2018-10-31 06:30:39'),(4,'Servicios','',1,'2018-10-31 06:30:48','2018-10-31 06:30:48');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cveentrol` int(10) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_cveentrol_foreign` (`cveentrol`),
  CONSTRAINT `users_cveentrol_foreign` FOREIGN KEY (`cveentrol`) REFERENCES `catentrol` (`cveentrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Aldair','aldahir@toluca.com',1,'$2a$04$mYcX2xJp5w6w8cwKB8oTUudOjQlQ5bwEl6EZ.QBvYQnax.0c12hEa','IA5UYEk6UMdLQfQft6qmaB8pzC5l8qav4jcBLcXbCsO4yAGlLltL5MPnryj9','2018-10-31 05:50:17','2018-10-31 05:50:17'),(2,'Emmanuel Gonzalez','e@m.com',2,'$2y$12$oK5gJGUVC.Hf933Gv5UkOeV9st9SRzhGbduUj6ZKme/5caUI4pu1O','iotxkgNRoZ841HvLAmyXZVVrVJEYSsumk5hVI0Up6R4iKA3Ve0FngBzoKFrX','2018-11-04 23:22:56','2018-11-04 23:22:56');
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

-- Dump completed on 2019-01-29  4:23:31
