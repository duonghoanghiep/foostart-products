-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 07, 2017 lúc 12:15 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dev_laravel_fau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_overview` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_cost` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_overview`, `product_title`, `product_cost`, `product_description`, `product_name`) VALUES
(65, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>222</p>'),
(66, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>333</p>'),
(67, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>44</p>'),
(68, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>55</p>'),
(69, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>66</p>'),
(70, '<p>111</p>', '<p>22</p>', '<p>111</p>', '<p>1111</p>', '<p>77</p>');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
