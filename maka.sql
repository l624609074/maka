-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-05-20 12:01:32
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maka`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_advisory`
--

CREATE TABLE IF NOT EXISTS `tp_advisory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '用户留言姓名',
  `contact` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '用户联系方式',
  `word` text COLLATE utf8_bin NOT NULL COMMENT '用户留言',
  `recall` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经回答了，0未，1表示已经回答',
  `lefttime` int(50) unsigned NOT NULL COMMENT '用户留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户留言咨询表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tp_advisory`
--

INSERT INTO `tp_advisory` (`id`, `name`, `contact`, `word`, `recall`, `lefttime`) VALUES
(2, 'James', '020-1234654', '全国国家安全机关总结表彰大会19日在北京召开。中共中央总书记、国家主席、中央军委主席习近平会见全体与会代表，并发表重要讲话。他强调，全国国家安全机关要以受到表彰的先进单位和个人为榜样，认真学习贯彻党的十八大和十八届三中、四中全会精神，贯彻落实总体国家安全观，坚定理想信念，忠诚党的事业，与时俱进开创国家安全工作新局面，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦作出更大贡献。', 1, 0),
(3, 'James', '020-1234654', '全国国家安全机关总结表彰大会19日在北京召开。中共中央总书记、国家主席、中央军委主席习近平会见全体与会代表，并发表重要讲话。他强调，全国国家安全机关要以受到表彰的先进单位和个人为榜样，认真学习贯彻党的十八大和十八届三中、四中全会精神，贯彻落实总体国家安全观，坚定理想信念，忠诚党的事业，与时俱进开创国家安全工作新局面，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦作出更大贡献。', 0, 0),
(4, 'James', '020-1234654', '全国国家安全机关总结表彰大会19日在北京召开。中共中央总书记、国家主席、中央军委主席习近平会见全体与会代表，并发表重要讲话。他强调，全国国家安全机关要以受到表彰的先进单位和个人为榜样，认真学习贯彻党的十八大和十八届三中、四中全会精神，贯彻落实总体国家安全观，坚定理想信念，忠诚党的事业，与时俱进开创国家安全工作新局面，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦作出更大贡献。', 0, 0),
(5, 'James', '020-1234654', '全国国家安全机关总结表彰大会19日在北京召开。中共中央总书记、国家主席、中央军委主席习近平会见全体与会代表，并发表重要讲话。他强调，全国国家安全机关要以受到表彰的先进单位和个人为榜样，认真学习贯彻党的十八大和十八届三中、四中全会精神，贯彻落实总体国家安全观，坚定理想信念，忠诚党的事业，与时俱进开创国家安全工作新局面，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦作出更大贡献。', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_order`
--

CREATE TABLE IF NOT EXISTS `tp_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productid` int(50) NOT NULL COMMENT '与产品的主键id对应',
  `name` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '购买用户的名字',
  `contact` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户联系电话',
  `address` varchar(500) COLLATE utf8_bin NOT NULL COMMENT '用户联系地址',
  `payment` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '付款方式',
  `word` text COLLATE utf8_bin NOT NULL COMMENT '用户留言',
  `status` int(10) unsigned NOT NULL COMMENT '用户付款状态 0未确定1确定2发货',
  `expressname` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '快递公司',
  `expressnum` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '快递单号',
  `orderid` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '订单号',
  `ordertime` int(50) NOT NULL COMMENT '下订单的时间',
  `client` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '客户端',
  `operator` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '订单操作者',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户订单表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tp_order`
--

INSERT INTO `tp_order` (`id`, `productid`, `name`, `contact`, `address`, `payment`, `word`, `status`, `expressname`, `expressnum`, `orderid`, `ordertime`, `client`, `operator`) VALUES
(1, 1, 'sfasfdasfd', '13531569968', '北京市 西城区', '货到付款', 'fgwwaff', 2, 'd', '2', 'e1994b4d2b5a', 1431938933, 'PC', 'admin99'),
(2, 2, '发顺丰撒', '13531569985', '江苏省淮安市', '货到付款', '', 0, '', '', 'c22cf346c359', 1432006254, 'Phone', ''),
(3, 2, '得多得多', '1313', '啊沙发沙发', '', '阿萨法法师的法师', 0, '', '', '', 0, '', 'admin99'),
(4, 1, 'as', 'sf', 'asf', '', 'saf', 0, '', '', 'f03a11c992f9', 1432093147, '', 'admin99'),
(5, 1, '0000', '13531569985', '浙江省衢州市江山市', '货到付款', 'FAS', 0, '', '', '09b884f1be1d', 1432094758, 'Phone', ''),
(6, 1, '0', '13531569985', '黑龙江省伊春市五营区', '货到付款', '', 0, '', '', '1a914bf87ee9', 1432095026, 'Phone', '');

-- --------------------------------------------------------

--
-- 表的结构 `tp_products`
--

CREATE TABLE IF NOT EXISTS `tp_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品id',
  `productname` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '产品名字',
  `price` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '产品价格',
  `uptime` int(50) unsigned NOT NULL COMMENT '产品上架时间',
  `moneyrate` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '折率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='产品信息表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tp_products`
--

INSERT INTO `tp_products` (`id`, `productname`, `price`, `uptime`, `moneyrate`) VALUES
(1, '玛卡咀嚼片40粒/盒+12粒/盒*2 ', '380', 0, ''),
(2, '玛卡咀嚼片40粒/盒*4   （修复装）', '680', 0, ''),
(3, '玛卡咀嚼片40粒/盒*12   （显效装）', '1280', 0, ''),
(4, '玛卡咀嚼片40粒/盒*12 （强效装） ', '1860', 0, ''),
(5, '玛卡咀嚼片40粒/盒*16 （巩固装）', '2380', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户的id',
  `username` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户登录名',
  `password` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户密码',
  `loginip` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '用户的登陆ip',
  `logintime` int(50) unsigned NOT NULL COMMENT '用户登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='后台登陆用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `loginip`, `logintime`) VALUES
(1, 'admin99', 'fd7a1cc5fa7065194fd9dc35e8a630e9', '127.0.0.1', 1432088311);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
