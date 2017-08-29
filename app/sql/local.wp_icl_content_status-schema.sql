/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_content_status` (
  `rid` bigint(20) NOT NULL,
  `nid` bigint(20) NOT NULL,
  `timestamp` datetime NOT NULL,
  `md5` varchar(32) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `nid` (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
