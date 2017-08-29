/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wplnst_urls_locations_att` (
  `att_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `loc_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `scan_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`att_id`),
  KEY `loc_id` (`loc_id`),
  KEY `scan_id` (`scan_id`),
  KEY `attribute` (`attribute`(250)),
  KEY `value` (`value`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
