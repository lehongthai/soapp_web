-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 05:13 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

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
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `meta_key`, `meta_desc`, `image`, `image_thumb`, `title`) VALUES
(1, '1', '1', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/images/g1.jpg', 'http://localhost:8080/LeThai/Laravel/project-tin/public/upload/_thumbs/Images/g1.jpg', 'hdfg');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_key` varchar(200) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `name`, `alias`, `order`, `meta_desc`, `meta_key`) VALUES
(1, 'BÀI VIẾT', 'bai-viet', 0, NULL, NULL),
(2, 'THÔNG TIN', 'thong-tin', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent_id` tinyint(4) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`, `image_link`, `image_thumbnail`, `alt`) VALUES
(37, 'Gel titan Developpe sex', 'gel-titan-developpe-sex', 0, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(40, 'Svakom-USA', 'svakom-usa', 0, 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL,
  `code` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ship` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewed` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `code`, `fullname`, `phone`, `email`, `price`, `product`, `address`, `city`, `ship`, `noite`, `active`, `viewed`, `created_at`, `updated_at`) VALUES
(42, '#963256096', 'NetVis Comany', '963256096', 'ngocdungmmtt2012@gmail.com', '2100000', '[{"product":"3","qty":"1"}]', 'Khu Công Nghệ Phần Mềm', 'Bình Thuận', '25000', 'dd', '0', 1, '2016-11-16 01:31:38', '2016-11-18 08:00:31');

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
  `name` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `keywords`, `description`) VALUES
(9, 'Nalone', NULL, NULL),
(11, 'Phap', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_08_13_063345_create_products_table', 2),
(4, '2016_08_13_064404_create_product_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned DEFAULT NULL,
  `orders` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `alias`, `intro`, `content`, `keywords`, `description`, `tags`, `image_link`, `alt`, `image_thumbnail`, `views`, `user_id`, `cate_id`, `orders`, `properties`, `created_at`, `updated_at`) VALUES
(2, 'Bài 1', 'bai-1-1', 'sđfgfgh', '<p>dfgdfgdf</p>\r\n', 'fjgh', 'jhkjhk', '54,57,60', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/banner_top_24565(1).png', '', 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/banner_top_24565(1).png', '0', 2, 1, '1', '1,2', '2016-12-01 19:56:08', '2016-12-01 21:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_old` int(11) DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `orders` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `related` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `make`, `quantity`, `price`, `price_old`, `intro`, `image_thumb`, `image_link`, `alt`, `content`, `keywords`, `description`, `tags`, `user_id`, `cate_id`, `orders`, `properties`, `related`, `created_at`, `updated_at`) VALUES
(6, 'Đồ 1', 'do-1', '11', NULL, 20000, 0, '<div class="youtube-embed-wrapper" style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;"><iframe allowfullscreen="" frameborder="0" height="480" src="//www.youtube.com/embed/R0M2-zDCn1M" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" width="640"></iframe></div>\r\n\r\n<p>rth</p>\r\n', 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/duong_vat_cam_tay_picobong_21.jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/duong_vat_cam_tay_picobong_21.jpg', 'dfd', '<p>hgh</p>\r\n', 'tgghjtyu', 'fdfgfdgfdg', '54,55,57', 2, 37, '4', '2,3', NULL, '2016-11-17 04:35:27', '2016-12-01 19:40:16'),
(8, 'Đồ 2', 'do-1', '11', '0', 20000, 0, '<p>rth</p>\r\n', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/_thumbs/Files/duong_vat_cam_tay_picobong_21.jpg', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/duong_vat_cam_tay_picobong_21.jpg', 'dfd', '<p>hgh</p>\r\n', 'tgghjtyu', 'fdfgfdgfdg', '54,55,57', 30, 40, '6', NULL, NULL, '2016-11-17 04:35:27', '2016-12-01 20:13:21'),
(9, 'Sản Phẩm Mới', 'lkdfd-skjsdf-sdfsdf', '11', NULL, 2, 8, '<p>sdfdsfsd</p>\r\n', 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/15086801_884107141690303_1808131692_n.png', 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/15086801_884107141690303_1808131692_n.png', '', '<p>fdsfsdfsd</p>\r\n', 'sdfdsf', 'dfsdfsd', '57,59', 2, 37, '1', '2,3', '6,8', '2016-12-01 10:52:36', '2016-12-01 11:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_buys`
--

CREATE TABLE IF NOT EXISTS `product_buys` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `buy_day` date DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_buys`
--

INSERT INTO `product_buys` (`id`, `product_id`, `quantity`, `buy_day`) VALUES
(17, 3, 1, '2016-11-16'),
(16, 4, 1, '2016-11-16'),
(15, 3, 1, '2016-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `image_thumb`, `alt`, `product_id`, `created_at`, `updated_at`) VALUES
(24, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'http://localhost:8080/LeThai/Laravel/soapp_web/public/upload/files/banner-gif.gif', 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, NULL, 'http://localhost:8080/LeThai/Laravel/caythong/public/upload/_thumbs/Files/', '', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `location`, `phone`, `tel`, `email`, `facebook`) VALUES
(1, 'Ngõ 110 Trần Duy Hưng  Quận Cầu Giấy, TP. Hà Nội', '0123456789', '0123456789', 'admin@gmail.com', 'https://www.facebook.com/shopthethaoPhuMy/');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(54, 'massage', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'sextoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'sextoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'key', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'nong', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'sản phẩm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'đồ chơi tình dục', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(2) DEFAULT NULL,
  `active` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$X.fiRaJPt7hmwSlDTqVLCuqLH42Z91r7pfvkc8Oo6ht/XdpW8mOxC', 2, '1', 'pkvpJkrsThECsbrgDv4Ru65prFhsAog7o9Ik4PiPNPd8PAL4NTOf2R3rfzHN', '2016-11-11 07:12:01', '2016-11-17 02:49:38'),
(7, '123@gmail.com', '123@gmail.com', '$2y$10$X.fiRaJPt7hmwSlDTqVLCuqLH42Z91r7pfvkc8Oo6ht/XdpW8mOxC', 1, NULL, 'OcGULQuLrYsnCfo03sWojtw0HlySmkVf2ovcSPgISLJUeYuVawK67iJRoK3q', '2016-11-17 02:31:12', '2016-11-17 02:33:05'),
(30, 'NetVis Comany', 'teamchich23@gmail.com', '$2y$10$sbrEDyJ.BExnEOYcdhQvKOhwkpEicgU6GkVeukhcp0Qsd4I6CXKeC', 1, '1', 'BQUnDI4uN5KELzUStUm8jmWlHv4ApEbnYzD9V1mI', '2016-11-17 04:12:58', '2016-11-17 04:16:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_buys`
--
ALTER TABLE `product_buys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_buys`
--
ALTER TABLE `product_buys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
