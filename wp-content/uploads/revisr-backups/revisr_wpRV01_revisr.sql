
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
DROP TABLE IF EXISTS `wpRV01_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text COLLATE utf8mb4_unicode_ci,
  `event` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_revisr` WRITE;
/*!40000 ALTER TABLE `wpRV01_revisr` DISABLE KEYS */;
INSERT INTO `wpRV01_revisr` VALUES (1,'2016-12-21 17:43:11','Successfully created a new repository.','init','joeross'),(2,'2016-12-21 17:43:49','Successfully backed up the database.','backup','joeross'),(3,'2016-12-21 17:45:21','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=7c571d2&success=true\">#7c571d2</a> to the local repository.','commit','joeross'),(4,'2016-12-21 17:45:21','Error pushing changes to the remote repository.','error','joeross'),(5,'2016-12-21 17:47:50','Error pushing changes to the remote repository.','error','joeross'),(6,'2016-12-21 17:49:34','Error pushing changes to the remote repository.','error','joeross'),(7,'2016-12-21 17:51:28','Pulled <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=0e5dcb5\">#0e5dcb5</a> from origin/master.','pull','joeross'),(8,'2016-12-21 17:52:30','Successfully pushed 2 commits to origin/master.','push','joeross');
/*!40000 ALTER TABLE `wpRV01_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

