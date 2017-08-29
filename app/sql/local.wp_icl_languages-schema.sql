/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(7) NOT NULL,
  `english_name` varchar(128) NOT NULL,
  `major` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL,
  `default_locale` varchar(8) DEFAULT NULL,
  `tag` varchar(8) DEFAULT NULL,
  `encode_url` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  UNIQUE KEY `english_name` (`english_name`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
