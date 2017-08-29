/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_flags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_code` varchar(10) NOT NULL,
  `flag` varchar(32) NOT NULL,
  `from_template` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang_code` (`lang_code`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
