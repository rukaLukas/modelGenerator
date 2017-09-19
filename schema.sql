
# Dump da tabela paginas_site_casal
# ------------------------------------------------------------

CREATE TABLE `paginas_site_casal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_casal_id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(100) DEFAULT '',
  `descricao` text,
  `youtube1` varchar(255) DEFAULT NULL,
  `youtube2` varchar(255) DEFAULT NULL,
  `youtube3` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto1_thumb` varchar(255) DEFAULT NULL,
  `foto1_hash` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto2_thumb` varchar(255) DEFAULT NULL,
  `foto2_hash` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto3_thumb` varchar(255) DEFAULT NULL,
  `foto3_hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pagina_site_casal_fk_idx` (`site_casal_id`),
  CONSTRAINT `pagina_site_casal_fk` FOREIGN KEY (`site_casal_id`) REFERENCES `sites_casais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela produtos
# ------------------------------------------------------------

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_casal_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text,
  `valor` decimal(7,2) NOT NULL,
  `cotas` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_thumb` varchar(255) DEFAULT NULL,
  `foto_hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_site_casal_fk_idx` (`site_casal_id`),
  KEY `produto_subcategoria_fk_idx` (`subcategoria_id`),
  CONSTRAINT `produto_site_casal_fk` FOREIGN KEY (`site_casal_id`) REFERENCES `sites_casais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `produto_subcategoria_fk` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela sites_casais
# ------------------------------------------------------------

CREATE TABLE `sites_casais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `subdominio` varchar(50) NOT NULL,
  `spotify` varchar(45) DEFAULT NULL COMMENT 'id do spotify do usuario que vai ser usado para carregar a playlist',
  `bgsound1` varchar(255) DEFAULT NULL,
  `bgsound2` varchar(45) DEFAULT NULL,
  `bgsound3` varchar(45) DEFAULT NULL,
  `bgsound4` varchar(45) DEFAULT NULL,
  `bgsound5` varchar(45) DEFAULT NULL,
  `bgsound6` varchar(45) DEFAULT NULL,
  `criado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `site_casal_usuario_id_fk_idx` (`usuario_id`),
  CONSTRAINT `site_casal_usuario_id_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela slide_apresentacao
# ------------------------------------------------------------

CREATE TABLE `slide_apresentacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_casal_id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL COMMENT 'tempo que vai levar a transição de cada imagem',
  `bgsound` varchar(255) DEFAULT NULL,
  `font_family` varchar(45) DEFAULT NULL,
  `font_size` varchar(45) DEFAULT NULL,
  `font_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slide_apresentacao_site_casal_fk_idx` (`site_casal_id`),
  CONSTRAINT `slide_apresentacao_site_casal_fk` FOREIGN KEY (`site_casal_id`) REFERENCES `sites_casais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela subcategorias
# ------------------------------------------------------------

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ref` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategoria_categoria_fk_idx` (`categoria_id`),
  CONSTRAINT `subcategoria_categoria_fk` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela user_1
# ------------------------------------------------------------

CREATE TABLE `user_1` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela usuarios
# ------------------------------------------------------------

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade_id` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT '1' COMMENT '1 = ativo; 0 = inativo;',
  `tipo` char(1) NOT NULL DEFAULT 'C' COMMENT 'C = cliente; A = admin\n',
  `criado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_cidade_fk_idx` (`cidade_id`),
  CONSTRAINT `usuarios_cidade_fk` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela vendas
# ------------------------------------------------------------

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cotas` int(11) DEFAULT NULL COMMENT 'indica quantas cotas comprou',
  `total` decimal(7,2) DEFAULT NULL,
  `criado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `venda_produto_fk_idx` (`produto_id`),
  CONSTRAINT `venda_produto_fk` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump da tabela visitas
# ------------------------------------------------------------

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_casal_id` int(11) DEFAULT NULL COMMENT 'faz referencia a pagina do usuário ‘casal’',
  `visitas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `visita_site_casal_fk_idx` (`site_casal_id`),
  CONSTRAINT `visita_site_casal_fk` FOREIGN KEY (`site_casal_id`) REFERENCES `sites_casais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

