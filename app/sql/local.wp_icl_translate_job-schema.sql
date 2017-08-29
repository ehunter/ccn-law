/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_translate_job` (
  `job_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rid` bigint(20) unsigned NOT NULL,
  `translator_id` int(10) unsigned NOT NULL,
  `translated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `manager_id` int(10) unsigned NOT NULL,
  `revision` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `rid` (`rid`,`translator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=436 DEFAULT CHARSET=utf8;
