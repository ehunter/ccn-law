/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_message_status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rid` bigint(20) unsigned NOT NULL,
  `object_id` bigint(20) unsigned NOT NULL,
  `from_language` varchar(10) NOT NULL,
  `to_language` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `md5` varchar(32) NOT NULL,
  `object_type` varchar(64) NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rid` (`rid`),
  KEY `object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
