-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Mer 16 Novembre 2016 à 11:11
-- Version du serveur: 5.6.34
-- Version de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `sangntco_toy`
--

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `abouts`
--

INSERT INTO `abouts` (`id`, `meta_key`, `meta_desc`, `image`, `image_thumb`, `title`) VALUES
(1, '1', '1', NULL, 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_key` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `category_post`
--

INSERT INTO `category_post` (`id`, `name`, `alias`, `order`, `meta_desc`, `meta_key`) VALUES
(1, 'BÀI VIẾT', 'bai-viet', 0, NULL, NULL),
(2, 'THÔNG TIN', 'thong-tin', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cates`
--

CREATE TABLE IF NOT EXISTS `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cates_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Contenu de la table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`, `image_link`, `image_thumbnail`, `alt`) VALUES
(28, 'GEL TITAN SỈ VÀ LẺ', 'gel-titan-si-va-le', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_1.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_1.png', ''),
(29, 'ĐỒ CHƠI TÌNH DỤC VIP', 'do-choi-tinh-duc-vip', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_24565.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_24565.png', ''),
(30, 'SEXTOY CHO NAM', 'sextoy-cho-nam', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_34565.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_34565.png', ''),
(31, 'SEXTOY CHO NỮ', 'sextoy-cho-nu', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_44565.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_44565.png', ''),
(32, 'ĐỒ CHƠI PHÒNG THE', 'do-choi-phong-the', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_54565.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_54565.png', ''),
(33, 'BAO CAO SU', 'bao-cao-su', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_64565.png', 'http://localhost/toy/public/upload/_thumbs/Images/menu_icon_64565.png', ''),
(34, 'TĂNG CƯỜNG SINH LÝ', 'tang-cuong-sinh-ly', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_74565.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/menu_icon_74565.png', ''),
(35, 'CHỐNG XUẤT TINH SỚM', 'chong-xuat-tinh-som', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_84565.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/menu_icon_84565.png', ''),
(36, 'GEL - DẦU BÔI TRƠN', 'gel---dau-boi-tron', 0, 0, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'http://dochoitinhducshop.com/public/upload/files/menu_icon_1.png', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/menu_icon_1.png', ''),
(37, 'Gel titan Developpe sex', 'gel-titan-developpe-sex', 0, 28, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(38, 'Chăm sóc sắc đẹp', 'cham-soc-sac-dep', 0, 28, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(39, 'Búp bê tình dục Nhật Bản', 'bup-be-tinh-duc-nhat-ban', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(40, 'Svakom-USA', 'svakom-usa', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(41, 'Picobong-Thụy Điển', 'picobong-thuy-dien', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(42, 'Lelo-Thụy Điển', 'lelo-thuy-dien', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(43, 'Tenga-Japan', 'tenga-japan', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(44, 'Fun-Germany', 'fun-germany', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(45, 'Fleshlight - USA', 'fleshlight---usa', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(46, 'Easylove - Japan', 'easylove---japan', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(47, 'Baile - Hongkong', 'baile---hongkong', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(48, 'Loveaider - Hongkong', 'loveaider---hongkong', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(49, 'Chisa - Hongkong', 'chisa---hongkong', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(50, 'Durex - USA', 'durex---usa', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(51, 'Nalone - Japan', 'nalone---japan', 0, 29, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(52, 'Âm đạo giả đèn pin', 'am-dao-gia-den-pin', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(53, 'Âm đạo giả hình cốc', 'am-dao-gia-hinh-coc', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(54, 'Âm đạo giả như thật', 'am-dao-gia-nhu-that', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(55, 'Âm đạo giả máy thủ dâm tự động', 'am-dao-gia-may-thu-dam-tu-dong', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(56, 'Búp bê tình dục', 'bup-be-tinh-duc', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(57, 'Máy tập to dương vật', 'may-tap-to-duong-vat', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(58, 'Dương vật dây đeo rỗng ruột', 'duong-vat-day-deo-rong-ruot', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(59, 'Vòng rung đeo dương vật', 'vong-rung-deo-duong-vat', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(60, 'Sextoy cho Gay', 'sextoy-cho-gay', 0, 30, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(61, 'Dương vật giả gắn tường', 'duong-vat-gia-gan-tuong', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(62, 'Dương vật giả cầm tay', 'duong-vat-gia-cam-tay', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(63, 'Dương vật giả đa năng', 'duong-vat-gia-da-nang', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(64, 'Dương vật dây đeo cho Les', 'duong-vat-day-deo-cho-les', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(65, 'Massage điểm G', 'massage-diem-g', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(66, 'Trứng rung', 'trung-rung', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(67, 'Chày rung massage AV', 'chay-rung-massage-av', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(68, 'Máy massage ngực', 'may-massage-nguc', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(69, 'Dụng cụ massage hậu môn', 'dung-cu-massage-hau-mon', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(70, 'Lưỡi liếm kích thích âm đạo', 'luoi-liem-kich-thich-am-dao', 0, 31, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(71, 'Nội y sexy', 'noi-y-sexy', 0, 32, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(72, 'Dụng cụ bạo dâm', 'dung-cu-bao-dam', 0, 32, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(73, 'Nước hoa tình ái', 'nuoc-hoa-tinh-ai', 0, 32, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(74, 'Bao cao su có gai, gân, râu', 'bao-cao-su-co-gai,-gan,-rau', 0, 33, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(75, 'Bao cao su kéo dài thời gian', 'bao-cao-su-keo-dai-thoi-gian', 0, 33, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(76, 'Bao cao su siêu mỏng', 'bao-cao-su-sieu-mong', 0, 33, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(77, 'Bao cao su Đôn dên', 'bao-cao-su-don-den', 0, 33, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(78, 'Tăng cường sinh lý cho nữ', 'tang-cuong-sinh-ly-cho-nu', 0, 34, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(79, 'Tăng cường sinh lý cho nam', 'tang-cuong-sinh-ly-cho-nam', 0, 34, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(80, 'Thuốc xịt tăng cương cứng', 'thuoc-xit-tang-cuong-cung', 0, 35, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(81, 'Thuốc xịt chống xuất tinh sớm', 'thuoc-xit-chong-xuat-tinh-som', 0, 35, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(82, 'Gel bôi se khít âm đạo', 'gel-boi-se-khit-am-dao', 0, 36, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(83, 'Gel bôi trơn âm đạo', 'gel-boi-tron-am-dao', 0, 36, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(84, 'Gel kéo dài thời gian', 'gel-keo-dai-thoi-gian', 0, 36, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(85, 'Gel tăng cảm khoái', 'gel-tang-cam-khoai', 0, 36, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(86, 'Dầu massage', 'dau-massage', 0, 36, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `customer_email`
--

CREATE TABLE IF NOT EXISTS `customer_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `customer_email`
--

INSERT INTO `customer_email` (`id`, `email`) VALUES
(1, 'daylaemail.com');

-- --------------------------------------------------------

--
-- Structure de la table `images`
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
-- Contenu de la table `images`
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
-- Structure de la table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `keywords`, `description`) VALUES
(9, 'Nalone', NULL, NULL),
(11, 'Phap', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_08_13_063345_create_products_table', 2),
(4, '2016_08_13_064404_create_product_images_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `alias`, `intro`, `content`, `keywords`, `description`, `tags`, `image_link`, `alt`, `image_thumbnail`, `views`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(8, 'LỢI ÍCH CỦA SEX ĐỐI VỚI SỨC KHỎE NAM, NỮ', 'loi-ich-cua-sex-doi-vii-suc-khoe-nam,-nu', 'Trước nay, với lối suy nghĩ khép kín của người Á Đông, ít ai dám mạnh dạn đề cập đến chuyện sex – tình dục. Thậm chí, với nhiều người có lối quan niệm cũ, tình dục là một thứ gì đó xa vời, tục tĩu và..', '<h1><span style="color:rgb(204, 0, 255); font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex (quan hệ t&igrave;nh dục)&nbsp;kh&ocirc;ng chỉ gi&uacute;p&nbsp;cuộc sống vui vẻ, tươi đẹp&nbsp;hơn m&agrave; c&ograve;n mang lại những lợi &iacute;ch về&nbsp;sức khỏe &iacute;t ai biết.</span></span></span></h1>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">Trước nay, với lối suy nghĩ kh&eacute;p k&iacute;n của người &Aacute; Đ&ocirc;ng, &iacute;t ai d&aacute;m mạnh dạn đề cập đến chuyện sex &ndash; t&igrave;nh dục. Thậm ch&iacute;, với nhiều người c&oacute; lối quan niệm cũ, t&igrave;nh dục l&agrave; một thứ g&igrave; đ&oacute; xa vời, tục tĩu v&agrave; đ&aacute;ng khinh bỉ. Thế nhưng, cuộc sống đ&atilde; thay đổi; văn h&oacute;a, vốn hiểu biết của con người cũng đ&atilde; được mở mang theo tốc độ ph&aacute;t triển ch&oacute;ng mặt của Internet v&agrave; qu&aacute; tr&igrave;nh hội nhập thế giới. Giới trẻ b&acirc;y giờ kh&ocirc;ng c&ograve;n ngại ngần khi n&oacute;i đến sex.&nbsp;</span></p>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">Thực tế, b&ecirc;n cạnh những b&agrave;i học giới t&iacute;nh kh&ocirc; khan, bạn c&oacute; thể t&igrave;m hiểu về sex qua những th&ocirc;ng tin th&uacute; vị sau.</span></p>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">Mặc d&ugrave; sex c&oacute; thể chiếm phần lớn trong t&acirc;m tr&iacute; ch&uacute;ng ta, nhiều người chỉ nh&igrave;n nhận sex mang lại c&aacute;c gi&aacute; trị về x&aacute;c thịt m&agrave; kh&ocirc;ng biết rằng, sex c&ograve;n c&oacute; thể mang lại những lợi &iacute;ch sức khỏe đ&atilde;&nbsp;được khoa học chứng minh.&nbsp;</span></p>\n\n<h2><span style="color:rgb(204, 0, 255); font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex&nbsp;tăng cường hệ miễn dịch cho bạn</span></span></span></h2>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">&ldquo;Y&ecirc;u&rdquo; thường xuy&ecirc;n c&oacute; t&aacute;c dụng tăng cường miễn dịch Globulin, loại kh&aacute;ng thể c&oacute; c&ocirc;ng dụng hỗ trợ miễn dịch hiệu quả. Đ&acirc;y l&agrave; kh&aacute;ng thể hay hợp chất miễn dịch gi&uacute;p cơ thể ch&uacute;ng ta chống lại nhiễm tr&ugrave;ng. Những người c&oacute; hoạt động t&igrave;nh dục đều đặn 2-3 lần mỗi tuần c&oacute; nồng độ miễn dịch Globulin cao hơn, gi&uacute;p l&agrave;m tăng&nbsp;khả năng miễn dịch của cơ thể.</span></p>\n\n<p style="text-align:center"><span style="font-family:tahoma,geneva,sans-serif"><img alt="Sex&nbsp;tăng cường hệ miễn dịch cho bạn" src="http://bizweb.dktcdn.net/100/086/968/files/giup-nang-len-dinh-de-hon.jpg?v=1467622486720" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /></span></p>\n\n<h2><span style="color:rgb(204, 0, 255); font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex thường xuy&ecirc;n gi&uacute;p ngăn ngừa t&igrave;nh trạng v&ocirc; sinh</span></span></span></h2>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">Với cuộc sống căng thẳng, nhiều nam giới dễ bị giảm số lượng tinh tr&ugrave;ng, chất lượng tinh dịch k&eacute;m. Đ&acirc;y l&agrave; những r&agrave;o cản nghi&ecirc;m trọng đối với c&aacute;c cặp vợ chồng mong muốn sớm c&oacute; con. Nhiều nghi&ecirc;n cứu khoa học đ&atilde; chứng minh rằng, quan hệ t&igrave;nh dục thường xuy&ecirc;n sẽ gi&uacute;p nam giới cải thiện được t&igrave;nh h&igrave;nh. Tinh dịch sẽ được thay đổi về chất lượng v&agrave; số lượng. Tinh tr&ugrave;ng sẽ khỏe hơn, đi nhanh hơn khi th&acirc;m nhập v&ugrave;ng&nbsp;<a href="http://sextoygiagoc.com/am-dao-gia-nhu-that" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">&acirc;m đạo</a>&nbsp;nữ giới.&nbsp;</span></p>\n\n<p><span style="font-family:tahoma,geneva,sans-serif">Ngo&agrave;i ra, sex c&ograve;n gi&uacute;p giảm stress, đảm bảo m&aacute;u lưu th&ocirc;ng tr&ecirc;n cơ thể, bao gồm cả c&aacute;c m&ocirc;&nbsp;<a href="http://sextoygiagoc.com/duong-vat-gia-gan-tuong" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">dương vật</a>&nbsp;v&agrave; gi&uacute;p cơ thể hấp thụ c&aacute;c chất dinh dưỡng đồng đều hơn.</span></p>\n\n<h2><span style="color:rgb(204, 0, 255); font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex gi&uacute;p giảm căng thẳng</span></span></span></h2>\n\n<p style="text-align:left"><span style="font-family:tahoma,geneva,sans-serif">Giảm thiểu t&aacute;c động của căng thẳng c&oacute; lẽ l&agrave; t&aacute;c dụng được nhiều người t&iacute;n nhiệm về lợi &iacute;ch của sex. Người ta tin rằng, mức độ lo lắng v&agrave; căng thẳng ng&agrave;y c&agrave;ng cao hơn, v&agrave; mức độ &aacute;p lực t&aacute;c động đến sức khỏe ng&agrave;y c&agrave;ng phổ biến trong cuộc sống hiện nay. Quan hệ t&igrave;nh dục thường xuy&ecirc;n, sức khỏe t&acirc;m l&yacute; được cải thiện, đặc biệt l&agrave; c&aacute;c vấn đề li&ecirc;n quan đến t&acirc;m trạng, trầm cảm v&agrave; giấc ngủ. Quan hệ t&igrave;nh dục gi&uacute;p k&iacute;ch th&iacute;ch cơ thể sản xuất ra hormone khắc phục t&acirc;m l&yacute; lo &acirc;u, căng thẳng v&agrave; kiểm so&aacute;t h&agrave;nh vi của bạn.</span></p>\n\n<p><span style="font-family:tahoma,geneva,sans-serif"><img alt="Sex giúp giảm căng thẳng" src="http://bizweb.dktcdn.net/100/086/968/files/1-thu-thuat-phong-the-giup-ca-hai-len-dinh-cung-luc-1440213391196-1.jpg?v=1467622170775" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /></span></p>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Cải thiện sức khỏe hệ tim mạch</span></span></span></h2>\n\n<p style="text-align:left"><span style="font-family:tahoma,geneva,sans-serif">Quan hệ t&igrave;nh dục gi&uacute;p cơ thể đốt ch&aacute;y lượng calo lớn v&agrave; mang lại sức khỏe cho hệ tim mạch của bạn. C&aacute;c tư thế &ldquo;y&ecirc;u&rdquo; gần như l&agrave; tổng hợp c&aacute;c b&agrave;i tập cơ bắp của cơ thể, bao gồm t&aacute;c động l&ecirc;n v&ugrave;ng bụng, h&ocirc;ng v&agrave; đ&ugrave;i &ndash; những v&ugrave;ng dễ bị tăng c&acirc;n với hầu hết mọi người. Quan hệ t&igrave;nh dục c&oacute; thể kh&ocirc;ng mang lại cơ bắp cho bạn nhưng lại gi&uacute;p c&aacute;c cơ săn chắc, h&igrave;nh thể đẹp hơn.</span></p>\n\n<p style="text-align:left"><span style="font-family:tahoma,geneva,sans-serif">Ngo&agrave;i ra, với những động t&aacute;c (tư thế) quan hệ, tốc độ lưu th&ocirc;ng m&aacute;u nhanh hơn, cơ thể bạn c&ograve;n c&oacute; thể loại bỏ những chất thải g&acirc;y hại cho sức khỏe v&agrave; cung cấp dưỡng chất nhanh ch&oacute;ng, c&acirc;n bằng đến c&aacute;c cơ quan. Tăng k&iacute;ch th&iacute;ch tố t&igrave;nh dục gi&uacute;p củng cố c&aacute;c cơ bắp v&agrave; xương với dưỡng chất quan trọng. C&aacute;c hormone n&agrave;y gi&uacute;p ngăn chặn nguy cơ g&acirc;y bệnh tim mạch. Ngo&agrave;i ra, sex c&ograve;n gi&uacute;p ngăn ngừa t&igrave;nh trạng tiểu kh&ocirc;ng tự chủ v&agrave; tho&aacute;t vị.</span></p>\n\n<p style="text-align:left"><span style="font-family:tahoma,geneva,sans-serif"><strong>Gi&uacute;p phụ nữ xinh đẹp hơn</strong></span></p>\n\n<p style="text-align:left"><span style="font-family:tahoma,geneva,sans-serif">Khi quan hệ t&igrave;nh dục, nồng độ estrogen của phụ nữ sẽ tăng gấp đ&ocirc;i, l&agrave;m cho t&oacute;c b&oacute;ng mượt v&agrave; l&agrave;n da mềm mại hơn. Ngo&agrave;i ra, tăng lưu lượng m&aacute;u khi &acirc;n &aacute;i sẽ gi&uacute;p cho m&aacute; v&agrave; m&ocirc;i nữ giới hồng h&agrave;o l&ecirc;n. V&igrave; vậy, sex cũng l&agrave; một trong những t&aacute;c nh&acirc;n gi&uacute;p phụ nữ xinh đẹp hơn, hấp dẫn hơn.</span></p>\n\n<p><span style="font-family:tahoma,geneva,sans-serif"><img alt="Giúp phụ nữ xinh đẹp hơn" src="http://bizweb.dktcdn.net/100/086/968/files/tb2cdnvepxxxxxwxpxxxxxxxxxx-104049533.jpg?v=1467622279377" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /></span></p>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Gi&uacute;p giảm đau</span></span></span></h2>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Cảm gi&aacute;c hạnh ph&uacute;c thăng hoa đi k&egrave;m sau khi giao hợp l&agrave; do cơ thể tăng tiết tố endorphin &ndash; k&iacute;ch th&iacute;ch tố gi&uacute;p t&acirc;m trạng, đầu &oacute;c của bạn thoải m&aacute;i hơn. Quan hệ t&igrave;nh dục cũng gi&uacute;p cơ thể giải ph&oacute;ng oxytocin c&ugrave;ng với endorphin l&agrave; một trong những &ldquo;liều thuốc&rdquo; giảm đau nhanh nhất.</span></span></span></h2>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex gi&uacute;p cải thiện giấc ngủ</span></span></span></h2>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Sau khi quan hệ, cơ thể bạn sẽ được thư gi&atilde;n v&agrave; dễ d&agrave;ng ch&igrave;m v&agrave;o giấc ngủ s&acirc;u hơn. Một giấc ngủ s&acirc;u gi&uacute;p t&acirc;m tr&iacute; bạn minh mẫn, cơ thể khỏe mạnh mỗi khi thức dậy.</span></span></h2>\n\n<p><img alt="Sex giúp cải thiện giấc ngủ" src="http://bizweb.dktcdn.net/100/086/968/files/1239914-1540860236150439-8227882436352392949-n.jpg?v=1467622386103" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /></p>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">Sex gi&uacute;p k&eacute;o d&agrave;i tuổi thọ</span></span></span></h2>\n\n<h2 style="text-align:left"><span style="color:rgb(204, 0, 255); font-family:roboto,sans-serif !important; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Khi l&ecirc;n đỉnh, loại hormone mang t&ecirc;n dehydroepiandrosterone được ph&oacute;ng th&iacute;ch gi&uacute;p cải thiện hệ miễn dịch, phục hồi cơ v&agrave; l&agrave;m trẻ h&oacute;a l&agrave;n da. Một số nghi&ecirc;n cứu c&ograve;n ghi nhận, nam giới quan hệ &iacute;t nhất 2 lần mỗi tuần sẽ sống l&acirc;u hơn những người chỉ &quot;y&ecirc;u&quot; một lần mỗi th&aacute;ng.</span></span></h2>\n', 'chuyển tiền sang Nhật Bản,chuyển tiền sang Nhật,Dịch vụ chuyển tiền sang Nhật Bản,cách chuyển tiền sang Nhật', 'Dịch vụ chuyển tiền sang Nhật Bản tại Thành phố Hồ Chí Minh (tphcm), Tp Hà Nội, Tp Đà Nẵng,... về cách chuyển tiền sang Nhật Bản an toàn đảm bảo nhanh', '54,57', 'http://dochoitinhducshop.com/public/upload/files/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', 'day la chu thich anh', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', '0', 1, 1, '2016-11-12 23:12:52', '2016-11-12 23:16:56'),
(9, 'Giới thiệu', 'gioi-thieu', 'Với kinh nghiệm hơn 9 năm trong ngành buôn bán Sextoy. chúng tôi chuyên cung cấp sỉ và lẻ tất cả các dòng sextoy đẹp như: Búp Bê Silicon Nhật, BAILE Hồng Kong, PicoPong Thuỵ Điển, Durex.. Nguồn hàng đa dạng và phong phú được nhập trực tiếp từ: USA, Japan, Thuỵ Điển, Hồng Kong.Cam kết 100% không bán sản phẩm Trung Quốc. Tuy nhiên có 1 số sản phẩm được nhập từ nước khác nhưng gia công tại Trung Quốc. Những mặt hàng này chúng tôi đều có giấy chứng nhận sản phẩm an toàn đến sức khỏe người tiêu dùng. ', '<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><u><strong>GIỚI THIỆU VỀ SHOP SEXTOY GI&Aacute; GỐC</strong></u></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>&nbsp;Với kinh nghiệm hơn 9 năm trong ng&agrave;nh bu&ocirc;n b&aacute;n Sextoy.&nbsp;ch&uacute;ng t&ocirc;i chuy&ecirc;n cung cấp sỉ v&agrave; lẻ tất cả c&aacute;c d&ograve;ng sextoy&nbsp;đẹp như: B&uacute;p B&ecirc; Silicon Nhật, BAILE Hồng Kong, PicoPong Thuỵ Điển, Durex..&nbsp;Nguồn h&agrave;ng đa dạng v&agrave; phong ph&uacute; được nhập trực tiếp từ:&nbsp;USA, Japan, Thuỵ Điển,&nbsp;Hồng Kong.Cam kết 100% kh&ocirc;ng b&aacute;n sản phẩm Trung Quốc. Tuy nhi&ecirc;n c&oacute; 1 số sản phẩm được nhập từ nước kh&aacute;c nhưng gia c&ocirc;ng tại Trung Quốc. Những mặt h&agrave;ng n&agrave;y ch&uacute;ng t&ocirc;i đều c&oacute; giấy chứng nhận sản phẩm an to&agrave;n đến sức khỏe người ti&ecirc;u d&ugrave;ng.&nbsp;</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>&nbsp; Đứng trước nhu cầu sextoy&nbsp;giả tr&agrave;n lan. Sextoy Gi&aacute; Gốc&nbsp;cam kết chỉ b&aacute;n h&agrave;ng loại một, đ&uacute;ng chất lượng, v&agrave; gi&aacute; th&agrave;nh.Nếu c&oacute; ph&aacute;t hiện n&agrave;o về&nbsp;Sextoy Gi&aacute; Gốc&nbsp;b&aacute;n h&agrave;ng giả&nbsp;ch&uacute;ng t&ocirc;i sẽ bồi thường 100% gi&aacute; trị sản phẩm.</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>&nbsp; Ngo&agrave;i việc b&aacute;n lẻ,&nbsp;Sextoy Gi&aacute; Gốc&nbsp;nhận bỏ sỉ tất cả c&aacute;c mặt h&agrave;ng của shop m&igrave;nh với gi&aacute; sỉ ưu đ&atilde;i v&agrave; hỗ&nbsp;trợ nhiệt t&igrave;nh. Kh&ocirc;ng &eacute;p số lượng.Ai cũng c&oacute; thể kinh doanh nếu th&iacute;ch.</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong><span style="color:rgb(0, 128, 0)">&nbsp; Mọi chi tiết mọi người c&oacute; thể truy cập website:</span><a href="http://sextoygiagoc.com/" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><span style="color:rgb(0, 128, 0)">http://sextoygiagoc.com</span></a><span style="color:rgb(0, 128, 0)">&nbsp;Hoặc vui l&ograve;ng gọi trực tiếp cho Mr: Ho&agrave;ng&nbsp;theo số&nbsp;</span><span style="color:rgb(255, 0, 0)">0983&nbsp;408&nbsp;068</span><span style="color:rgb(0, 128, 0)">. Ho&agrave;ng&nbsp;sẽ kh&ocirc;ng&nbsp;trả lời th&ocirc;ng tin mua sỉ qua SMS. V&agrave; Ho&agrave;ng&nbsp;mong rằng ch&uacute;ng ta l&agrave;m ăn n&ecirc;n t&ocirc;n trọng v&agrave; uy t&iacute;n với nhau.</span></strong></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><u><strong>Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng:</strong></u></span></span></span></p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>-&nbsp;Nhận đơn h&agrave;ng online 24/24</strong></span></span></span></p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>- Hotline b&aacute;n h&agrave;ng: Mr Ho&agrave;ng&nbsp;</strong><strong>0983.408.068</strong><strong>&nbsp;&nbsp;từ 7h - 22h h&agrave;ng ng&agrave;y</strong></span></span></span></p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>- Giao h&agrave;ng từ 8h - 21h h&agrave;ng ng&agrave;y</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>Sextoy Gi&aacute; Gốc nhận&nbsp;ship h&agrave;ng đi to&agrave;n quốc.</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>Muốn t&igrave;m mua sextoy uy t&iacute;n, chất lượng tr&ecirc;n to&agrave;n quốc? H&atilde;y đến với ch&uacute;ng t&ocirc;i, bảo đảm c&aacute;c bạn sẽ được phục vụ nhiệt t&igrave;nh, chu đ&aacute;o, lựa chọn được đ&uacute;ng mặt h&agrave;ng m&igrave;nh cần v&agrave; ch&uacute;ng t&ocirc;i cam kết sẽ hỗ trợ, hướng dẫn sau khi mua h&agrave;ng để c&aacute;c bạn c&oacute; c&aacute;ch sử dụng an to&agrave;n nhất.</strong></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="color:rgb(0, 128, 0)"><span style="font-size:16px"><span style="font-family:comic sans ms,cursive"><strong>Giao h&agrave;ng to&agrave;n quốc - nhanh ch&oacute;ng - an to&agrave;n - k&iacute;n đ&aacute;o</strong></span></span></span></p>\r\n', 'chuyển tiền sang Nhật Bản,chuyển tiền sang Nhật,Dịch vụ chuyển tiền sang Nhật Bản,cách chuyển tiền sang Nhật', 'Với kinh nghiệm hơn 9 năm trong ngành buôn bán Sextoy. chúng tôi chuyên cung cấp sỉ và lẻ tất cả các dòng sextoy đẹp như: Búp Bê Silicon Nhật, BAILE Hồng Kong, PicoPong Thuỵ Điển, Durex.. Nguồn hàng đa dạng và phong phú được nhập trực tiếp từ: USA, Japan,', '57', 'http://dochoitinhducshop.com/public/upload/files/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', '', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', '0', 2, 2, '2016-11-12 23:23:41', '2016-11-12 23:23:41'),
(10, 'Giới thiệu sản phẩm', 'gioi-thieu-san-pham', 'Thời tiết Việt Nam hay thay đổi không ổn định khiến con người cũng thay đổi theo, Hà Nội khi thì quá nóng khi lại quá lạnh, công việc căng thẳng Stress liên tục những lúc như vậy các bạn nên thư giãn bằng máy PICOBONG DC25A là máy massage của Thuỵ Điển sản xuất, được thiết kế khá bắt mắt, nhỏ gon, xinh xắn đầy sức quyến rũ. TP: HCM thì thường xuyên nóng khiến con người trở nên khó chịu thêm nữa công việc luôn là một áp lực rất lớn khiến chúng ta cảm thấy mệt mỏi căng thẳng.', '<p>Thời tiết Việt Nam hay thay đổi kh&ocirc;ng ổn định khiến con người cũng thay đổi theo, H&agrave; Nội khi th&igrave; qu&aacute; n&oacute;ng khi lại qu&aacute; lạnh, c&ocirc;ng việc căng thẳng Stress li&ecirc;n tục những l&uacute;c như vậy c&aacute;c bạn n&ecirc;n thư gi&atilde;n bằng m&aacute;y&nbsp;<strong>PICOBONG</strong>&nbsp;DC25A l&agrave; m&aacute;y massage của Thuỵ Điển sản xuất, được thiết kế kh&aacute; bắt mắt, nhỏ gon, xinh xắn đầy sức quyến rũ. TP: HCM th&igrave; thường xuy&ecirc;n n&oacute;ng khiến con người trở n&ecirc;n kh&oacute; chịu th&ecirc;m nữa c&ocirc;ng việc lu&ocirc;n l&agrave; một &aacute;p lực rất lớn khiến ch&uacute;ng ta cảm thấy mệt mỏi căng thẳng.</p>\r\n\r\n<p>Với những chiếc m&aacute;y massage diệu kỳ của Sextoygiagoc ph&acirc;n phối, Sản phẩm sử dụng c&ocirc;ng nghệ v&agrave; thiết kể PICOPONG Thuỵ Điển, tr&ecirc;n thị trường hiện nay c&oacute; rất nhiều sản phẩm với&nbsp;mẫu m&atilde; cũng như chức năng ri&ecirc;ng ph&ugrave; hợp với đa dạng nhu cầu của người ti&ecirc;u d&ugrave;ng:</p>\r\n\r\n<p>&nbsp;<br />\r\n<strong>1.</strong>&nbsp;<strong>Massage cao cấp PicoBong</strong><strong>&nbsp;Model DC25A &ndash; Gi&aacute; b&aacute;n 2.800.000 VND</strong></p>\r\n\r\n<p style="text-align:center"><a href="http://sextoygiagoc.com/may-massage-picobong-cao-cap-ngon-tay-kheo-leo-dc25a-4596633.html" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><img src="http://media.bizwebmedia.net/sites/73280/data/Upload/2014/8/duong_vat_cam_tay_picobong_21.jpg" style="box-sizing:border-box; max-width:100%; vertical-align:middle" /></a></p>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>D&ugrave;ng để massage, giải toả sinh l&yacute; hiệu quả</li>\r\n	<li>Được l&agrave;m từ chất liệu silicone v&agrave; nhựa ADS cao cấp, an to&agrave;n cho người sử dụng..</li>\r\n	<li>Gồm c&oacute; &nbsp;12 chế độ rung tuyệt vời kh&aacute;c nhau c&oacute; thể được điều chỉnh ở nhiều tốc độ.</li>\r\n	<li>Sử dụng 2 pin AAA&nbsp;-&nbsp;K&iacute;ch thước<strong>:</strong>&nbsp;193 x 50 x 37 mm</li>\r\n</ul>\r\n\r\n<h1>2.&nbsp;Đ&egrave;n pin thủ d&acirc;m cao cấp USA Gold FleshLight&nbsp;&nbsp;Model DC17G &ndash; Gi&aacute; b&aacute;n: 1.650.000 VND</h1>\r\n\r\n<p style="text-align:center"><a href="http://sextoygiagoc.com/den-pin-thu-dam-cao-cap-gold-fleshlight-dc17g-4573620.html" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><img src="http://media.bizwebmedia.net/sites/73280/data/Upload/2014/8/den_pin_thu_damgold_fleshlight_23.jpg" style="box-sizing:border-box; max-width:100%; vertical-align:middle" /></a></p>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>T&iacute;nh năng: Giải tỏa sinh l&yacute; hiệu quả</li>\r\n	<li>Chất liệu: Silicone cao cấp, đạt chuẩn y tế, an to&agrave;n cho người sử dụng.</li>\r\n	<li>Đ&oacute;ng g&oacute;i: Hộp kim loại b&ecirc;n ngo&agrave;i</li>\r\n	<li>M&agrave;u sắc: v&agrave;ng Xuất xứ: USA&nbsp;-&nbsp;Sản xuất tại: China</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;3</strong><strong>.&nbsp;M&aacute;y thủ d&acirc;m cao cấp Ailighter Catherine II- DC006</strong><strong>&nbsp;&ndash; Gi&aacute; b&aacute;n: 2.550.000</strong><strong>&nbsp;VND</strong></p>\r\n\r\n<p style="text-align:center"><a href="http://sextoygiagoc.com/may-thu-dam-cao-cap-ailighter-catherine-ii-dc006-10000319.html" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><img alt="" src="http://media.bizwebmedia.net/Sites/73280/data/upload/2015/12/may_thu_dam_tu_dong_katerina_ii_3.gif?3" style="box-sizing:border-box; max-width:100%; vertical-align:middle" /></a></p>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>\r\n	<p><strong>T&iacute;nh năng:</strong>&nbsp;gi&uacute;p nam thủ d&acirc;m, giải tỏa sinh l&yacute;, luyện tập chống xuất tinh sớm</p>\r\n\r\n	<p><strong>Chất liệu:</strong>&nbsp;nhựa ABS, TPE cao cấp, l&otilde;i Silicone si&ecirc;u mềm mại, đạt chuẩn RoHS, tuyệt đối an to&agrave;n với người sử dụng</p>\r\n\r\n	<p><strong>Chức năng:</strong>&nbsp;đa cấp độ rung, thụt l&ecirc;n/xuống, xoay 360&ordm; v&agrave; c&oacute; thể đảo chiều: 3 mức tốc độ v&agrave; 5 tần số xoay.</p>\r\n\r\n	<p><strong>Trọng lượng:</strong>&nbsp;361g</p>\r\n\r\n	<p><strong>Nguồn cấp:</strong>&nbsp;Sạc điện, cổng sạc USB</p>\r\n\r\n	<p><strong>H&atilde;ng sản xuất:</strong>&nbsp;Ailighter</p>\r\n\r\n	<p><strong>Xuất xứ:</strong>&nbsp;Nhật Bản</p>\r\n\r\n	<p><strong>Nhập khẩu:</strong>&nbsp;Hongkong</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>&nbsp;4. M&aacute;y liếm &acirc;m đạo Rolling Fun II - DC41A</strong><strong>&nbsp;: Gi&aacute; b&aacute;n: 1.990.000VND</strong></p>\r\n\r\n<h1 style="text-align:center"><a href="http://sextoygiagoc.com/may-liem-am-dao-rolling-fun-ii-dc41a-10020528.html" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><img alt="" src="http://media.bizwebmedia.net/Sites/73280/data/upload/2016/1/may_kich_thich_am_dao__hau_mon_rolling_fun_baile_15.jpg?3" style="box-sizing:border-box; max-width:100%; vertical-align:middle" /></a></h1>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>&nbsp;H&atilde;ng Sản Xuất: Baile &nbsp;- Xuất xứ: Hongkong&nbsp;- Nhập khẩu: Hongkong</li>\r\n	<li>&nbsp;T&aacute;c dụng: một m&aacute;y massage cao cấp của Baile, gi&uacute;p bạn thoải m&aacute;i hưng phấn v&agrave; kho&aacute;i&nbsp;cảm trong thư gi&atilde;n t&igrave;nh dục nhất, m&aacute;t xa t&igrave;m điểm G, k&iacute;ch th&iacute;ch &acirc;m đạo, hậu m&ocirc;n,&nbsp;giải tỏa nhu cầu sinh l&yacute;, d&ugrave;ng được cho cả nam v&agrave; nữ</li>\r\n	<li>&nbsp;Nguồn cấp: 4 pin AAA</li>\r\n	<li>&nbsp;Chất liệu: silicon cao cấp bọc b&ecirc;n ngo&agrave;i, mềm mại v&agrave; chống ung thư.</li>\r\n</ul>\r\n\r\n<h1>&nbsp;5.&nbsp;Bộ sản phẩm Couples&#39; Kit - d&agrave;nh cho c&aacute;c đ&ocirc;i t&igrave;nh nh&acirc;n&nbsp;&nbsp;Model QT01: Gi&aacute; b&aacute;n: 1.850.000VND</h1>\r\n\r\n<p style="text-align:center"><a href="http://sextoygiagoc.com/bo-san-pham-couple-s-kit-cho-cac-doi-tinh-nhan-qt01-4588947.html" style="box-sizing: border-box; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><img src="http://media.bizwebmedia.net/sites/73280/data/Upload/2014/8/bo_san_pham_couple_s_kit_cho_cac_doi_tinh_nhan_10.jpg" style="box-sizing:border-box; max-width:100%; vertical-align:middle" /></a></p>\r\n\r\n<ul style="margin-left:30px; margin-right:initial">\r\n	<li>T&iacute;nh năng:&nbsp;Giải tỏa sinh l&yacute; hiệu quả.</li>\r\n	<li>Thể loại:&nbsp;Bộ đồ chơi t&igrave;nh dục gồm 3 m&oacute;n.</li>\r\n	<li>H&atilde;ng Sản Xuất:&nbsp;Trinity - Mỹ</li>\r\n	<li>Sản xuất tại: Trung Quốc</li>\r\n	<li><em>Nhập khẩu từ: Mỹ.</em></li>\r\n</ul>\r\n\r\n<p>Với 1 số mẫu&nbsp;n&agrave;y,&nbsp;<strong>Sextoygiagoc</strong>&nbsp;khuy&ecirc;n Bạn n&ecirc;n dựa v&agrave;o sở th&iacute;ch v&agrave; nhu cầu&nbsp;của m&igrave;nh để lựa chọn sản phẩm th&iacute;ch hợp nhất.</p>\r\n', 'chuyển tiền sang Nhật Bản,chuyển tiền sang Nhật,Dịch vụ chuyển tiền sang Nhật Bản,cách chuyển tiền sang Nhật', 'Thời tiết Việt Nam hay thay đổi không ổn định khiến con người cũng thay đổi theo, Hà Nội khi thì quá nóng khi lại quá lạnh, công việc căng thẳng Stress liên tục những lúc như vậy các bạn nên thư giãn bằng máy PICOBONG DC25A là máy massage của Thuỵ Điển sả', '57,62', 'http://dochoitinhducshop.com/public/upload/files/duong_vat_cam_tay_picobong_21.jpg', 'do choi tinh duc', 'http://dochoitinhducshop.com/public/upload/_thumbs/Files/duong_vat_cam_tay_picobong_21.jpg', '0', 1, 2, '2016-11-13 17:21:02', '2016-11-13 17:21:02');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_cate_id_foreign` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `make`, `quantity`, `price`, `price_old`, `intro`, `image_thumb`, `image_link`, `alt`, `content`, `keywords`, `description`, `tags`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(3, 'Massage điểm G cao cấp Mango&Seco Nalone', 'massage-diem-g-cao-cap-mango&seco-nalone', '9', '0', 2100000, 0, '<p><span style="color:rgb(85, 85, 85); font-family:roboto,sans-serif; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Chất liệu:</strong>&nbsp;ABS, TPE cao cấp, b&ecirc;n ngo&agrave;i l&agrave; lớp Silicone si&ecirc;u mềm mịn</span></span><br />\r\n<span style="color:rgb(85, 85, 85); font-family:roboto,sans-serif; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Chức năng:</strong>&nbsp;7 tần số rung</span></span><br />\r\n<span style="color:rgb(85, 85, 85); font-family:roboto,sans-serif; font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Nguồn cấp:</strong>&nbsp;sạc điện, cổng USB</span></span></p>\r\n', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-9.jpg', 'http://dochoitinhducshop.com/public/upload/files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-9.jpg', 'day la chu thich anh', '<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Giới thiệu SP:</strong></span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>T&iacute;nh năng:&nbsp;</strong>k&iacute;ch th&iacute;ch,&nbsp;<a href="http://sextoygiagoc.com/massage-diem-g" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">massage &acirc;m đạo</a>, nhũ hoa, giải tỏa sinh l&yacute;, chống l&atilde;nh cảm ở nữ giới</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Chất liệu:</strong>&nbsp;ABS, TPE cao cấp, b&ecirc;n ngo&agrave;i l&agrave; lớp Silicone si&ecirc;u mềm mịn, an to&agrave;n với người sử dụng</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Chức năng:</strong>&nbsp;7 tần số rung</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Nguồn cấp:</strong>&nbsp;sạc điện, cổng USB</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>H&atilde;ng sản xuất:</strong>&nbsp;<a href="http://sextoygiagoc.com/nalone-japan" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">Nalone</a>-Japan</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Xuất xứ:</strong>&nbsp;Hongkong</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D</strong>&nbsp;được thiết kế với kiểu d&aacute;ng sang trọng, hiện đại, đa chức năng, vừa gi&uacute;p c&aacute;c n&agrave;ng tự sướng, giải tỏa căng thẳng, mệt mỏi, &aacute;p lực cuộc sống, lại l&agrave; c&ocirc;ng cụ gi&uacute;p chống l&atilde;nh cảm cho những c&ocirc; n&agrave;ng mất cảm gi&aacute;c, kh&ocirc;ng c&oacute; hứng th&uacute; trong chuyện ấy.</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif">Hơn nữa, đối với c&aacute;c cặp đ&ocirc;i lạnh nhạt trong chuyện ph&ograve;ng the th&igrave;&nbsp;<a href="http://sextoygiagoc.com/massage-diem-g" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank"><strong>Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D</strong></a>&nbsp;c&ograve;n l&agrave; đối t&aacute;c ho&agrave;n hảo trong việc gắn kết y&ecirc;u thương, h&agrave;n gắn những rạn nứt, khơi dậy sự&nbsp;hứng khởi, niềm khao kh&aacute;t, đam m&ecirc;&nbsp;được ho&agrave;&nbsp;quyện v&agrave;o nhau, mang đến cảm gi&aacute;c tuyệt vời như ng&agrave;y mới y&ecirc;u.</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif">Sản phẩm c&oacute; kiểu d&aacute;ng nhỏ gọn, xinh xắn, m&agrave;u hồng bắt mắt, dễ thương, đ&aacute;nh tr&uacute;ng v&agrave;o t&acirc;m l&yacute; th&iacute;ch l&atilde;ng mạn, ngọt ng&agrave;o của c&aacute;c c&ocirc; n&agrave;ng nhạy cảm,&nbsp;c&aacute; t&iacute;nh. Ch&iacute;nh v&igrave; vậy m&agrave; n&oacute; c&oacute; thể trở th&agrave;nh m&oacute;n qu&agrave; đặc biệt d&agrave;nh cho c&aacute;c n&agrave;ng, khiến ch&agrave;ng ngay lập tức được cộng th&ecirc;m điểm trong mắt n&agrave;ng.</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif">Sản phẩm gồm 1&nbsp;<a href="http://sextoygiagoc.com/trung-rung" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">trứng rung</a>&nbsp;Mango&nbsp;v&agrave; 1 massage-kẹp ngực Seco, 2 th&agrave;nh phần n&agrave;y đều c&oacute; 7 tần số rung hoạt động đồng thời&nbsp;với 2 n&uacute;t điều chỉnh đơn giản ngay tr&ecirc;n th&acirc;n gi&uacute;p dễ d&agrave;ng điều chỉnh khi sử dụng.</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif">So với phi&ecirc;n bản trước, phi&ecirc;n bản n&agrave;y c&oacute; kết hợp th&ecirc;m 1 trứng rung Mango gi&uacute;p k&iacute;ch th&iacute;ch đồng thời nhiều điểm nhạy cảm tr&ecirc;n cơ thể phụ nữ, khiến c&aacute;c n&agrave;ng sung sướng, đ&ecirc; m&ecirc; kh&oacute; cưỡng.</span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><strong>Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D</strong>&nbsp;l&agrave; sản phẩm cao cấp của h&atilde;ng Nalone nổi tiếng về&nbsp;<a href="http://sextoygiagoc.com/" style="box-sizing: border-box; font-family: Roboto, sans-serif !important; background-color: transparent; color: rgb(204, 0, 255); text-decoration: none !important;" target="_blank">đồ chơi t&igrave;nh dục</a>&nbsp;tr&ecirc;n to&agrave;n thế giới, do đ&oacute;, bạn c&oacute; thể tin tưởng tuyệt đối về độ an to&agrave;n cũng như hiệu quả sử dụng v&agrave; độ k&iacute;ch th&iacute;ch, đ&ecirc; m&ecirc; của n&oacute;.</span></p>\r\n\r\n<p style="text-align:center"><span style="font-family:tahoma,geneva,sans-serif"><img alt="Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/9/massage_diem_g_cao_cap_sinmis_26.jpg" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /><img alt="Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D" src="http://bizweb.dktcdn.net/100/086/968/files/trung-rung-cao-cap-massage-nguc-am-dao-sinmis-nalone-20.jpg?v=1471775495954" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /><img alt="Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/9/massage_diem_g_cao_cap_sinmis_13.jpg" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /><img alt="Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/9/massage_diem_g_cao_cap_sinmis_15.jpg" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /><img alt="Massage điểm G cao cấp Mango&amp;Seco Nalone - DC54D" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/9/massage_diem_g_cao_cap_sinmis_18.jpg" style="border:0px; box-sizing:border-box; font-family:roboto,sans-serif !important; max-width:100%; vertical-align:middle" /></span></p>\r\n', NULL, 'day la mo ta', '54,59', 1, 65, '2016-11-11 08:53:01', '2016-11-11 08:53:01'),
(4, 'Kem bôi làm to dương vật titan DeveloppeSex', 'kem-boi-lam-to-duong-vat-titan-developpesex', '61', '0', 550000, 0, '<p><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">- T&iacute;nh năng:&nbsp;l&agrave;m to&nbsp;<strong>dương vật</strong>&nbsp;tự nhi&ecirc;n, cải thiện chức năng sinh l&yacute; cho nam giới, k&eacute;o d&agrave;i thời gian quan hệ.</span></span></p>\r\n\r\n<p><span style="font-family:tahoma,geneva,sans-serif"><span style="font-family:roboto,sans-serif !important">- Th&agrave;nh phần: nước, glycol stearate SE, isopropyl myristate, dầu fenugreed, allantoin, vatamine A, phenoxyethanol, Fragance.</span></span></p>\r\n', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', 'http://dochoitinhducshop.com/public/upload/files/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', 'chu thich anh', '<p><img src="http://bizweb.dktcdn.net/100/086/968/files/kem-boi-lam-to-duong-vat-developpe-sex-phap-28-1.jpg?v=1470715250950" /></p>\r\n\r\n<p><strong>Giới thiệu SP:</strong></p>\r\n\r\n<p>&ndash; T&iacute;nh năng:&nbsp;l&agrave;m to&nbsp;<strong>dương vật</strong>&nbsp;tự nhi&ecirc;n, cải thiện chức năng sinh l&yacute; cho nam giới, k&eacute;o d&agrave;i thời gian quan hệ.</p>\r\n\r\n<p>&ndash; Đối tượng sử dụng: Nam</p>\r\n\r\n<p>&ndash; Th&agrave;nh phần:&nbsp;Composition INCI : Aqua, cetearyl alcohol, glyceryl stearate, decyl oleate, ceteareth-30, ceteareth-33, phenoxyethanol, cetyl alcohol, parfum, hexyl cinnamal, linalool,amyl cinnamal, allantoin, ethylhexylglycerin, aloes barbadenis extract, cinnamyl alcohol, eugenol.</p>\r\n\r\n<p>&ndash; Hiệu quả sử dụng: d&ugrave;ng 4-6 tuyp</p>\r\n\r\n<p>&ndash; Dung t&iacute;ch: 50ml</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i dưới dạng: kem&nbsp;m&agrave;u trắng mờ</p>\r\n\r\n<p>&ndash; Kh&ocirc;ng c&oacute; t&aacute;c dụng phụ.</p>\r\n\r\n<p>&ndash; Chống chỉ định: phụ nữ mang thai, trẻ em v&agrave; tr&aacute;nh để sản phẩm d&iacute;nh v&agrave;o mắt.</p>\r\n\r\n<p>- Đối tượng sử dụng: &nbsp;Nam từ 18 tuổi trở l&ecirc;n</p>\r\n\r\n<p>-C&aacute;ch d&ugrave;ng: Đối tượng nam dưới 30 tuổi đạt hiệu quả khi sử dụng tối thiểu 4 tuyp Developpe sex</p>\r\n\r\n<p><em>Đối tượng nam tr&ecirc;n 30 tuổi</em>: &nbsp;đạt hiệu quả khi sử dụng tối thiểu 6 tuyp Developpe sex</p>\r\n\r\n<p>&ndash; Đ&oacute;ng g&oacute;i: 14cm x 4.5cm x 3.5cm.</p>\r\n\r\n<p>&ndash; Khối&nbsp;lượng: 100g.</p>\r\n\r\n<p>&ndash; H&atilde;ng sản xuất: France Concorde</p>\r\n\r\n<p>&ndash; Nh&agrave; sản xuất: Concorde 123, rue Alexandre Fourny 94506, Champigny-sur &ndash; Marne Cedex &ndash; France</p>\r\n\r\n<p>&ndash; H&atilde;ng sản xuất: Ph&aacute;p</p>\r\n\r\n<p>&ndash; Nh&agrave; PP độc quyền tại Việt Nam: C&ocirc;ng ty TNHH dược phẩm STL. No 4, L&ocirc; II, KCN Quang Minh, M&ecirc; Linh, H&agrave; Nội</p>\r\n\r\n<p><strong>Khuyến m&atilde;i đặc biệt:</strong></p>\r\n\r\n<p><strong>+ Mua 2 tuyp = 1.000.000 vnd (500.000/tuyp)</strong></p>\r\n\r\n<p><strong>+ Mua 3 tuyp = 1.200.000 vnd (400.000/tuyp)</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; + Mua 4 tặng 2 = 2.280.000 vnd (380.000/tuyp)</strong></p>\r\n\r\n<p>Sản phẩm được nhập từ Ph&aacute;p.</p>\r\n\r\n<p><strong>Đặc điểm của Developpe sex:</strong></p>\r\n\r\n<p>+ Dạng kem m&agrave;u trắng, m&ugrave;i thuốc bắc, kh&ocirc;ng vị v&agrave; h&ograve;a tan trong nước, do đ&oacute;, c&aacute;c ch&agrave;ng ho&agrave;n to&agrave;n c&oacute; thể b&iacute; mật sử dụng, mang lại niềm vui, m&oacute;n qu&agrave; bất ngờ d&agrave;nh cho n&agrave;ng chỉ sau 1 th&aacute;ng sử dụng</p>\r\n\r\n<p>+ Th&agrave;nh phần được chiết xuất ho&agrave;n to&agrave;n từ c&aacute;c loại thảo dược tự nhi&ecirc;n, tuyệt đối kh&ocirc;ng g&acirc;y dị ứng, bỏng r&aacute;t khi sử dụng, kh&ocirc;ng t&aacute;c dụng phụ, an to&agrave;n với người sử dụng</p>\r\n\r\n<p>+ Nhập trực tiếp từ Ph&aacute;p, được hầu hết nam giới ch&acirc;u &Acirc;u v&agrave; ch&acirc;u Mỹ sử dụng. Đ&oacute; l&agrave; l&yacute; do tại sao c&aacute;c anh ch&agrave;ng ch&acirc;u &Acirc;u lu&ocirc;n sở hữu s&uacute;ng ống si&ecirc;u khủng m&agrave; Việt Nam lại kh&ocirc;ng thể c&oacute; được. Để mang lại cho đ&agrave;n &ocirc;ng Việt Nam c&oacute; những giấc mơ huy ho&agrave;ng trong đời sống t&igrave;nh dục ch&uacute;ng t&ocirc;i đ&atilde; tạo ra một cuộc c&aacute;ch mạng đột ph&aacute; nhằm thay đổi suy nghĩ của phụ nữ ch&acirc;u &Aacute; khi cho rằng chỉ ch&acirc;u &acirc;u mới c&oacute; h&agrave;ng khủng, ch&uacute;ng t&ocirc;i đ&atilde; t&igrave;m t&ograve;i bằng mọi lỗ lực v&agrave; kết quả đ&atilde; t&igrave;m ra Developpe sex &nbsp;l&agrave; phi&ecirc;n bản mới nhất, hiệu quả nhất, ph&ugrave; hợp cho đ&agrave;n &ocirc;ng ch&acirc;u &Aacute; sử dụng.</p>\r\n\r\n<p>Cơ chế hoạt động của&nbsp;<strong>Developpe Sex</strong>:</p>\r\n\r\n<p>Được chiết xuất&nbsp;từ tinh chất&nbsp;thảo dược thi&ecirc;n nhi&ecirc;n&nbsp;độc đ&aacute;o c&oacute; thể l&agrave;m tăng chảy&nbsp;m&aacute;u ngược, giải ph&oacute;ng nội tiết tố nam giới&nbsp;được lưu trữ trong cơ thể v&agrave;&nbsp;bắt đầu sản xuất hormone tự nhi&ecirc;n của cơ thể, cung cấp chất dinh dưỡng cần thiết cho sự tăng trưởng dương vật, tăng cường&nbsp;lưu lượng m&aacute;u&nbsp;lưu th&ocirc;ng tới&nbsp;<strong>dương vật</strong>, v&agrave; th&uacute;c đẩy&nbsp;sự ph&aacute;t triển của&nbsp;<strong>dương vật</strong>.</p>\r\n\r\n<p>Sản phẩm hoạt động dựa tr&ecirc;n nguy&ecirc;n l&yacute; l&agrave;m gi&atilde;n nở c&aacute;c m&ocirc;, cơ của dương vật, gi&uacute;p lưu lượng m&aacute;u dồn về nu&ocirc;i dưỡng dương vật, tạo ra độ gi&atilde;n nở ổn định v&agrave; ph&aacute;t triển 1 c&aacute;ch tự nhi&ecirc;n, kh&ocirc;ng bị teo lại khi ngừng sử dụng.</p>\r\n\r\n<p style="text-align:center"><img alt="Kem bôi làm to dương vật DeveloppeSex - XTS10" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2016/4/developpe_sex_tang_kich_thuoc_duong_vat_nam_gioi_lam_to_duong_vat_7.jpg" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /><img src="http://bizweb.dktcdn.net/100/086/968/files/kem-boi-lam-to-duong-vat-developpe-sex-phap-28-1.jpg?v=1470715250950" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /><img alt="Kem bôi làm to dương vật DeveloppeSex - XTS10" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2016/4/kem_boi_lam_to_duong_vat_developpe_sex_phap_18.jpg" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /><img alt="Kem bôi làm to dương vật DeveloppeSex - XTS10" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2016/4/kem_boi_lam_to_duong_vat_developpe_sex_phap_17.jpg" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /><img alt="Kem bôi làm to dương vật DeveloppeSex - XTS10" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2016/4/kem_boi_lam_to_duong_vat_developpe_sex_phap_14.jpg" style="border:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /></p>\r\n', NULL, 'day la mo ta', '57,61', 1, 37, '2016-11-11 09:31:52', '2016-11-11 09:31:52');

-- --------------------------------------------------------

--
-- Structure de la table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `image_thumb`, `alt`, `product_id`, `created_at`, `updated_at`) VALUES
(16, 'http://dochoitinhducshop.com/public/upload/files/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', 'http://dochoitinhducshop.com/public/upload/_thumbs/Images/developpe-sex-tang-kich-thuoc-duong-vat-nam-gioi-lam-to-duong-vat-7.jpg', 'chu thich anh 1', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `shop`
--

INSERT INTO `shop` (`id`, `location`, `phone`, `tel`, `email`, `facebook`) VALUES
(1, '123 bình thạnh', '0965678291', '0965678291', 'dochoitinhducshop@gmail.com', 'https://www.facebook.com/Do-Choi-Tinh-Duc-SHOP-983221381807525/');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(54, 'massage', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'sextoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'sextoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'key', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'nong', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'do choi tinh duc', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Thái', 'hongthai@gmail.com', '123', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', '$2y$10$2cUc5CpBdK.4BY0kM5ElKubuFRgnCTvoKV8TGbV1WpfNiwXKz2nBC', 'bWS5ORNCWzkhSDUakXW3PTYRDdnfkKcW2wMFdcjjHlcdcWFnQN8l72K181gt', '2016-11-11 07:12:01', '2016-11-11 10:14:56');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
