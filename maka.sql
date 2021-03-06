-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: maka
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
  `contact` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '用户联系方式',
  `age` int(10) unsigned NOT NULL COMMENT '年龄',
  `word` text COLLATE utf8_bin NOT NULL COMMENT '用户留言',
  `recall` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经回答了，0未，1表示已经回答',
  `lefttime` int(50) unsigned NOT NULL COMMENT '用户留言时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户留言咨询表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_advisory`
--

LOCK TABLES `tp_advisory` WRITE;
/*!40000 ALTER TABLE `tp_advisory` DISABLE KEYS */;
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
  `client` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '客户端',
  `operator` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '订单操作者',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_order`
--

LOCK TABLES `tp_order` WRITE;
/*!40000 ALTER TABLE `tp_order` DISABLE KEYS */;
INSERT INTO `tp_order` VALUES (1,2,'李坤桥','13996883961','浙江省绍兴市绍兴县滨海工业园区滨中路66号盛鑫印染','','希望有用吧3',0,'333','333234亲亲我','9f7ff1ee2066',1432116655,'PC','admin99'),(2,2,'苏红','15946826529','江西省上饶市铅山县','','想体验一下',0,'','','ba8eb781f3b1',1432116956,'PC','admin99'),(5,1,'0','0','0','','0',0,'','','d5b022916a19',1432279183,'PC','admin99');
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
INSERT INTO `tp_products` VALUES (1,'玛卡咀嚼片40粒/盒+12粒/盒*2 ','380',0,''),(2,'玛卡咀嚼片40粒/盒*4   （修复装）','680',0,''),(3,'玛卡咀嚼片40粒/盒*12   （显效装）','1280',0,''),(4,'玛卡咀嚼片40粒/盒*12 （强效装） ','1860',0,''),(5,'玛卡咀嚼片40粒/盒*16 （巩固装）','2380',0,'');
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
INSERT INTO `tp_user` VALUES (1,'admin99','fd7a1cc5fa7065194fd9dc35e8a630e9','127.0.0.1',1432116258);
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

-- Dump completed on 2015-05-22 18:34:08
