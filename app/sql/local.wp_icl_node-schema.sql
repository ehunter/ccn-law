/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_node` (
  `nid` bigint(20) NOT NULL,
  `md5` varchar(32) NOT NULL,
  `links_fixed` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
