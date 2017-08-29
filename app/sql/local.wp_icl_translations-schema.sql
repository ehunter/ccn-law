/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_translations` (
  `translation_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `element_type` varchar(36) NOT NULL DEFAULT 'post_post',
  `element_id` bigint(20) DEFAULT NULL,
  `trid` bigint(20) NOT NULL,
  `language_code` varchar(7) NOT NULL,
  `source_language_code` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`translation_id`),
  UNIQUE KEY `trid_lang` (`trid`,`language_code`),
  UNIQUE KEY `el_type_id` (`element_type`,`element_id`),
  KEY `trid` (`trid`),
  KEY `id_type_language` (`element_id`,`element_type`,`language_code`)
) ENGINE=InnoDB AUTO_INCREMENT=1508 DEFAULT CHARSET=utf8;
