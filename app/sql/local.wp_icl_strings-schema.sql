/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_strings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(7) NOT NULL,
  `context` varchar(160) NOT NULL,
  `name` varchar(160) NOT NULL,
  `value` text NOT NULL,
  `string_package_id` bigint(20) unsigned DEFAULT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'LINE',
  `title` varchar(160) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `context_name` (`context`,`name`),
  KEY `language_context` (`language`,`context`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8;
