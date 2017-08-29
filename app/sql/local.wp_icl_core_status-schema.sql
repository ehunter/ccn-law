/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_core_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rid` bigint(20) NOT NULL,
  `module` varchar(16) NOT NULL,
  `origin` varchar(64) NOT NULL,
  `target` varchar(64) NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
