/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_languages_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_code` varchar(7) NOT NULL,
  `display_language_code` varchar(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `language_code` (`language_code`,`display_language_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4294 DEFAULT CHARSET=utf8;
