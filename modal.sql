-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 08:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin_caythong`
--

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `intro` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `content` text,
  `active` tinyint(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `title`, `intro`, `image`, `content`, `active`) VALUES
(4, 'Tưng bừng khai trương', 'giảm giá 90%', 'http://localhost/LeThai/Laravel/caythong/public/upload/files/banner-gif.gif', '<div class=\"col_half nobottommargin col_last\" style=\"padding-top: 20px\">\r\n<p>Đừng bỏ lỡ cơ hội mua h&agrave;ng để được <strong>ƯU Đ&Atilde;I </strong> đến 5% duy nhất trong năm nay! <strong>SEXTOY GI&Aacute; GỐ</strong><img alt=\"Image\" src=\"http://dochoitinhducshop.com/main_img.jpg\" /><strong>C </strong>lu&ocirc;n cam kết đem đến cho kh&aacute;ch h&agrave;ng th&acirc;n y&ecirc;u những sản phẩm tốt nhất, chất lượng tuyệt vời nhất v&agrave; gi&aacute; cả hợp l&yacute; nhất. H&atilde;y gh&eacute; thăm website : <a href=\"{{url(\'\')}}\" target=\"_blank\"><strong>SEXTOY GI&Aacute; GỐC</strong></a> để thoả sức mua sắm..!</p>\r\n\r\n<div id=\"widget-subscribe-form3-result\">&nbsp;</div>\r\n\r\n<form id=\"widget-subscribe-form3\">\r\n<div class=\"input-group\" style=\"max-width:400px;\"><input name=\"form_type\" type=\"hidden\" value=\"customer\" /> <input name=\"utf8\" type=\"hidden\" value=\"✓\" /> <input name=\"contact\" type=\"email\" /> Đăng k&yacute;</div>\r\n</form>\r\n</div>\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
