-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th2 19, 2022 lúc 05:30 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `manager_user`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `name`, `address`, `phone_number`) VALUES
(6, 'nguyen', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(7, 'nguyen', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '', '', ''),
(8, 'nguyen1', '202cb962ac59075b964b07152d234b70', 'Nguyễn Bảo Nguyên', 'Hải Phòng, Việt Nam', '0123456789'),
(9, 'Huya18ah', '781e5e245d69b566979b86e28d23f2c7', 'Nguyễn Bảo Huy', 'Hfhxhfhdhjsndjjbd', '0102828');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `dichvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylam` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhanxet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benhnhan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `dichvu`, `ngaylam`, `nhanxet`, `benhnhan_id`) VALUES
(4, 'Very good', '16-02-2022 06:04:03am', 'Hảo tốt hay sáng tạo \r\n', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `benhnhan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `content`, `benhnhan_id`) VALUES
(13, 'Hãy trờ thành 1 tỷ phú nhá bạn ', 6),
(14, 'okok', 6),
(15, 'Nguyên gao đen ,trâu đến từ rùng xanh Ha ...Gao Đen', 9),
(16, 'Một ngày đầy năng suất nào ae ', 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benhnhan_feedback` (`benhnhan_id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_status` (`benhnhan_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `benhnhan_feedback` FOREIGN KEY (`benhnhan_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `user_status` FOREIGN KEY (`benhnhan_id`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
