/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_string_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `string_id` bigint(20) unsigned NOT NULL,
  `language` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `value` text,
  `translator_id` bigint(20) unsigned DEFAULT NULL,
  `translation_service` varchar(16) NOT NULL DEFAULT '',
  `batch_id` int(11) NOT NULL DEFAULT '0',
  `translation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `string_language` (`string_id`,`language`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;
