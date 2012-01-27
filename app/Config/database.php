<?php
/**
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- テーブルのデータをダンプしています `items`
--

INSERT INTO `items` (`id`, `name`, `rank`, `price`, `created`, `modified`) VALUES
(1, '近江牛', 'A', 2000, '2012-01-25 00:03:45', '2012-01-25 00:07:01'),
(2, '飛騨牛', 'B', 3000, '2012-01-25 00:04:06', '2012-01-25 00:07:13'),
(3, 'オージー・ビーフ', '', 1600, '2012-01-25 00:04:19', '2012-01-25 00:04:32'),
(4, 'aaa', '', 200, '2012-01-25 00:04:43', '2012-01-25 00:04:43'),
(5, 'another umai niku', 'XX', 0, '2012-01-25 00:40:23', '2012-01-25 00:40:23'),
(6, 'another umai niku', 'XX', 0, '2012-01-25 00:43:49', '2012-01-25 00:43:49'),
(7, 'another umai niku', 'XX', 0, '2012-01-25 00:46:15', '2012-01-25 00:46:15'),
(8, 'another umai niku', 'XX', 0, '2012-01-25 00:46:26', '2012-01-25 00:46:26'),
(9, 'がちょうにく', 'XX', 0, '2012-01-25 00:47:59', '2012-01-25 00:47:59'),
(10, '神戸牛', 'XX', 0, '2012-01-25 00:48:14', '2012-01-25 00:48:14'),
(11, '新神戸肉', 'A', 0, '2012-01-25 00:50:37', '2012-01-25 00:50:37');


CREATE TABLE IF NOT EXISTS `friendlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

**/
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'shimokita8',
		'prefix' => '',
		'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
