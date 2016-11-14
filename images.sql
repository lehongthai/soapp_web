-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 11:40 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin_soapp_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `content` text,
  `alt` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_link`, `image_thumb`, `content`, `alt`, `name`) VALUES
(1, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-14(1).jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-14(1).jpg', '', 'are', 'bannerAbove'),
(2, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/duong_vat_cam_tay_picobong_21.jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/duong_vat_cam_tay_picobong_21.jpg', 'fsefsdfsdfs', 'aeretew', 'bannerBelow'),
(3, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-21.jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-21.jpg', '', 'uk', 'logo'),
(4, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/duong_vat_cam_tay_picobong_21.jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/duong_vat_cam_tay_picobong_21.jpg', '', 'cxv', 'icon'),
(5, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/15086801_884107141690303_1808131692_n.png', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/15086801_884107141690303_1808131692_n.png', '', 'Điện Thoại Liên Hệ', 'phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
