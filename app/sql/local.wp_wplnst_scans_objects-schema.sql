/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wplnst_scans_objects` (
  `scan_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `object_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `object_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`scan_id`,`object_id`,`object_type`),
  KEY `scan_id` (`scan_id`),
  KEY `object_type` (`object_type`),
  KEY `object_date_gmt` (`object_date_gmt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
