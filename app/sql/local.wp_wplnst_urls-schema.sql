/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wplnst_urls` (
  `url_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hash` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `scheme` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `query` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `scope` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_scan_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `last_status_level` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_status_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_curl_errno` int(3) unsigned NOT NULL DEFAULT '0',
  `last_request_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`url_id`),
  UNIQUE KEY `hash` (`hash`),
  KEY `url` (`url`(255)),
  KEY `scheme` (`scheme`),
  KEY `host` (`host`(250)),
  KEY `path` (`path`(250)),
  KEY `query` (`query`(250)),
  KEY `scope` (`scope`),
  KEY `last_scan_id` (`last_scan_id`),
  KEY `last_status_level` (`last_status_level`),
  KEY `last_status_code` (`last_status_code`),
  KEY `last_curl_errno` (`last_curl_errno`),
  KEY `last_request_at` (`last_request_at`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
