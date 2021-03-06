/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wplnst_urls_status` (
  `url_id` bigint(20) unsigned NOT NULL,
  `scan_id` bigint(20) unsigned NOT NULL,
  `status_level` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `curl_errno` int(3) unsigned NOT NULL DEFAULT '0',
  `redirect_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_steps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_url_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `redirect_url_status` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `redirect_curl_errno` int(3) unsigned NOT NULL DEFAULT '0',
  `headers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers_request` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phase` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `started_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `request_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_objects` int(9) unsigned NOT NULL DEFAULT '0',
  `total_posts` int(9) unsigned NOT NULL DEFAULT '0',
  `total_comments` int(9) unsigned NOT NULL DEFAULT '0',
  `total_blogroll` int(9) unsigned NOT NULL DEFAULT '0',
  `total_time` decimal(3,3) unsigned NOT NULL DEFAULT '0.000',
  `total_bytes` bigint(20) unsigned NOT NULL,
  `requests` int(4) unsigned NOT NULL DEFAULT '0',
  `rechecked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`url_id`,`scan_id`),
  KEY `url_id` (`url_id`),
  KEY `scan_id` (`scan_id`),
  KEY `status_level` (`status_level`),
  KEY `status_code` (`status_code`),
  KEY `curl_errno` (`curl_errno`),
  KEY `redirect_url_id` (`redirect_url_id`),
  KEY `redirect_url_status` (`redirect_url_status`),
  KEY `phase` (`phase`),
  KEY `total_objects` (`total_objects`),
  KEY `total_posts` (`total_posts`),
  KEY `total_comments` (`total_comments`),
  KEY `total_blogroll` (`total_blogroll`),
  KEY `total_time` (`total_time`),
  KEY `total_bytes` (`total_bytes`),
  KEY `rechecked` (`rechecked`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
