-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2013 年 1 月 05 日 18:58
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `chat_database`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(16) NOT NULL,
  `category_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL COMMENT '優先度：1なら、1番目に高い',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- テーブルのデータをダンプしています `help`
--

INSERT INTO `help` (`id`, `title`, `category_id`, `priority`) VALUES
(1, 'ヘルプタイトル1', 1, 3),
(2, 'ヘルプタイトル22', 1, 1),
(3, 'ヘルプタイトル333', 1, 2),
(4, 'ヘルプタイトル4', 2, 3),
(5, 'ヘルプタイトル55', 2, 1),
(6, 'ヘルプタイトル666', 2, 2),
(7, 'ヘルプタイトル7', 3, 3),
(8, 'ヘルプタイトル88', 3, 1),
(9, 'ヘルプタイトル999', 3, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `help_category`
--

CREATE TABLE IF NOT EXISTS `help_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `priority` int(11) NOT NULL COMMENT '優先度：1なら、1番目に高い',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのデータをダンプしています `help_category`
--

INSERT INTO `help_category` (`id`, `name`, `priority`) VALUES
(1, 'カテゴリ中', 2),
(2, 'カテゴリ高', 1),
(3, 'カテゴリ低', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `help_detail_m`
--

CREATE TABLE IF NOT EXISTS `help_detail_m` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `help_id` int(11) NOT NULL,
  `title` varchar(16) NOT NULL,
  `contents` text NOT NULL,
  `priority` int(11) NOT NULL COMMENT '優先度：1なら、1番目に高い',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- テーブルのデータをダンプしています `help_detail_m`
--

INSERT INTO `help_detail_m` (`id`, `help_id`, `title`, `contents`, `priority`) VALUES
(1, 1, '詳細1', 'コンテンツ1', 3),
(2, 1, '詳細2', 'コンテンツ2', 1),
(3, 1, '詳細3', 'コンテンツ3', 2),
(4, 2, '詳細4', 'コンテンツ4', 3),
(5, 2, '詳細5', 'コンテンツ5', 1),
(6, 2, '詳細6', 'コンテンツ6', 2),
(7, 3, '詳細7', 'コンテンツ7', 3),
(8, 3, '詳細8', 'コンテンツ8', 1),
(9, 3, '詳細9', 'コンテンツ9', 2),
(10, 4, '詳細10', 'コンテンツ10', 3),
(11, 4, '詳細11', 'コンテンツ11', 1),
(12, 4, '詳細12', 'コンテンツ12', 2),
(13, 5, '詳細13', 'コンテンツ13', 3),
(14, 5, '詳細14', 'コンテンツ14', 1),
(15, 5, '詳細15', 'コンテンツ15', 2),
(16, 6, '詳細16', 'コンテンツ16', 3),
(17, 6, '詳細17', 'コンテンツ17', 1),
(18, 6, '詳細18', 'コンテンツ18', 2),
(19, 7, '詳細19', 'コンテンツ19', 3),
(20, 7, '詳細20', 'コンテンツ20', 1),
(21, 7, '詳細21', 'コンテンツ21', 2),
(22, 8, '詳細22', 'コンテンツ22', 3),
(23, 8, '詳細23', 'コンテンツ23', 1),
(24, 8, '詳細24', 'コンテンツ24', 2),
(25, 9, '詳細25', 'コンテンツ25', 3),
(26, 9, '詳細26', 'コンテンツ26', 1),
(27, 9, '詳細27', 'コンテンツ27', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `sex` tinyint(4) NOT NULL COMMENT '1:男, 2:女',
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `user`
--

