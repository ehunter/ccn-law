/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_icl_reminders` (
  `id` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `url` text NOT NULL,
  `can_delete` tinyint(4) NOT NULL,
  `show` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
