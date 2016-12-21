
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
DROP TABLE IF EXISTS `wpRV01_term_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wpRV01_term_taxonomy` DISABLE KEYS */;
INSERT INTO `wpRV01_term_taxonomy` VALUES (1,1,'category','',0,1),(2,2,'product_type','',0,0),(3,3,'product_type','',0,0),(4,4,'product_type','',0,0),(5,5,'product_type','',0,0),(6,6,'category','',0,6),(7,7,'category','',0,6),(8,8,'category','',0,1),(9,9,'post_tag','',0,2),(10,10,'post_tag','',0,0),(11,11,'post_tag','',0,0),(12,12,'post_tag','',0,2),(13,13,'post_tag','',0,0),(14,14,'post_tag','',0,2),(15,15,'post_tag','',0,1),(16,16,'slide-page','',0,2),(17,17,'slide-page','',0,3),(45,45,'slide-page','',0,1),(19,19,'slide-page','',0,0),(20,20,'slide-page','',0,1),(21,21,'slide-page','',0,2),(22,22,'portfolio_skills','',0,0),(23,23,'portfolio_category','',0,5),(24,24,'portfolio_category','',0,4),(25,25,'portfolio_category','',0,4),(26,26,'portfolio_category','',0,2),(27,27,'portfolio_category','',0,2),(28,28,'faq_category','',0,1),(29,29,'themefusion_es_groups','',0,2),(30,30,'portfolio_skills','',0,4),(31,31,'portfolio_skills','',0,1),(32,32,'faq_category','',0,1),(33,33,'faq_category','',0,2),(34,34,'faq_category','',0,2),(35,35,'portfolio_skills','',0,0),(36,36,'portfolio_skills','',0,1),(37,37,'nav_menu','',0,4),(38,38,'nav_menu','',0,161),(39,39,'nav_menu','',0,7),(40,40,'nav_menu','',0,5),(46,46,'slide-page','',0,0),(41,41,'slide-page','',0,4),(42,42,'slide-page','',0,1),(43,43,'nav_menu','',0,18);
/*!40000 ALTER TABLE `wpRV01_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

