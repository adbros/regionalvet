
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
DROP TABLE IF EXISTS `wpRV01_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpRV01_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpRV01_usermeta` WRITE;
/*!40000 ALTER TABLE `wpRV01_usermeta` DISABLE KEYS */;
INSERT INTO `wpRV01_usermeta` VALUES (1,1,'nickname','joeross'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wpRV01_capabilities','a:2:{s:13:\"administrator\";b:1;s:13:\"bbp_keymaster\";b:1;}'),(11,1,'wpRV01_user_level','10'),(12,1,'dismissed_wp_pointers','mass_page_creator_pointers_admin_pointers1_0_mass_page_creator_pointers_admin_pointers'),(13,1,'show_welcome_panel','1'),(15,1,'wpRV01_dashboard_quick_press_last_post_id','12483'),(16,1,'source_domain','dev.advertisingbros.com'),(17,1,'primary_blog','1'),(18,1,'session_tokens','a:2:{s:64:\"0db63bd19fc7914db124c55149fe07e9a6679591be4f60744cc0beaa82471058\";a:4:{s:10:\"expiration\";i:1485621723;s:2:\"ip\";s:15:\"104.236.152.200\";s:2:\"ua\";s:108:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36\";s:5:\"login\";i:1485448923;}s:64:\"f9ae3c204c05ee8f39eaff3ec68c8d045318741ecd0d4fa6ad032ea452ee6d03\";a:4:{s:10:\"expiration\";i:1485719824;s:2:\"ip\";s:15:\"104.236.152.167\";s:2:\"ua\";s:108:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36\";s:5:\"login\";i:1485547024;}}'),(59,1,'cpac-hide-review-notice','1'),(63,1,'closedpostboxes_ct_afc','a:1:{i:0;s:14:\"ct_information\";}'),(64,1,'metaboxhidden_ct_afc','a:2:{i:0;s:21:\"fusion_builder_layout\";i:1;s:7:\"slugdiv\";}'),(27,1,'closedpostboxes_slide','a:0:{}'),(28,1,'metaboxhidden_slide','a:2:{i:0;s:7:\"slugdiv\";i:1;s:21:\"mymetabox_revslider_0\";}'),(19,1,'wpRV01_user-settings','editor=html&libraryContent=browse&posts_list_mode=excerpt&hidetb=1&align=center&urlbutton=file&imgsize=full'),(20,1,'wpRV01_user-settings-time','1485449434'),(22,1,'closedpostboxes_page','a:0:{}'),(23,1,'metaboxhidden_page','a:6:{i:0;s:12:\"revisionsdiv\";i:1;s:10:\"postcustom\";i:2;s:16:\"commentstatusdiv\";i:3;s:11:\"commentsdiv\";i:4;s:7:\"slugdiv\";i:5;s:9:\"authordiv\";}'),(24,1,'nav_menu_recently_edited','43'),(25,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(26,1,'metaboxhidden_nav-menus','a:11:{i:0;s:19:\"add-post-type-slide\";i:1;s:29:\"add-post-type-avada_portfolio\";i:2;s:23:\"add-post-type-avada_faq\";i:3;s:33:\"add-post-type-themefusion_elastic\";i:4;s:12:\"add-post_tag\";i:5;s:15:\"add-post_format\";i:6;s:22:\"add-portfolio_category\";i:7;s:20:\"add-portfolio_skills\";i:8;s:18:\"add-portfolio_tags\";i:9;s:16:\"add-faq_category\";i:10;s:25:\"add-themefusion_es_groups\";}'),(53,2,'closedpostboxes_page','a:1:{i:0;s:21:\"mymetabox_revslider_0\";}'),(54,2,'metaboxhidden_page','a:6:{i:0;s:12:\"revisionsdiv\";i:1;s:10:\"postcustom\";i:2;s:16:\"commentstatusdiv\";i:3;s:11:\"commentsdiv\";i:4;s:7:\"slugdiv\";i:5;s:9:\"authordiv\";}'),(29,2,'nickname','brian'),(30,2,'first_name',''),(31,2,'last_name',''),(32,2,'description',''),(33,2,'rich_editing','true'),(34,2,'comment_shortcuts','false'),(35,2,'admin_color','fresh'),(36,2,'use_ssl','0'),(37,2,'show_admin_bar_front','true'),(41,2,'source_domain','dev.advertisingbros.com'),(40,2,'primary_blog','1'),(42,2,'wpRV01_capabilities','a:2:{s:13:\"administrator\";b:1;s:13:\"bbp_keymaster\";b:1;}'),(43,2,'wpRV01_user_level','10'),(44,2,'session_tokens','a:1:{s:64:\"fb2128d32ef58744c176e4530527703bc2920008014b8f3504d268d89eec8fea\";a:4:{s:10:\"expiration\";i:1479952560;s:2:\"ip\";s:12:\"73.160.6.226\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36\";s:5:\"login\";i:1479779760;}}'),(45,2,'wpRV01_dashboard_quick_press_last_post_id','12471'),(46,2,'wpRV01_user-settings','editor=tinymce&libraryContent=browse&advImgDetails=show&hidetb=1&mfold=o'),(47,2,'wpRV01_user-settings-time','1470510486'),(48,2,'closedpostboxes_slide','a:0:{}'),(49,2,'metaboxhidden_slide','a:2:{i:0;s:7:\"slugdiv\";i:1;s:21:\"mymetabox_revslider_0\";}'),(57,2,'cpac_current_model','slide'),(58,1,'edit_slide_per_page','20'),(55,1,'edit_page_per_page','150'),(56,1,'cpac_current_model','page'),(50,2,'nav_menu_recently_edited','43'),(51,2,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(52,2,'metaboxhidden_nav-menus','a:9:{i:0;s:19:\"add-post-type-slide\";i:1;s:29:\"add-post-type-avada_portfolio\";i:2;s:23:\"add-post-type-avada_faq\";i:3;s:12:\"add-post_tag\";i:4;s:15:\"add-post_format\";i:5;s:22:\"add-portfolio_category\";i:6;s:20:\"add-portfolio_skills\";i:7;s:18:\"add-portfolio_tags\";i:8;s:16:\"add-faq_category\";}'),(65,2,'author_email',''),(60,1,'closedpostboxes_dashboard','a:0:{}'),(61,1,'metaboxhidden_dashboard','a:0:{}'),(62,1,'layerslider_beta_program','1'),(66,2,'author_facebook',''),(67,2,'author_twitter',''),(68,2,'author_linkedin',''),(69,2,'author_dribble',''),(70,2,'author_gplus',''),(71,2,'author_custom',''),(72,1,'manageedit-shop_ordercolumnshidden','a:1:{i:0;s:15:\"billing_address\";}'),(73,2,'manageedit-shop_ordercolumnshidden','a:1:{i:0;s:15:\"billing_address\";}'),(74,1,'inbound_notification_translate','viewed'),(75,1,'inbound_notification_upgrade_to_pro','viewed'),(76,1,'cpac-hide-install-addons-notice','1'),(77,1,'inbound_notification_download-legacy-templates','viewed'),(78,1,'layerslider_help_wp_pointer','1');
/*!40000 ALTER TABLE `wpRV01_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

