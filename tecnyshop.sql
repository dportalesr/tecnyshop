-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `about` (`id`, `src`, `descripcion`, `created`) VALUES
(1,	'upload/img03.jpg',	'<p>Tecny Shop como parte del grupo europeo Tecny Farma ha firmado convenios de colaboraci&oacute;n para representar en M&eacute;xico a marcas y productos l&iacute;deres en el mundo ofreciendo a los fabricantes de muebles, arquitectos y dise&ntilde;adores de interiores de alto perfil en M&eacute;xico una alternativa para que sus proyectos se realicen con est&aacute;ndares mundiales iniciando por los insumos requeridos en sus proyectos</p>\r\n<p>&nbsp;</p>\r\n<p>Solo el acabado PERFECTO se logra si se utilizan los insumos PERFECTOS en la fabricaci&oacute;n.</p>\r\n<p>&nbsp;</p>\r\n<p>INSUMOS PARA LA INDUSTRIA DEL MUEBLE E INTERIORISMO DE ALTO PERFIL</p>',	'2012-11-30 17:13:55');

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `enlace` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `caducidad` date DEFAULT NULL,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `banners` (`id`, `nombre`, `src`, `enlace`, `activo`, `caducidad`, `orden`, `created`) VALUES
(1,	'Proin ac turpis purus. Maecenas erat eros',	'upload/img06.jpg',	'',	1,	NULL,	1,	'2012-11-30 13:56:54'),
(2,	'Donec semper eleifend metus, eget mattis est convallis quis.',	'upload/img26.jpg',	'',	1,	NULL,	2,	'2012-11-30 13:57:09');

DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT '',
  `enlace` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `activo` tinyint(1) DEFAULT '1',
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `carousels` (`id`, `src`, `enlace`, `descripcion`, `activo`, `orden`, `created`) VALUES
(1,	'upload/02laminado.jpg',	NULL,	NULL,	1,	1,	'2012-11-29 18:17:56'),
(2,	'upload/03mobiliario.jpg',	NULL,	NULL,	1,	2,	'2012-11-29 18:17:56'),
(3,	'upload/04visualinteriores.jpg',	NULL,	NULL,	1,	3,	'2012-11-29 18:17:56'),
(4,	'upload/05worktops.jpg',	NULL,	NULL,	1,	4,	'2012-11-29 18:17:56'),
(5,	'upload/06insumos.jpg',	NULL,	NULL,	1,	5,	'2012-11-29 18:17:56'),
(6,	'upload/07laminados.jpg',	NULL,	NULL,	1,	6,	'2012-11-29 18:17:56'),
(7,	'upload/08superficies.jpg',	NULL,	NULL,	1,	7,	'2012-11-29 18:17:56'),
(8,	'upload/09tableros.jpg',	NULL,	NULL,	1,	8,	'2012-11-29 18:17:56'),
(9,	'upload/10tablerosmelaminizados.jpg',	NULL,	NULL,	1,	9,	'2012-11-29 18:17:56');

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `lft` int(10) unsigned DEFAULT NULL,
  `rght` int(10) unsigned DEFAULT NULL,
  `orden` int(10) unsigned DEFAULT '0',
  `master` tinyint(4) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `parent_id`, `nombre`, `slug`, `lft`, `rght`, `orden`, `master`, `created`) VALUES
(1,	NULL,	'L&iacute;nea Eurodekor',	'1_linea-eurodekor',	1,	14,	1,	0,	'2012-11-30 11:51:11'),
(2,	NULL,	'Novedades!',	'2_novedades',	15,	22,	0,	1,	'2012-11-30 11:51:11');

DROP TABLE IF EXISTS `medio_ambiente`;
CREATE TABLE `medio_ambiente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `medio_ambiente` (`id`, `src`, `descripcion`, `created`) VALUES
(1,	'upload/foto_comprometidos_con_el_medio_ambiente.jpg',	'<p>Tecny shop esta comprometido con el medio ambiente comercializando &uacute;nicamente productos amigables con el medio ambiente ya sea en su utilizaci&oacute;n final o en sus procesos de fabricaci&oacute;n</p>',	'2012-11-30 17:19:19');

DROP TABLE IF EXISTS `productimgs`;
CREATE TABLE `productimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `portada` tinyint(1) DEFAULT '0',
  `descripcion` text,
  `orden` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `productimgs` (`id`, `product_id`, `src`, `portada`, `descripcion`, `orden`, `created`) VALUES
(6,	2,	'upload/img28.jpg',	0,	NULL,	3,	'2012-11-30 19:24:12'),
(5,	2,	'upload/img40.jpg',	0,	NULL,	2,	'2012-11-30 19:24:12'),
(4,	2,	'upload/img13.jpg',	1,	NULL,	1,	'2012-11-30 19:24:12'),
(7,	3,	'upload/img2913543252121.jpg',	1,	NULL,	4,	'2012-11-30 19:26:52'),
(8,	3,	'upload/img34.jpg',	0,	NULL,	5,	'2012-11-30 19:26:52'),
(9,	3,	'upload/img36.jpg',	0,	NULL,	6,	'2012-11-30 19:26:52'),
(10,	4,	'upload/img02.jpg',	1,	NULL,	7,	'2012-11-30 19:27:43'),
(11,	4,	'upload/img0613543252631.jpg',	0,	NULL,	8,	'2012-11-30 19:27:43'),
(12,	4,	'upload/img09.jpg',	0,	NULL,	9,	'2012-11-30 19:27:43'),
(13,	4,	'upload/img37.jpg',	0,	NULL,	10,	'2012-11-30 19:27:43'),
(14,	5,	'upload/img27.jpg',	1,	NULL,	11,	'2012-11-30 19:29:06'),
(15,	5,	'upload/03.jpg',	0,	NULL,	12,	'2012-11-30 19:29:06'),
(16,	5,	'upload/img63.jpg',	0,	NULL,	13,	'2012-11-30 19:29:06'),
(17,	6,	'upload/img2813543255591.jpg',	1,	NULL,	14,	'2012-11-30 19:32:39'),
(18,	6,	'upload/img3413543255591.jpg',	0,	NULL,	15,	'2012-11-30 19:32:39'),
(19,	6,	'upload/img0613543255591.jpg',	0,	NULL,	16,	'2012-11-30 19:32:39'),
(20,	7,	'upload/img1913543256121.jpg',	1,	NULL,	17,	'2012-11-30 19:33:32'),
(21,	7,	'upload/04.jpg',	0,	NULL,	18,	'2012-11-30 19:33:32'),
(22,	7,	'upload/02.jpg',	0,	NULL,	19,	'2012-11-30 19:33:32'),
(23,	7,	'upload/img3213543256121.jpg',	0,	NULL,	20,	'2012-11-30 19:33:32'),
(24,	8,	'upload/img20.jpg',	1,	NULL,	21,	'2012-11-30 21:03:22'),
(25,	8,	'upload/img12.jpg',	0,	NULL,	22,	'2012-11-30 21:03:22'),
(26,	8,	'upload/img3413543310021.jpg',	0,	NULL,	23,	'2012-11-30 21:03:22'),
(27,	8,	'upload/05.jpg',	0,	NULL,	24,	'2012-11-30 21:03:22'),
(28,	8,	'upload/02735_mentonsunset_1920x1200.jpg',	0,	NULL,	25,	'2012-11-30 21:03:22'),
(29,	8,	'upload/0313543310021.jpg',	0,	NULL,	26,	'2012-11-30 21:03:22'),
(30,	9,	'upload/01.jpg',	1,	NULL,	27,	'2012-11-30 21:04:18'),
(31,	9,	'upload/0513543310581.jpg',	0,	NULL,	28,	'2012-11-30 21:04:18'),
(32,	9,	'upload/img0913543310581.jpg',	0,	NULL,	29,	'2012-11-30 21:04:18'),
(33,	9,	'upload/0213543310581.jpg',	0,	NULL,	30,	'2012-11-30 21:04:18'),
(34,	9,	'upload/img22.jpg',	0,	NULL,	31,	'2012-11-30 21:04:18');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `activo` tinyint(1) DEFAULT '1',
  `orden` int(10) unsigned DEFAULT '0',
  `productimg_count` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `category_id`, `nombre`, `slug`, `src`, `descripcion`, `activo`, `orden`, `productimg_count`, `created`) VALUES
(2,	1,	'EGGER',	'2_egger',	'upload/img23.jpg',	'<p>EGGER es el fabricante de productos derivados de la madera de mayor renombre entre los fabricantes de muebles premium, arquitectos y dise&ntilde;adores de interiores en Europa.</p>\r\n<p>Con experiencia desde 1961 y 17 plantas de producci&oacute;n con la mas alta tecnologia y los mayores estandares de calidad en Europa garantizamos que cada uno de los productos EGGER ser&aacute;n la base del &eacute;xito tanto en el dise&ntilde;o y fabricaci&oacute;n de muebles como del dise&ntilde;o de interiores de sus proyectos siendo la marca preferida en Europa.</p>',	1,	1,	3,	'2012-11-30 19:24:12'),
(3,	1,	'Tableros Melaminizados',	'3_tableros-melaminizados',	'upload/img24.jpg',	'<p>EURODEKOR&reg; Tableros melaminizados que ofrecen una colecci&oacute;n &uacute;nica de alta calidad para los fabricantes de muebles e interiorismo de alto perfil en acuerdo con los m&aacute;s altos est&aacute;ndares europeos de calidad</p>\r\n<ul>\r\n<li>Dise&ntilde;os versatiles que combinan texturas en las superficies</li>\r\n<li>Propiedades optimas en las superficies</li>\r\n<li>Ofrece un mejor terminado en sus procesos de corte disminuyendo las astillas</li>\r\n<li>El tama&ntilde;o del tablero por su modulaci&oacute;n disminuye la merma en los procesos productivos 280 x 207 cms x 19 mm</li>\r\n</ul>',	1,	2,	3,	'2012-11-30 19:26:52'),
(4,	1,	'Laminados',	'4_laminados',	'upload/img1113543252631.jpg',	'<p>Los Laminados EGGER cuentan con una estructura multi capa, que consiste en impregnaci&oacute;n de resina decorativa con papel logrando un balance entre resistencia, est&eacute;tica, durabilidad y calidad.</p>\r\n<p>Rangos de espesor de 0.15 hasta 1.20 mm con medidas de 280x131.</p>',	1,	3,	4,	'2012-11-30 19:27:43'),
(5,	1,	'Cantos ABS',	'5_cantos-abs',	'upload/img18.jpg',	'<p>S&oacute;lo el acabado perfecto entre el canto y el tablero da como resultado una impresi&oacute;n y terminado premium del producto.</p>\r\n<p>Formato: 23 x 2 mm en rollo de 75 mts.</p>',	1,	4,	3,	'2012-11-30 19:29:06'),
(6,	1,	'Colecci&oacute;n 2013',	'6_coleccion-2013',	'upload/img3613543255591.jpg',	'<p>La colecci&oacute;n 2013 para M&eacute;xico ha sido cuidadosamente seleccionada tomando en cuenta las tendencias europeas en tonos maderas (woodgrains), texturas que combinen los dise&ntilde;os cl&aacute;sicos y vanguardistas que integren dise&ntilde;os naturales, aut&eacute;nticos con acabados tropicales, y de fantas&iacute;as esta colecci&oacute;n esta catalogada como la best seller mundiales de la marca EGGER.</p>\r\n<p>El terminado ST22 brinda un look y textura que se disfruta al tacto, permitiendo sentir el terminado madera a su m&aacute;xima expresi&oacute;n.</p>\r\n<div>W980 ST2 Platinum White</div>\r\n<p>U963 ST2 Diamond Grey</p>\r\n<div>H3775 ST9 Light Tennessee walnut</div>\r\n<p>H1428 ST22 Woodline Mocha</p>\r\n<div>H3006 ST22 Sand Zembrano</div>\r\n<div>H3090 ST22 Driftwood</div>\r\n<p>H3058 ST22 Mali Wenge</p>\r\n<div>H3078 ST22 Hacienda White</div>\r\n<p>H3081 ST22 Hacienda Black</p>',	1,	5,	3,	'2012-11-30 19:32:39'),
(7,	1,	'Virtual Design Studio',	'7_virtual-design-studio',	'upload/img2613543256121.jpg',	'<p>El uso de las tecnolog&iacute;as digitales nos permite ahora visualizar el mundo del mueble y dise&ntilde;o de una nueva manera.</p>\r\n<p>VDS MOBILE App de EGGER usted puede visualizar en su IPAD la l&iacute;nea completa de colores disponible sobre pedido para M&eacute;xico.</p>',	1,	6,	4,	'2012-11-30 19:33:32'),
(8,	2,	'Phasellus sit amet leo sit amet nibh interdum consequat.',	'8_phasellus-sit-amet-leo-sit-amet-nibh-interdum-consequat',	'',	'<p>Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.</p>\r\n<p>His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu.</p>',	1,	7,	6,	'2012-11-30 21:03:22'),
(9,	2,	'Vivamus pretium lobortis risus ut vulputate!',	'9_vivamus-pretium-lobortis-risus-ut-vulputate',	'',	'',	1,	8,	5,	'2012-11-30 21:04:18'),
(10,	2,	'Duis id ligula in mi rutrum tincidunt.',	'10_duis-id-ligula-in-mi-rutrum-tincidunt',	'',	'',	1,	9,	0,	'2012-11-30 21:08:54');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `master` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `apellidos`, `master`, `created`) VALUES
(1,	'pulsem',	'327d3429df2c4512edc07ed9e948aa75f5d14f50',	'Master',	NULL,	1,	'2010-01-01 00:00:00'),
(2,	'admin',	'd033e22ae348aeb5660fc2140aec35850c4da997',	'Master',	NULL,	1,	'2010-01-01 00:00:00');

-- 2012-11-30 21:38:03
