CREATE TABLE IF NOT EXISTS `tree` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `position` bigint(20) unsigned NOT NULL,
  `left` bigint(20) unsigned NOT NULL,
  `right` bigint(20) unsigned NOT NULL,
  `level` bigint(20) unsigned NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

INSERT INTO `tree` (`id`, `parent_id`, `position`, `left`, `right`, `level`, `title`, `type`) VALUES
(13, 0, 2, 1, 106, 0, 'ROOT', ''),
(14, 1, 1, 0, 8, 1, '1º Ano', 'drive'),
(15, 1, 2, 0, 15, 1, '2º Ano', 'drive'),
(16, 1, 3, 0, 22, 1, '3º Ano', 'drive'),
(17, 1, 4, 0, 29, 1, '4º Ano', 'drive'),
(18, 1, 5, 0, 36, 1, '5º Ano', 'drive'),
(19, 1, 6, 0, 43, 1, '6º Ano', 'drive'),
(20, 1, 7, 0, 62, 1, '7º Ano', 'drive'),
(21, 1, 8, 0, 69, 1, '8º Ano', 'drive'),
(22, 1, 9, 0, 82, 1, '9º Ano', 'drive'),
(23, 1, 10, 0, 83, 1, '10º Ano', 'drive'),
(24, 1, 11, 0, 84, 1, '11º Ano', 'drive'),
(25, 1, 12, 0, 105, 1, '12º Ano', 'drive'),
(26, 25, 0, 85, 98, 2, 'Artes Visuais - 12º Ano', 'folder'),
(27, 25, 1, 99, 100, 2, 'Línguas e Humanidades - 12º Ano', 'folder'),
(28, 25, 2, 101, 102, 2, 'Ciências e Tecnologias - 12º Ano', 'folder'),
(29, 25, 3, 103, 104, 2, 'Ciências Socioeconómicas - 12º Ano', 'folder'),
(30, 26, 0, 86, 97, 3, 'Oficina Artes e Oficina Multimédia', 'folder'),
(31, 30, 0, 87, 88, 4, 'Mat. Tecnologias', 'default'),
(32, 30, 1, 89, 90, 4, 'Aplic. Informática B', 'default'),
(33, 30, 2, 91, 92, 4, 'Filosofia A', 'default'),
(34, 30, 3, 93, 94, 4, 'Economia C', 'default'),
(35, 30, 4, 95, 96, 4, 'Ling. Est. I, II ou III', 'default'),
(36, 21, 0, 63, 68, 2, 'Não aplicável', 'folder'),
(37, 36, 0, 64, 67, 3, 'Não aplicável', 'folder'),
(38, 37, 0, 65, 66, 4, 'Não aplicável', 'default'),
(39, 14, 0, 2, 7, 2, 'Não aplicável', 'folder'),
(40, 39, 0, 3, 6, 3, 'Não aplicável', 'folder'),
(41, 40, 0, 4, 5, 4, 'Não aplicável', 'default'),
(42, 15, 0, 9, 14, 2, 'Não aplicável', 'folder'),
(43, 42, 0, 10, 13, 3, 'Não aplicável', 'folder'),
(44, 43, 0, 11, 12, 4, 'Não aplicável', 'default'),
(45, 16, 0, 16, 21, 2, 'Não aplicável', 'folder'),
(46, 45, 0, 17, 20, 3, 'Não aplicável', 'folder'),
(47, 46, 0, 18, 19, 4, 'Não aplicável', 'default'),
(48, 17, 0, 23, 28, 2, 'Não aplicável', 'folder'),
(49, 48, 0, 24, 27, 3, 'Não aplicável', 'folder'),
(50, 49, 0, 25, 26, 4, 'Não aplicável', 'default'),
(51, 18, 0, 30, 35, 2, 'Não aplicável', 'folder'),
(52, 51, 0, 31, 34, 3, 'Não aplicável', 'folder'),
(53, 52, 0, 32, 33, 4, 'Não aplicável', 'default'),
(54, 19, 0, 37, 42, 2, 'Não aplicável', 'folder'),
(55, 54, 0, 38, 41, 3, 'Não aplicável', 'folder'),
(56, 55, 0, 39, 40, 4, 'Não aplicável', 'default'),
(57, 20, 0, 44, 49, 2, 'Ling. Est. II - Espanhol', 'folder'),
(58, 20, 1, 50, 55, 2, 'Ling. Est. II - Francês', 'folder'),
(59, 20, 2, 56, 61, 2, 'Ling. Est. II - Alemão', 'folder'),
(60, 57, 0, 45, 48, 3, 'Não aplicável', 'folder'),
(61, 60, 0, 46, 47, 4, 'Não aplicável', 'default'),
(62, 58, 0, 51, 54, 3, 'Não aplicável', 'folder'),
(63, 62, 0, 52, 53, 4, 'Não aplicável', 'default'),
(64, 59, 0, 57, 60, 3, 'Não aplicável', 'folder'),
(65, 64, 0, 58, 59, 4, 'Não aplicável', 'default'),
(66, 22, 0, 70, 75, 2, 'Ed. Visual', 'folder'),
(67, 22, 1, 76, 81, 2, 'Ed. Tecnológica', 'folder'),
(68, 66, 0, 71, 74, 3, 'Não aplicável', 'folder'),
(69, 68, 0, 72, 73, 4, 'Não aplicável', 'default'),
(70, 67, 0, 77, 80, 3, 'Não aplicável', 'folder'),
(71, 70, 0, 78, 79, 4, 'Não aplicável', 'default');
