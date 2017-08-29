/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_translation_status` (
  `rid` bigint(20) NOT NULL AUTO_INCREMENT,
  `translation_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `translator_id` bigint(20) NOT NULL,
  `needs_update` tinyint(4) NOT NULL,
  `md5` varchar(32) NOT NULL,
  `translation_service` varchar(16) NOT NULL,
  `batch_id` int(11) NOT NULL DEFAULT '0',
  `translation_package` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `links_fixed` tinyint(4) NOT NULL DEFAULT '0',
  `_prevstate` longtext,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `translation_id` (`translation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=436 DEFAULT CHARSET=utf8;
