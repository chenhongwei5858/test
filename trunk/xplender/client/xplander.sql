-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 13 日 07:51
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xplender`
--

-- --------------------------------------------------------

--
-- 表的结构 `xplender_admin`
--

CREATE TABLE IF NOT EXISTS `xplender_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `xplender_admin`
--

INSERT INTO `xplender_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_collection`
--

CREATE TABLE IF NOT EXISTS `xplender_collection` (
  `customer_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `collection` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '0',
  KEY `customer_id` (`customer_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `xplender_collection`
--

INSERT INTO `xplender_collection` (`customer_id`, `product_id`, `collection`) VALUES
(1, 1, '1');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_customer`
--

CREATE TABLE IF NOT EXISTS `xplender_customer` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_password` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_offers` enum('yes','no') COLLATE utf8_bin NOT NULL DEFAULT 'yes',
  `customer_fullName` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_phone` int(50) NOT NULL,
  `customer_c_address` varchar(100) COLLATE utf8_bin NOT NULL,
  `customer_p_address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `customer_city` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_state` varchar(100) COLLATE utf8_bin NOT NULL,
  `customer_zip` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_country` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_email` (`customer_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `xplender_customer`
--

INSERT INTO `xplender_customer` (`customer_id`, `customer_email`, `customer_password`, `customer_offers`, `customer_fullName`, `customer_phone`, `customer_c_address`, `customer_p_address`, `customer_city`, `customer_state`, `customer_zip`, `customer_country`) VALUES
(1, 'test@162.com', '098f6bcd4621d373cade4e832627b4f6', 'yes', 'lucy', 2147483647, 'caddress', 'paddress', 'lucy_city', 'lucy_state', 'lucy_zip', 'china'),
(4, '11@11.com', '96e79218965eb72c92a549dd5a330112', 'yes', '11', 870541576, 'huashen', '44', 'newyork', 'ss', 'zip', 'china'),
(5, '22@22.com', '96e79218965eb72c92a549dd5a330112', 'no', '', 0, '', NULL, '', '', '', ''),
(6, 'qqq@qqq.com', '96e79218965eb72c92a549dd5a330112', 'yes', '', 0, '', NULL, '', '', '', ''),
(7, 'zzzz@zzz.com', '96e79218965eb72c92a549dd5a330112', 'yes', '', 0, '', NULL, '', '', '', ''),
(8, 'test@zzz.com', 'e10adc3949ba59abbe56e057f20f883e', 'yes', '', 0, '', NULL, '', '', '', ''),
(9, 'ww@ww.com', 'e19d5cd5af0378da05f63f891c7467af', 'yes', 'ww', 35462146, 'ww', 'wq', 'fj', 'oa', 'am', 'american'),
(15, 'bbbb@bbb.com', 'e19d5cd5af0378da05f63f891c7467af', 'yes', 'bbbb', 0, 'bbbb', 'bbb', 'bbb', 'bb', 'bb', 'american'),
(16, '4444@4444.com', 'e19d5cd5af0378da05f63f891c7467af', 'yes', 'ddd', 0, 'eee', 'eee', 'e', 'e', 'e', 'american'),
(17, 'yyy@yyy.com', 'e19d5cd5af0378da05f63f891c7467af', 'yes', 'y', 0, 'y', 'y', 'y', 'y', 'y', 'china');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_order`
--

CREATE TABLE IF NOT EXISTS `xplender_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `product_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `order_number` int(10) unsigned NOT NULL,
  `order_postage` decimal(10,2) NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `paypal` varchar(10) COLLATE utf8_bin NOT NULL,
  `order_time` int(10) unsigned NOT NULL,
  `order_company` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `logistics_number` int(20) DEFAULT NULL,
  `logistics_status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Order picking',
  `order_status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'have in hand',
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `product_name` (`product_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `xplender_order`
--

INSERT INTO `xplender_order` (`order_id`, `customer_id`, `product_name`, `order_number`, `order_postage`, `order_total`, `paypal`, `order_time`, `order_company`, `logistics_number`, `logistics_status`, `order_status`) VALUES
(3, 1, 'Yeelight床头灯', 1, '20.00', '119.00', 'on', 1456283166, NULL, NULL, 'Order picking', 'have in hand'),
(4, 1, '小蚁运动相机', 7, '20.00', '6880.00', 'on', 1456299166, NULL, NULL, 'Order picking', 'have in hand'),
(5, 1, '小蚁运动相机', 4, '20.00', '3940.00', 'on', 1456383166, NULL, NULL, 'Order picking', 'have in hand'),
(6, 1, '耳机', 4, '20.00', '2420.00', 'on', 1456283976, NULL, NULL, 'Order picking', 'have in hand'),
(7, 4, '小蚁智能摄像机', 1, '20.00', '140.00', 'on', 1456163166, NULL, NULL, 'Order picking', 'have in hand'),
(8, 6, '小蚁运动相机', 0, '20.00', '20.00', 'on', 1456246166, NULL, NULL, 'Order picking', 'have in hand'),
(10, 17, 'Yeelight床头灯', 1, '20.00', '219.00', 'on', 1460532246, NULL, NULL, 'Order picking', 'have in hand');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_product`
--

CREATE TABLE IF NOT EXISTS `xplender_product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `product_illustration` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `product_explain` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_number` int(50) NOT NULL,
  `product_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `images_url` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_name` (`product_name`),
  UNIQUE KEY `product_url` (`product_url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `xplender_product`
--

INSERT INTO `xplender_product` (`product_id`, `product_name`, `product_illustration`, `product_explain`, `product_price`, `product_number`, `product_url`, `images_url`) VALUES
(1, 'Yeelight床头灯', '触摸式操作 给卧室1600万种颜色', '支持小米2s/3/4，小米 Note，iPhone 4s 及以上机型', '199.00', 99, 'product_detail1.php', 'images/temp/product1/480x480.jpg'),
(2, '小蚁智能摄像机', '720P高清分辨率 | 111°广角 | 双向语音通话', NULL, '120.00', 30, 'product_detail2.php', 'images/temp/product2/480x480.jpg'),
(3, '小蚁运动相机', 'H.264高保真图像 | 3D降噪 | MCTF运动补偿', NULL, '980.00', 780, 'product_detail3.php', 'images/temp/product3/480x480.jpg'),
(4, '背包', '黑色', NULL, '99.00', 60, 'product_detail4.php', 'images/temp/product4/480x480.jpg'),
(5, '耳机', '苹果|银色', '效果好，样子时尚', '600.00', 999, 'product_detail5.php', 'images/temp/product5/480x480.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_subscribe`
--

CREATE TABLE IF NOT EXISTS `xplender_subscribe` (
  `subscribe_id` int(10) NOT NULL AUTO_INCREMENT,
  `subscribe_email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`subscribe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `xplender_subscribe`
--

INSERT INTO `xplender_subscribe` (`subscribe_id`, `subscribe_email`) VALUES
(1, 'testss@sina.com'),
(2, 'aaa@aaa.com'),
(3, 'bbb@bbb.com'),
(4, 'about@about.com'),
(5, 'about2@about2.com'),
(6, 'about3@about3.com'),
(7, 'about4@about4.com'),
(8, 'cart@cart.com'),
(9, 'order@order.com'),
(10, 'privacphp@privacphp.com'),
(11, 'product@product.com'),
(12, 'term@term.com'),
(13, 'qq@qq.com'),
(14, 'aaaa@aaaa.com');

--
-- 限制导出的表
--

--
-- 限制表 `xplender_collection`
--
ALTER TABLE `xplender_collection`
  ADD CONSTRAINT `xplender_collection_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `xplender_customer` (`customer_id`),
  ADD CONSTRAINT `xplender_collection_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `xplender_product` (`product_id`),
  ADD CONSTRAINT `xplender_collection_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `xplender_product` (`product_id`);

--
-- 限制表 `xplender_order`
--
ALTER TABLE `xplender_order`
  ADD CONSTRAINT `xplender_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `xplender_customer` (`customer_id`),
  ADD CONSTRAINT `xplender_order_ibfk_2` FOREIGN KEY (`product_name`) REFERENCES `xplender_product` (`product_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
