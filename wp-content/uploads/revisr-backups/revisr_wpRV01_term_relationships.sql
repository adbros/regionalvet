
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
DROP TABLE IF EXISTS `wpRV01_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_term_relationships` WRITE;
/*!40000 ALTER TABLE `wpRV01_term_relationships` DISABLE KEYS */;
INSERT INTO `wpRV01_term_relationships` VALUES (1,1,0),(11475,38,0),(11476,38,0),(11477,38,0),(191,23,0),(191,24,0),(191,25,0),(192,24,0),(192,25,0),(192,26,0),(192,30,0),(192,31,0),(193,23,0),(193,25,0),(193,27,0),(193,30,0),(195,23,0),(195,25,0),(195,26,0),(195,30,0),(195,36,0),(196,23,0),(196,24,0),(198,23,0),(198,24,0),(198,27,0),(198,30,0),(1876,32,0),(1877,33,0),(1878,34,0),(1879,28,0),(1880,34,0),(1881,33,0),(11479,38,0),(11480,38,0),(11481,38,0),(11482,38,0),(11483,38,0),(11484,38,0),(11485,39,0),(11486,39,0),(11487,39,0),(11488,39,0),(11489,39,0),(11490,39,0),(11491,39,0),(11492,38,0),(11493,38,0),(11494,38,0),(11495,38,0),(11496,38,0),(11497,38,0),(11498,38,0),(11499,38,0),(11500,38,0),(11501,38,0),(11504,38,0),(11505,38,0),(11506,38,0),(11507,38,0),(11508,38,0),(11509,38,0),(11510,38,0),(213,14,0),(202,9,0),(202,12,0),(202,14,0),(202,6,0),(202,7,0),(202,8,0),(207,6,0),(207,7,0),(209,6,0),(209,7,0),(211,6,0),(211,7,0),(213,6,0),(213,7,0),(4052,29,0),(215,9,0),(215,12,0),(215,15,0),(215,6,0),(215,7,0),(4055,29,0),(9548,17,0),(12404,43,0),(12316,45,0),(9578,17,0),(9611,16,0),(9613,16,0),(9688,16,0),(9719,21,0),(9722,21,0),(12406,43,0),(10893,20,0),(11511,38,0),(11512,38,0),(11513,38,0),(11514,38,0),(11515,38,0),(11516,38,0),(11517,38,0),(11518,38,0),(11519,38,0),(11520,38,0),(11521,38,0),(11522,38,0),(11523,38,0),(11524,38,0),(11525,38,0),(11526,38,0),(11527,38,0),(11528,38,0),(11529,38,0),(11530,38,0),(11531,38,0),(11532,38,0),(11533,38,0),(11534,37,0),(11535,37,0),(11536,37,0),(11537,37,0),(11538,38,0),(11539,38,0),(11540,38,0),(11541,38,0),(11542,38,0),(11543,38,0),(11544,38,0),(11545,38,0),(11546,38,0),(11547,38,0),(11548,38,0),(11549,38,0),(11550,38,0),(11551,38,0),(11552,38,0),(11553,38,0),(11554,38,0),(11555,38,0),(11556,38,0),(11557,38,0),(11558,38,0),(11559,38,0),(11560,38,0),(11561,38,0),(11562,38,0),(11563,38,0),(11564,38,0),(11565,38,0),(11566,38,0),(11567,38,0),(11568,38,0),(11569,38,0),(11570,40,0),(11571,40,0),(11572,40,0),(11573,38,0),(11574,38,0),(11575,38,0),(11576,38,0),(11577,38,0),(11578,38,0),(11579,38,0),(11580,38,0),(11581,38,0),(11582,38,0),(11583,38,0),(11584,38,0),(11585,38,0),(11586,38,0),(11587,38,0),(11588,38,0),(11589,38,0),(11590,38,0),(11591,38,0),(11592,38,0),(11593,38,0),(11594,38,0),(11595,38,0),(11596,38,0),(11597,38,0),(11598,38,0),(11599,38,0),(11600,38,0),(11601,38,0),(11602,38,0),(11603,38,0),(11604,38,0),(11605,38,0),(11606,38,0),(11607,38,0),(11608,38,0),(11609,38,0),(11610,40,0),(11611,40,0),(11612,38,0),(11613,38,0),(11614,38,0),(11615,38,0),(11616,38,0),(11617,38,0),(11618,38,0),(11619,38,0),(11620,38,0),(11621,38,0),(11622,38,0),(11623,38,0),(11624,38,0),(11625,38,0),(11626,38,0),(11627,38,0),(11628,38,0),(11629,38,0),(11630,38,0),(11631,38,0),(11632,38,0),(11633,38,0),(11634,38,0),(11635,38,0),(11636,38,0),(11637,38,0),(11638,38,0),(11639,38,0),(11640,38,0),(11641,38,0),(11642,38,0),(11643,38,0),(11644,38,0),(11645,38,0),(11646,38,0),(11647,38,0),(11648,38,0),(11649,38,0),(11650,38,0),(11651,38,0),(11652,38,0),(11653,38,0),(11654,38,0),(12405,43,0),(11838,43,0),(11837,43,0),(12022,42,0),(11862,43,0),(11734,43,0),(12152,43,0),(11871,17,0),(11798,41,0),(9613,41,0),(12391,43,0),(12460,43,0),(12021,41,0),(12022,41,0),(12026,41,0),(12410,43,0),(12409,43,0),(12408,43,0),(12461,43,0),(12153,43,0),(12151,43,0),(12407,43,0),(12462,43,0),(12520,43,0),(12530,47,0),(12531,47,0),(12532,47,0),(11746,41,0),(12542,48,0);
/*!40000 ALTER TABLE `wpRV01_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

