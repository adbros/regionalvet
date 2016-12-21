
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
DROP TABLE IF EXISTS `wpRV01_inbound_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_inbound_events` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `page_id` mediumint(20) NOT NULL,
  `variation_id` mediumint(9) NOT NULL,
  `form_id` mediumint(20) NOT NULL,
  `cta_id` mediumint(20) NOT NULL,
  `email_id` mediumint(20) NOT NULL,
  `list_id` mediumint(20) NOT NULL,
  `lead_id` mediumint(20) NOT NULL,
  `lead_uid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `event_details` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `source` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `funnel` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `datetime` datetime NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_inbound_events` WRITE;
/*!40000 ALTER TABLE `wpRV01_inbound_events` DISABLE KEYS */;
/*!40000 ALTER TABLE `wpRV01_inbound_events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

