
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_revisr` WRITE;
/*!40000 ALTER TABLE `wpRV01_revisr` DISABLE KEYS */;
INSERT INTO `wpRV01_revisr` VALUES (1,'2016-12-21 17:43:11','Successfully created a new repository.','init','joeross'),(2,'2016-12-21 17:43:49','Successfully backed up the database.','backup','joeross'),(3,'2016-12-21 17:45:21','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=7c571d2&success=true\">#7c571d2</a> to the local repository.','commit','joeross'),(4,'2016-12-21 17:45:21','Error pushing changes to the remote repository.','error','joeross'),(5,'2016-12-21 17:47:50','Error pushing changes to the remote repository.','error','joeross'),(6,'2016-12-21 17:49:34','Error pushing changes to the remote repository.','error','joeross'),(7,'2016-12-21 17:51:28','Pulled <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=0e5dcb5\">#0e5dcb5</a> from origin/master.','pull','joeross'),(8,'2016-12-21 17:52:30','Successfully pushed 2 commits to origin/master.','push','joeross'),(9,'2017-01-26 17:23:59','Successfully backed up the database.','backup','joeross'),(10,'2017-01-26 17:24:03','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=6975e68&success=true\">#6975e68</a> to the local repository.','commit','joeross'),(11,'2017-01-26 17:24:09','Successfully pushed 1 commit to origin/master.','push','joeross'),(12,'2017-01-27 20:10:28','Successfully backed up the database.','backup','joeross'),(13,'2017-01-27 20:10:31','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=21c0d27&success=true\">#21c0d27</a> to the local repository.','commit','joeross'),(14,'2017-01-27 20:10:39','Successfully pushed 1 commit to origin/master.','push','joeross'),(15,'2017-02-02 18:10:40','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=1efcd01&success=true\">#1efcd01</a> to the local repository.','commit','joeross'),(16,'2017-02-02 18:10:46','Successfully pushed 1 commit to origin/master.','push','joeross'),(17,'2017-02-02 21:32:08','Successfully backed up the database.','backup','joeross'),(18,'2017-02-02 21:32:09','Committed <a href=\"http://dev.advertisingbros.com/regionalvet/wp-admin/admin.php?page=revisr_view_commit&commit=34c23d9&success=true\">#34c23d9</a> to the local repository.','commit','joeross'),(19,'2017-02-02 21:32:14','Successfully pushed 1 commit to origin/master.','push','joeross'),(20,'2017-03-13 16:11:15','Successfully backed up the database.','backup','joeross'),(21,'2017-03-13 16:11:20','There was an error committing the changes to the local repository.','error','joeross'),(22,'2017-03-14 12:52:58','Successfully backed up the database.','backup','joeross'),(23,'2017-03-14 12:53:01','There was an error committing the changes to the local repository.','error','joeross');
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

