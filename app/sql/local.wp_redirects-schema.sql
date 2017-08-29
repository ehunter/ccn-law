/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_redirects` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `url_from` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url_to` varchar(256) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT '301',
  `type` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'url',
  `count` mediumint(9) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
