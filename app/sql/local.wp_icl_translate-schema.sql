/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_translate` (
  `tid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_id` bigint(20) unsigned NOT NULL,
  `content_id` bigint(20) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field_type` varchar(160) NOT NULL,
  `field_format` varchar(16) NOT NULL,
  `field_translate` tinyint(4) NOT NULL,
  `field_data` longtext NOT NULL,
  `field_data_translated` longtext NOT NULL,
  `field_finished` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1796 DEFAULT CHARSET=utf8;
