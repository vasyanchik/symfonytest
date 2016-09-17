
DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `published_at` datetime NOT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `short_text` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_text` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `news` (`id`, `published_at`, `is_published`, `short_text`, `full_text`)
VALUES
        (1,'2016-09-17 00:00:00',1,'hi there, this is short text','and this is full text of the news'),
        (2,'2016-09-19 00:00:00',1,'news no 2','news no 2 full\n'),
        (3,'2016-09-19 00:00:00',1,'news no 3','news no 3 full'),
        (4,'2016-09-16 00:00:00',1,'news no 5','news no 5 full'),
        (5,'2016-09-15 00:00:00',1,'news no 6','news no 6 full'),
        (6,'2016-09-17 00:00:00',1,'news no 7 ','news no 6 full'),
        (7,'2016-09-18 00:00:00',1,'news no 8','news no 8 full'),
        (8,'2016-09-17 00:00:00',1,'news no 9','news no 9 full'),
        (9,'2016-09-17 00:00:00',1,'news no 10','news no 10 full'),
        (10,'2016-09-20 00:00:00',1,'news no 4','news no 4 full');

