DROP TABLE IF EXISTS `repositories`;
CREATE TABLE `repositories` (
  `repositoryId` int(10) unsigned NOT NULL,
  `name` text,
  `url` text,
  `createdDate` datetime DEFAULT NULL,
  `lastUpdated` datetime DEFAULT NULL,
  `description` text,
  `stars` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;