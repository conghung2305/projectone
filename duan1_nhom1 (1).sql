-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2023 lúc 11:17 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_nhom1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sanpham`
--

CREATE TABLE `anh_sanpham` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `anhspmt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sanpham`
--

INSERT INTO `anh_sanpham` (`id`, `id_sanpham`, `anhspmt`) VALUES
(51, 67, '637983398315589960_vivo-y22s-xanh-dd.jpg'),
(52, 67, '638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg'),
(53, 67, 'anhdt8.jpg'),
(54, 67, 'anhdt9.webp'),
(55, 67, 'iphone.jpg'),
(56, 67, 'iphone-13-pro-max-xanh-1.jpg'),
(57, 68, 'redmi.jpg'),
(58, 68, 'redmi1.jpg'),
(59, 68, 'redmi2.jpg'),
(60, 68, 'redmi3.jpg'),
(61, 68, 'redmi4.jpg'),
(62, 68, 'redmi5.webp'),
(63, 69, 'anhdt8.jpg'),
(64, 69, 'anhdt9.webp'),
(65, 69, 'dt8.jpg'),
(66, 69, 'iphone.jpg'),
(67, 69, 'oneplus_11_-_black_-_rgb_1.jpg'),
(68, 69, 'redmi1.jpg'),
(69, 70, 'oneplus_11_-_black_-_rgb_1.jpg'),
(70, 70, 'redmi1.jpg'),
(71, 70, 'redmi2.jpg'),
(72, 70, 'redmi3.jpg'),
(73, 70, 'redmi4.jpg'),
(74, 70, 'redmi5.webp'),
(75, 71, 'oneplus_11_-_black_-_rgb_1.jpg'),
(76, 71, 'redmi1.jpg'),
(77, 71, 'redmi2.jpg'),
(78, 71, 'redmi3.jpg'),
(79, 71, 'redmi4.jpg'),
(80, 71, 'redmi5.webp'),
(81, 72, 'ảnh slide4.png'),
(82, 72, 'anhdt2.jpg'),
(83, 72, 'anhdt7.png'),
(84, 72, 'anhdt8.jpg'),
(85, 72, 'anhdt9.webp'),
(86, 72, 'dt8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id_nguoidung` int(10) NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `id_nguoidung`, `id_sanpham`, `ngay_bl`) VALUES
(12, 'được của ó màu máy đẹp dùng cũng ổn với tầm giá', 18, 29, '2023-11-24 11:10:54'),
(30, 'được của ó màu máy đẹp dùng cũng ổn với tầm giá', 21, 59, '2023-12-02 04:44:23'),
(31, 'nhìn trông cũng được mà giá hơi chát dùng cũng uk  duyệt', 21, 65, '2023-12-02 06:42:43'),
(32, 'nhìn trông cũng được mà giá hơi chát dùng cũng uk  duyệt', 21, 66, '2023-12-02 06:43:26'),
(33, 'nhìn trông cũng được  mà chưa có tiền mua', 25, 66, '2023-12-02 07:10:58'),
(34, 'nhìn trông cũng được mà giá hơi chát dùng cũng uk  duyệt', 25, 67, '2023-12-02 07:26:28'),
(36, 'được của ó màu máy đẹp dùng cũng ổn với tầm giá', 21, 67, '2023-12-02 07:34:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `anh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_danhmuc`, `anh`) VALUES
(10, 'điện thoại opop', '638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg'),
(15, 'điện thoại redmi', 'redmi2.jpg'),
(17, 'điện thoại iphone', 'anhdt9.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `id_nguoidung` int(10) NOT NULL,
  `bill_pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 thanh toán trực tiếp\r\n',
  `ngay_dh` timestamp NOT NULL DEFAULT current_timestamp(),
  `tong_donhang` int(10) NOT NULL,
  `ten_nguoinhan` varchar(255) NOT NULL,
  `sdt_nguoinhan` varchar(255) NOT NULL,
  `diachi_nguoinhan` varchar(255) NOT NULL,
  `trangthai` varchar(100) NOT NULL DEFAULT '0' COMMENT '0 đang chờ xác nhận \r\n1 đặt thanh công \r\n2 đang giao\r\n3 đã  giao thành công  '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_nguoidung`, `bill_pttt`, `ngay_dh`, `tong_donhang`, `ten_nguoinhan`, `sdt_nguoinhan`, `diachi_nguoinhan`, `trangthai`) VALUES
(280, 26, 1, '2023-12-03 15:54:44', 19500000, 'user1', '0377231764', 'mỹ hào hung yên', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) NOT NULL,
  `ten_lienhe` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `ten_lienhe`, `sdt`, `email`, `diachi`, `noidung`) VALUES
(1, 'nguyễn nhất', 'nhatnvph31152@fpt.edu.vn', '0377231949', 'tổ dân phố quan cù', 'giúp tôi fix lại ddowen hàng\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `nhan_hieu` varchar(255) NOT NULL,
  `tensp` varchar(255) DEFAULT NULL,
  `anhsp` varchar(255) NOT NULL,
  `gia` float NOT NULL,
  `mota` text NOT NULL,
  `luot_xem` int(10) NOT NULL,
  `ngay_xuat_xuong` date NOT NULL,
  `luot_mua` int(10) NOT NULL,
  `mau_sac` varchar(200) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `bo_nho` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `iddm` int(10) NOT NULL,
  `giam_gia` int(11) NOT NULL DEFAULT 0,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `nhan_hieu`, `tensp`, `anhsp`, `gia`, `mota`, `luot_xem`, `ngay_xuat_xuong`, `luot_mua`, `mau_sac`, `pin`, `bo_nho`, `camera`, `iddm`, `giam_gia`, `so_luong`) VALUES
(67, 'ihone', 'điện thoại iphone 13 ', 'anhdt9.webp', 7500000, 'đẹp lắm luôn ', 42, '2023-12-22', 16, 'xanh đen', '5050mAH', ' 128GB', '40pixel', 17, 5, 0),
(68, 'redmi', 'redmi 12t pro', 'redmi.jpg', 6500000, 'màu đen cầm râtts sướng tay \r\n', 12, '2023-12-15', 1, 'đen nhám', '5050mAH', ' 128GB', '120pixel', 15, 5, 0),
(69, 'ihone', 'điện thoai ịphone 15', 'iphone.jpg', 23000000, 'đẹp mà đắt quá nhịn mấy hôm mới mua được ', 25, '2023-12-15', 8, 'vanh ánh bạc', '4800mAH', ' 256GB', '128pixel', 17, 5, 0),
(70, 'redmi', 'redmi 11t pro', 'redmi4.jpg', 12000000, 'đẹp', 44, '2023-12-06', 12, 'xanh', '5050mAH', ' 256GB', '64pixel', 17, 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_donhang`
--

CREATE TABLE `sanpham_donhang` (
  `id` int(10) NOT NULL,
  `id_nguoidung` int(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `soluong` int(100) NOT NULL,
  `thanhtien` int(100) NOT NULL,
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_donhang`
--

INSERT INTO `sanpham_donhang` (`id`, `id_nguoidung`, `id_sanpham`, `anh_sp`, `ten_sp`, `gia`, `soluong`, `thanhtien`, `id_bill`) VALUES
(403, 26, 70, 'redmi4.jpg', 'redmi 11t pro', 12000000, 1, 12000000, 280),
(404, 26, 67, 'anhdt9.webp', 'điện thoại iphone 13 ', 7500000, 1, 7500000, 280);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `ten_nguoidung` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ten_nguoidung`, `mat_khau`, `email`, `sdt`, `dia_chi`, `role`, `anh`) VALUES
(18, 'Lee Nguyen A', '12345678', 'nvn1230782738@.gmail', '0377231564', 'Thanh Hoa _ Thieu Hoa', 1, ''),
(21, 'Lee Nguyen B', '1234567', 'leconghung230503@gmail.com', '', 'Ha Noi', 0, 'Ảnh chụp màn hình 2023-07-13 173130.png'),
(25, 'nguyenvannhat', '1234567', 'nvn1230782738@gmail.com', '03772310949', 'Hung yên_Bần yên nhân', 0, '386385565_839476908180763_5258116475653998873_n.jpg'),
(26, 'user1', '1234567', 'nvn123nhat@gmail.com', '0377231764', 'mỹ hào hung yên', 0, 'z4864961113726_e42524389c06c69daffbd760739b65de.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sanpham`
--
ALTER TABLE `anh_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_donhang`
--
ALTER TABLE `sanpham_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sanpham`
--
ALTER TABLE `anh_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `sanpham_donhang`
--
ALTER TABLE `sanpham_donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
