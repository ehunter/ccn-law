/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_string_positions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `string_id` bigint(20) NOT NULL,
  `kind` tinyint(4) DEFAULT NULL,
  `position_in_page` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `string_id` (`string_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1349 DEFAULT CHARSET=utf8;
