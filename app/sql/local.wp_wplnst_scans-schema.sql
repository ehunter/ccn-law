/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_wplnst_scans` (
  `scan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'scan',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ready` tinyint(1) NOT NULL DEFAULT '0',
  `hash` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` bigint(20) unsigned NOT NULL DEFAULT '0',
  `started_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `enqueued_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stopped_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `continued_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `finished_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trace` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `threads` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_threads` int(3) unsigned NOT NULL DEFAULT '0',
  `connect_timeout` int(4) unsigned NOT NULL DEFAULT '0',
  `request_timeout` int(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`scan_id`),
  UNIQUE KEY `hash` (`hash`),
  KEY `type` (`type`),
  KEY `name` (`name`(250)),
  KEY `status` (`status`),
  KEY `config` (`config`(250))
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
