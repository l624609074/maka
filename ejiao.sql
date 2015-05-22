-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: ejiao
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tp_advisory`
--

DROP TABLE IF EXISTS `tp_advisory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_advisory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '用户留言姓名',
  `age` int(10) unsigned NOT NULL COMMENT '年龄',
  `contact` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '用户联系方式',
  `word` text COLLATE utf8_bin NOT NULL COMMENT '用户留言',
  `recall` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经回答了，0未，1表示已经回答',
  `lefttime` int(50) unsigned NOT NULL COMMENT '用户留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户留言咨询表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_advisory`
--

LOCK TABLES `tp_advisory` WRITE;
/*!40000 ALTER TABLE `tp_advisory` DISABLE KEYS */;
INSERT INTO `tp_advisory` VALUES (1,'严梅',28,'13356183191','肌色暗黄，脸无光泽。头发干枯、唇色、指甲颜色淡白。时常有头昏眼花的情况发生。最近一段时间心悸。睡眠质量不高,经常无缘无故失眠。经常会有手足发麻的情况发生。经常气短乏力，容易疲劳。',0,0),(2,'金连英',41,'15867432266','',0,0),(3,'邓国丽',40,'15086094933','',0,0),(5,'陈亚莉 ',25,'18709428611 ','肌色暗黄，脸无光泽。时常有头昏眼花的情况发生。月经颜色比正常情况偏淡并且量少。经常气短乏力，容易疲劳。头发干枯、唇色、指甲颜色淡白。',0,0),(6,'赵胜楠 ',20,'15196665232 ','肌色暗黄，脸无光泽。头发干枯、唇色、指甲颜色淡白。时常有头昏眼花的情况发生。最近一段时间心悸。睡眠质量不高,经常无缘无故失眠。经常会有手足发麻的情况发生。月经颜色比正常情况偏淡并且量少。经常气短乏力，容易疲劳。',0,0),(7,'黄焕灵咨询',3,'13996883961','',0,1432196254),(8,'黄',3,'13996883961',',月经颜色比正常情况偏淡并且量少。,经常会有手足发麻的情况发生。头发干枯、唇色、指甲颜色淡白。肌色暗黄，脸无光泽。时常有头昏眼花的情况发生。睡眠质量不高,经常无缘无故失眠。',0,1432196488);
/*!40000 ALTER TABLE `tp_advisory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tp_order`
--

DROP TABLE IF EXISTS `tp_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productid` int(50) NOT NULL COMMENT '与产品的主键id对应',
  `name` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '购买用户的名字',
  `contact` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户联系电话',
  `address` varchar(500) COLLATE utf8_bin NOT NULL COMMENT '用户联系地址',
  `payment` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '货到付款' COMMENT '付款方式',
  `word` text COLLATE utf8_bin NOT NULL COMMENT '用户留言',
  `status` int(10) unsigned NOT NULL COMMENT '用户付款状态 0未确定1确定2发货',
  `expressname` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '快递公司',
  `expressnum` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '快递单号',
  `orderid` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '订单号',
  `ordertime` int(50) NOT NULL COMMENT '下订单的时间',
  `client` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'PC' COMMENT '客户端',
  `operator` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'Admin99' COMMENT '订单操作者',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_order`
--

LOCK TABLES `tp_order` WRITE;
/*!40000 ALTER TABLE `tp_order` DISABLE KEYS */;
INSERT INTO `tp_order` VALUES (1,1,'郭云廷','15326778955','神木县大柳塔镇','货到付款','',1,'','','',0,'PC','admin99'),(2,1,'邓国丽','15086094933','贵州省正安县县城南门农贸市场','货到付款','如果有效果，就接着购买。',1,'','','',0,'PC','admin99'),(3,1,'黄贝','13978745185','广西壮族自治区南宁市良庆区王洞村委','货到付款','',1,'','','',0,'PC','admin99'),(4,2,'周叶','13856984565','江苏省南通市','货到付款','越快越好',1,'','','',0,'PC','admin99'),(5,2,'何江','13868797842','乐清市','货到付款','先看看效果，可以吗。',1,'','','',0,'PC','admin99'),(6,1,'李丹','13115960357','漳州蓝田开发区天辰，','货到付款','',1,'','','',0,'PC','admin99'),(7,1,'郭沙沙','15021365418','上海市浦东新区秀沿路3668号W14085588郭沙沙10栋314','货到付款','',1,'','','',0,'PC','admin99'),(8,1,'江先生','13761469799','上海市浦东新区康桥镇创业路66弄6栋102室','货到付款','5月5日后派送',1,'','','',0,'PC','admin99'),(9,2,'张基厅','15285800209','江苏徐州','货到付款','',1,'','','',0,'PC','admin99'),(10,1,'胡金德','13868667247','浙江省温州市文成县玉壶镇外楼encxxiang','货到付款','买两盒',1,'','','',0,'PC','admin99'),(11,0,'黄焕灵','13996883961','广东省潮州市饶平县','货到付款','你好！！！',2,'2','2','967b8cefa419',1432193831,'PC','admin99'),(13,1,'黄手机端耳机','13531569968','广东电视台','货到付款','发多少分啊水电费',2,'3','3','a9b17e916923',1432201190,'Phone','admin99');
/*!40000 ALTER TABLE `tp_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tp_products`
--

DROP TABLE IF EXISTS `tp_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品id',
  `productname` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '产品名字',
  `price` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '产品价格',
  `uptime` int(50) unsigned NOT NULL COMMENT '产品上架时间',
  `moneyrate` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '折率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='产品信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_products`
--

LOCK TABLES `tp_products` WRITE;
/*!40000 ALTER TABLE `tp_products` DISABLE KEYS */;
INSERT INTO `tp_products` VALUES (1,'阿胶含片美丽体验装（买二送一）','399',0,''),(2,'阿胶含片美颜补血装（买三送二）','599',0,''),(3,'阿胶含片补血修复装（买四送三）','799',0,''),(4,'阿胶含片补血修复装（买五送四）','999',0,'');
/*!40000 ALTER TABLE `tp_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tp_user`
--

DROP TABLE IF EXISTS `tp_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户的id',
  `username` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户登录名',
  `password` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '用户密码',
  `loginip` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '用户的登陆ip',
  `logintime` int(50) unsigned NOT NULL COMMENT '用户登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='后台登陆用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_user`
--

LOCK TABLES `tp_user` WRITE;
/*!40000 ALTER TABLE `tp_user` DISABLE KEYS */;
INSERT INTO `tp_user` VALUES (1,'admin99','fd7a1cc5fa7065194fd9dc35e8a630e9','127.0.0.1',1432088311);
/*!40000 ALTER TABLE `tp_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-22 18:34:29
