/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_locale_map` (
  `code` varchar(7) NOT NULL,
  `locale` varchar(8) NOT NULL,
  UNIQUE KEY `code` (`code`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
