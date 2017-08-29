/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_translation_batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_name` text NOT NULL,
  `tp_id` int(11) DEFAULT NULL,
  `ts_url` text,
  `last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
