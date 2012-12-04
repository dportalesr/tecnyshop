ALTER TABLE `medio_ambiente` DROP `src`;
ALTER TABLE `about` DROP `src`;

-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `aboutimgs`;
CREATE TABLE `aboutimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `about_id` int(10) unsigned DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `portada` tinyint(1) DEFAULT '0',
  `descripcion` text,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `medio_ambienteimgs`;
CREATE TABLE `medio_ambienteimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medio_ambiente_id` int(10) unsigned DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `portada` tinyint(1) DEFAULT '0',
  `descripcion` text,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2012-12-03 18:23:13
