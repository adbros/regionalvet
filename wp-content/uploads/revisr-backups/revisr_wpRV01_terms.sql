
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
DROP TABLE IF EXISTS `wpRV01_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_terms` WRITE;
/*!40000 ALTER TABLE `wpRV01_terms` DISABLE KEYS */;
INSERT INTO `wpRV01_terms` VALUES (1,'Uncategorized','uncategorized',0),(2,'simple','simple',0),(3,'grouped','grouped',0),(4,'variable','variable',0),(5,'external','external',0),(6,'Creative','creative',0),(7,'Design','design',0),(8,'Videos','videos',0),(9,'artwork','artwork',0),(10,'Cat 1','cat1',0),(11,'Design','design',0),(12,'Photo','photo',0),(13,'Slideshow','slideshow',0),(14,'Video','video',0),(15,'Videos','videos',0),(16,'Avada Fixed Width','final_fixed_width',0),(17,'ER_Full Screen','er_full_screen',0),(45,'Integrated Primary Care Slider_Full screen','integrated_full-screen',0),(19,'Avada Home','avada-home',0),(20,'Avada Shortcode','shortcode',0),(21,'Avada Small','avada_small',0),(22,'Branding','branding',0),(23,'Cat 1','cat1',0),(24,'Cat 2','cat2',0),(25,'Cat 3','cat3',0),(26,'Cat 4','cat4',0),(27,'Cat 5','cat-5',0),(28,'Design Process','design-process',0),(29,'group1','group1',0),(30,'HTML/CSS','htmlcss',0),(31,'Logo Design','logo-design',0),(32,'Misc','misc',0),(33,'Pricing','pricing',0),(34,'Technical','technical',0),(35,'User Interface','user-interface',0),(36,'Web Development','web-development',0),(37,'404','404',0),(38,'Main','main',0),(39,'One Page','one-page',0),(40,'Top','top',0),(41,'Avada Full Width ( Cloned )','final_full_width-2',0),(42,'Avada Home ( Cloned )','avada-home-2',0),(43,'AdBros Nav 1','adbros-nav-1',0),(46,'Tour Our Hospital 1','tour1',0);
/*!40000 ALTER TABLE `wpRV01_terms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

