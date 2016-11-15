-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2016 at 08:52 AM
-- Server version: 5.6.34
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sangntco_toy`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_link` varchar(255) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `content` text,
  `alt` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_link`, `image_thumb`, `content`, `alt`, `name`, `size`) VALUES
(1, 'http://dochoitinhducshop.com/public/upload/files/slideshow_24565(1).png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/slideshow_24565(1).png', '', 'are', 'bannerAbove', '822x397'),
(2, 'http://dochoitinhducshop.com/public/upload/files/banner-gif.gif', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/banner-gif.gif', '<h2><strong>KHUYẾN M&Atilde;I ĐẶC BIỆT KHI ĐẶT ONLINE G&Oacute;I GEL TITAN DEVELOPPE SEX</strong></h2>\r\n\r\n<div class="banner-content">\r\n<p><span style="font-size:16px">Lần đầu ti&ecirc;n c&oacute; mặt tại Việt Nam ưu đ&atilde;i từ <strong> 450.000Đ đến 1.020.000Đ</strong> cho 5.000 kh&aacute;ch h&agrave;ng đầu ti&ecirc;n đặt h&agrave;ng </span></p>\r\n</div>\r\n', 'aeretew', 'bannerBelow', '1210x265'),
(3, 'http://dochoitinhducshop.com/public/upload/files/logo4565.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/logo4565.png', '', 'uk', 'logo', '100x100'),
(4, 'http://dochoitinhducshop.com/public/upload/files/logo4565.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/logo4565.png', '', 'cxv', 'icon', '280x110'),
(5, 'http://dochoitinhducshop.com/public/upload/files/15086801_884107141690303_1808131692_n.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/15086801_884107141690303_1808131692_n.png', '', 'Điện Thoại Liên Hệ', 'phone', '217x36'),
(6, 'http://dochoitinhducshop.com/public/upload/files/banner_top_14565(1).gif', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/banner_top_14565(1).gif', NULL, 'liên hệ đặt hàng', 'banner_top', '800x457'),
(7, 'http://dochoitinhducshop.com/public/upload/files/banner_top_24565(1).png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/banner_top_24565(1).png', NULL, 'hỗ trợ trực tuyến', 'banner_top', '800x457'),
(8, 'http://dochoitinhducshop.com/public/upload/files/banner_top_34565.gif', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/banner_top_34565.gif', NULL, 'chúng tôi cam kết', 'banner_top', '800x457'),
(9, 'http://dochoitinhducshop.com/public/upload/files/banner_top_44565.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/banner_top_44565.png', NULL, 'giao hàng tận tay', 'banner_top', '800x457');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
