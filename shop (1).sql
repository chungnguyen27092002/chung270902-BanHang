-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2024 lúc 10:48 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `TaiKhoan` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Sodienthoai` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`TaiKhoan`, `MatKhau`, `email`, `Sodienthoai`) VALUES
('chung', '123456', 'chung@gmail.com', 98384783),
('giang123', 'giang123', 'giang123@gmail.com', 962524613),
('giangnguyen', '123456', 'giang@gmail.com', 9766232),
('loinguyen', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(12) NOT NULL DEFAULT 0,
  `pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: tiền mặt; 1: ck; 2: thanh toán the'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`id`, `name`, `address`, `tel`, `email`, `total`, `pttt`) VALUES
(2, 'fsdfdsfd', 'gdfgfd gdf', '546546', 'tranbaho@gmail.com', 0, 0),
(3, 'fsdfdsfd', 'gdfgfd gdf', '45654654', 'tranbaho@gmail.com', 0, 0),
(4, 'fsdfdsfd', 'gdfgfd gdf', '45654654', 'tranbaho@gmail.com', 0, 0),
(5, 'Tran', 'hthj', '64564', 'tranbaho@gmail.com', 0, 0),
(6, 'HO', 'Q8', '87879689', 'tranbaho@gmail.com', 0, 0),
(7, 'tuong', 'quan 8', '786876876', 'tranbaho@gmail.com', 150, 0),
(8, 'baho', 'pham the hien', '78687687', 'tranbaho@gmail.com', 150, 0),
(9, 'hotb', 'fpt', '678687678', 'tranbaho@gmail.com', 150, 0),
(10, 'tuogn tuong', 'pham the hien', '78678687', 'tuong@gmail.com', 150, 0),
(11, 'Tran tran', 'quận 8 hcm', '89789789789', 'tranbaho@gmail.com', 150, 0),
(12, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 350, 0),
(13, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(14, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(15, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(16, 'loi', 'hanoi', '0962524613', 'loinguyen.cool@gmail.com', 60, 0),
(17, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 90, 0),
(18, 'dd', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 150, 0),
(19, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 510, 0),
(20, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(21, 'koi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 120, 0),
(22, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 240, 0),
(23, 'koi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 120, 0),
(24, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(25, 'nguyensiloi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 330, 0),
(26, 'nguyensiloi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(27, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 120, 0),
(28, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 60, 0),
(29, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 300, 0),
(30, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 0, 0),
(31, 'koi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 120, 0),
(32, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 214, 0),
(33, 'gaing', 'ha noi', '3909343', 'loinguyen.cool@gmail.com', 25, 0),
(34, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 120, 0),
(35, 'loinguyen', 'hanoi', '0962524613', 'loinguyen.cool@gmail.com', 228, 0),
(36, 'loinguyen', 'hanoi', '0962524613', 'loinguyen.cool@gmail.com', 299, 0),
(37, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 149, 0),
(38, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 50, 0),
(39, 'nguyensiloi', 'ha noi', '2343423', 'loinguyen.cool@gmail.com', 223, 0),
(40, 'nguyensiloi', 'ha noi', '2343423', 'loinguyen.cool@gmail.com', 0, 0),
(41, 'loi', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 246, 0),
(42, 'trần trí kinh', 'lâm lao', '09772832', 'loinguyen.cool@gmail.com', 90, 0),
(43, 'loinguyen', 'ha noi', '0962524613', 'loinguyen.cool@gmail.com', 230, 0),
(44, 'Nguyễn Chung', 'Phạm Văn Đồng Hà Nội', '0968525419', 'chungnguyen27092002@gmail.com', 510, 0),
(45, 'Nguyễn Chung', 'Phạm Văn Đồng Hà Nội', '0968525419', 'chungnguyen27092002@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `hinhsp` varchar(100) NOT NULL,
  `dongia` int(12) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL DEFAULT 0,
  `thanhtien` int(12) NOT NULL DEFAULT 0,
  `idbill` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `tensp`, `hinhsp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 'Đồng hồ', '1.jpg', 10, 1, 10, 8),
(2, 'Laptop', '2.gif', 20, 4, 80, 8),
(3, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 8),
(4, 'Đồng hồ', '1.jpg', 10, 1, 10, 9),
(5, 'Laptop', '2.gif', 20, 4, 80, 9),
(6, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 9),
(7, 'Đồng hồ', '1.jpg', 10, 1, 10, 10),
(9, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 10),
(10, 'Đồng hồ', '1.jpg', 10, 1, 10, 11),
(12, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 11),
(13, 'Đồng hồ đen G-Shock', '4.jpg', 40, 2, 80, 12),
(14, 'Đồng hồ kim cương trắng', '3.jpg', 30, 9, 270, 12),
(15, 'Đồng hồ kim cương trắng', '3.jpg', 30, 2, 60, 16),
(16, 'Đồng hồ kim cương trắng', '3.jpg', 30, 3, 90, 17),
(17, 'Đồng hồ kim cương trắng', '3.jpg', 30, 2, 60, 18),
(18, 'Đồng hồ đen G-Shock', '4.jpg', 40, 1, 40, 18),
(20, 'Đồng hồ đen G-Shock', '4.jpg', 40, 3, 120, 19),
(21, 'Đồng hồ kim cương trắng', '3.jpg', 30, 1, 30, 19),
(22, 'dong ho nam cao cap', '9.jpg', 120, 3, 360, 19),
(23, 'dong ho nam cao cap', '9.jpg', 120, 1, 120, 21),
(24, 'dong ho nam cao cap', '9.jpg', 120, 2, 240, 22),
(25, 'dong ho nam cao cap', '9.jpg', 120, 1, 120, 23),
(26, 'dong ho nam cao cap', '9.jpg', 120, 2, 240, 25),
(27, 'dong ho nam myhas', '2.jpg', 90, 1, 90, 25),
(28, 'dong ho nam cao cap', '9.jpg', 120, 1, 120, 27),
(29, 'dong ho nam mirya', '2.jpg', 60, 1, 60, 28),
(30, 'dong ho nam myhas', '2.jpg', 90, 2, 180, 29),
(31, 'dong ho nam cao cap', '9.jpg', 120, 1, 120, 29),
(32, 'dong ho nam cao cap', '9.jpg', 120, 1, 120, 31),
(33, 'dong ho nam myhas10', '2.jpg', 85, 1, 85, 32),
(34, 'day dong ho vang', '16.jpg', 30, 1, 30, 32),
(35, 'dong ho casio', '2.jpg', 99, 1, 99, 32),
(36, 'day dong ho da trau', '25.jpg', 25, 1, 25, 33),
(37, 'day dong ho vang', '16.jpg', 30, 1, 30, 34),
(38, 'dong ho cao cap', '4.jpg', 90, 1, 90, 34),
(39, 'dong ho casio', '2.jpg', 99, 2, 198, 35),
(40, 'day dong ho vang', '16.jpg', 30, 1, 30, 35),
(41, 'đồng hồ nữ', '10.jpg', 50, 3, 150, 36),
(42, 'dong ho casio', '2.jpg', 99, 1, 99, 36),
(43, 'day dong ho da trau', '25.jpg', 25, 2, 50, 36),
(44, 'đồng hồ nữ', '10.jpg', 50, 1, 50, 37),
(45, 'dong ho casio', '2.jpg', 99, 1, 99, 37),
(46, 'đồng hồ nữ', '10.jpg', 50, 1, 50, 38),
(47, 'serum fofa', 'mypham2.jpg', 123, 1, 123, 39),
(48, 'sửa rửa mặt', 'mypham3.jpg', 50, 1, 50, 39),
(49, 'sửa rửa mặt ', 'mypham3.jpg', 50, 1, 50, 39),
(50, 'serum fofa', 'mypham2.jpg', 123, 2, 246, 41),
(51, 'kem mịn', 'mypham5.jpg', 90, 1, 90, 42),
(52, 'sửa rửa mặt ', 'mypham3.jpg', 50, 1, 50, 43),
(53, 'kem mịn', 'mypham5.jpg', 90, 2, 180, 43),
(54, 'serum fofa', 'mypham2.jpg', 140, 2, 280, 44),
(55, 'kem dưỡng da', 'mypham2.jpg', 60, 3, 180, 44),
(56, 'sửa rửa mặt', 'mypham3.jpg', 50, 1, 50, 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cata`
--

CREATE TABLE `tbl_cata` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cata`
--

INSERT INTO `tbl_cata` (`id`, `name`) VALUES
(1, 'sữa rửa mặt'),
(2, 'serum'),
(7, 'dưỡng ẩm cao cấp'),
(8, 'kem chống nắng'),
(9, 'bông tẩy trang'),
(10, 'skincare');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phukien`
--

CREATE TABLE `tbl_phukien` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(12) NOT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phukien`
--

INSERT INTO `tbl_phukien` (`id`, `name`, `img`, `price`, `mota`) VALUES
(1, 'mặt nạ dưỡng da', 'mn.jpg', 50, 'cao cap'),
(2, 'mặt nạ dưỡng ẩm', 'mn2.jpg', 30, 'caocap'),
(3, 'mặt nạ chống lão hoá', 'mn3.jpg', 25, 'nhapkhau'),
(4, 'mặt nạ cao cấp', 'mn4.jpg', 40, 'mặt nạ'),
(5, 'mặt nạ', 'mn2.jpg', 30, 'mặt nạ'),
(6, 'mặt nạ cao cấp', 'mn4.jpg', 20, 'xin'),
(7, 'măt nạ dưỡng ẩm', 'mn3.jpg', 30, 'caocap'),
(8, 'Dưỡng Da', 'mn.jpg', 30, 'nhapkhau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(12) NOT NULL,
  `mota` text DEFAULT NULL,
  `idcata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `img`, `price`, `mota`, `idcata`) VALUES
(3, 'mỹ phẩm', 'mypham1.jpg', 40, 'cao cap', 7),
(4, 'kem trống nắng', 'mypham2.jpg', 90, 'limited', 9),
(7, 'kem dưỡng ẩm', 'mypham3.jpg', 60, 'cao cap', 10),
(8, 'tẩy da chết', 'mypham4.jpg', 20, 'cao cap', 9),
(9, 'serum', 'mypham5.jpg', 55, 'limited', 10),
(10, 'sửa rửa mặt', 'mypham3.jpg', 50, 'mau xanh', 10),
(11, 'kem dưỡng da', 'mypham2.jpg', 60, 'cao cap', 9),
(13, 'serum2a', 'mypham4.jpg', 85, 'limited', 10),
(20, 'kem chống năng fob', 'mypham2.jpg', 99, 'cao cap', 9),
(21, 'kem mịn', 'mypham5.jpg', 90, 'cao cap', 10),
(24, 'sửa rửa mặt ', 'mypham3.jpg', 50, 'cao cap', 9),
(25, 'serum fofa', 'mypham2.jpg', 140, 'mau xanh', 10),
(27, 'Kem trống nắng', 'mypham2.jpg', 50, '', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Sodienthoai` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`TaiKhoan`, `MatKhau`, `email`, `Sodienthoai`) VALUES
('admin', '123456', 'loi@gmail.com', 962524613),
('admin123', 'loi123', 'loikka@gmail.com', 962524613),
('chung123', '123456', 'chung@gmail.com', 965265406),
('nguyenchung', '123456', 'chungnguyen@gmail.com', 962524613),
('nguyensiloi', '123456', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`TaiKhoan`);

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cata`
--
ALTER TABLE `tbl_cata`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_phukien`
--
ALTER TABLE `tbl_phukien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pro_Cata` (`idcata`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`TaiKhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_cata`
--
ALTER TABLE `tbl_cata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_phukien`
--
ALTER TABLE `tbl_phukien`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `FK_Pro_Cata` FOREIGN KEY (`idcata`) REFERENCES `tbl_cata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
