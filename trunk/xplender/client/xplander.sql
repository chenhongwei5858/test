-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 27 日 13:24
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
-- 表的结构 `xplender_customer`
--

CREATE TABLE IF NOT EXISTS `xplender_customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_password` varchar(50) COLLATE utf8_bin NOT NULL,
  `customer_offers` enum('yes','no') COLLATE utf8_bin NOT NULL DEFAULT 'yes',
  `customer_fullName` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `customer_phone` int(50) DEFAULT NULL,
  `customer_addressLineOne` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `customer_addressLineTwo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `customer_city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `customer_StateProvinceRegion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `customer_zip` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `customer_country` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'american',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `xplender_customer`
--

INSERT INTO `xplender_customer` (`customer_id`, `customer_email`, `customer_password`, `customer_offers`, `customer_fullName`, `customer_phone`, `customer_addressLineOne`, `customer_addressLineTwo`, `customer_city`, `customer_StateProvinceRegion`, `customer_zip`, `customer_country`) VALUES
(1, 'test@162.com', '098f6bcd4621d373cade4e832627b4f6', 'yes', 'test_fullName', 1833333333, 'One', 'Two', 'testCity', 'province', 'zipzip', 'american'),
(4, '11@11.com', '96e79218965eb72c92a549dd5a330112', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'american'),
(5, '22@22.com', '96e79218965eb72c92a549dd5a330112', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'american');

-- --------------------------------------------------------

--
-- 表的结构 `xplender_subscribe`
--

CREATE TABLE IF NOT EXISTS `xplender_subscribe` (
  `subscribe_id` int(10) NOT NULL AUTO_INCREMENT,
  `subscribe_email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`subscribe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

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
(12, 'term@term.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
