CREATE TABLE IF NOT EXISTS `frases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `bom` int(11) DEFAULT NULL,
  `ruim` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6;
 
INSERT INTO `frases` (`id`, `texto`, `bom`, `ruim`) VALUES
(1, '"A imaginação é mais importante que o conhecimento."', 0, 0),
(2, '"O mundo não está ameaçado pelas pessoas más, e sim por aquelas que permitem a maldade."', 0, 0),
(3, '"Tente mover o mundo - o primeiro passo será mover a si mesmo."', 0, 0),
(4, '"Os homens erram, os grandes homens confessam que erraram."', 0, 0),
(5, '"Só os mortos conhecem o fim da guerra."', 0, 0);