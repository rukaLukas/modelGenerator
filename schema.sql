DROP TABLE IF EXISTS `companion`;

CREATE TABLE `companion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confirmacao_presenca_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump da tabela album
# ------------------------------------------------------------

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_couple_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL COMMENT 'se tiver foto de capa',
  `image_thumb` varchar(255) DEFAULT NULL,
  `image_hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
