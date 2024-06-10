-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 16, 2024 lúc 05:23 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom_9`
--Q

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bai_viet`
--

CREATE TABLE `tb_bai_viet` (
  `id_bai_viet` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `ngay_dang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_bai_viet`
--

INSERT INTO `tb_bai_viet` (`id_bai_viet`, `tieu_de`, `noi_dung`, `trang_thai`, `ngay_dang`) VALUES
(1, 'ÁO', '', 'hoạt động', '2023-11-18 07:32:00'),
(2, 'â', '', 'Hoạt động', '2023-11-11 08:12:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bienthe`
--

CREATE TABLE `tb_bienthe` (
  `id_bienthe` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mau_sac` varchar(50) NOT NULL,
  `bao_hanh` varchar(50) NOT NULL,
  `thong_tin_sp` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `bo_nho` varchar(50) NOT NULL,
  `gia_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `ngay_binh_luan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_binh_luan`
--

INSERT INTO `tb_binh_luan` (`id_binhluan`, `id_nguoidung`, `id_pro`, `noi_dung`, `trang_thai`, `ngay_binh_luan`) VALUES
(1, 0, 11, 'rẻ', 'còn', '2023-11-20 17:45:29'),
(13, 1, 9, 'abc', '', '01:27:56am 01/12/2023'),
(14, 1, 9, 'abc', '', '01:28:00am 01/12/2023'),
(15, 1, 9, 'abc', '', '01:28:03am 01/12/2023'),
(16, 1, 9, 'đẹp', '', '01:30:47am 01/12/2023'),
(17, 1, 9, 'ok', '', '01:31:18am 01/12/2023'),
(18, 1, 12, 'đẹp', '', '02:57:48am 01/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id_chucvu` int(11) NOT NULL,
  `ten_chuc_vu` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ct_hoadon`
--

CREATE TABLE `tb_ct_hoadon` (
  `id` int(11) NOT NULL,
  `id_hoa_don` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `so_luong_mua` int(11) NOT NULL,
  `gia_sp` double NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_ct_hoadon`
--

INSERT INTO `tb_ct_hoadon` (`id`, `id_hoa_don`, `ten_sp`, `anh_sp`, `so_luong_mua`, `gia_sp`, `trang_thai`) VALUES
(2, 15, 'Iphone 15', '../upload/ip15.jpg', 1, 20000, '0'),
(4, 17, 'Iphone 15 pro max', '../upload/15 prm.jpg', 1, 30000, '0'),
(5, 18, 'Iphone 15', '../upload/ip15.jpg', 1, 20000000, '0'),
(6, 19, 'Iphone 15 pro', '../upload/ip15proo.jpg', 3, 25000000, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id_dm`, `ten_danh_muc`, `mo_ta`, `trang_thai`) VALUES
(20, 'Iphone', 'NEW SEAL ', 'Còn'),
(21, 'SamSung', 'NEW SEAL ', 'Còn'),
(22, 'Oppo', 'NEW SEAL ', 'Còn'),
(23, 'Sonny', 'NEW SEAL ', 'Còn'),
(24, 'Xiaomi', 'NEW SEAL ', 'Còn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_gio_hang`
--

CREATE TABLE `tb_gio_hang` (
  `id` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoa_don`
--

CREATE TABLE `tb_hoa_don` (
  `id_hoa_don` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `ngay_dat_don` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tong_gia` double NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hoa_don`
--

INSERT INTO `tb_hoa_don` (`id_hoa_don`, `id_nguoidung`, `ngay_dat_don`, `tong_gia`, `dia_chi`, `ghi_chu`, `trang_thai`) VALUES
(15, 1, '2023-12-12 08:37:35', 20000, 'Hà Nội', 'ok', '-1'),
(17, 1, '2023-12-10 15:51:42', 30000, 'Hà Nội', 'ok', '-1'),
(18, 2, '2023-12-12 07:19:48', 76000000, 'HN', 'ok', '0'),
(19, 1, '2023-12-12 08:37:18', 135000000, '18 Nam Định', 'abc', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khuyen_mai`
--

CREATE TABLE `tb_khuyen_mai` (
  `id_km` int(11) NOT NULL,
  `ma_km` varchar(50) NOT NULL,
  `pt_km` double NOT NULL,
  `ngay_bd` datetime NOT NULL,
  `ngay_kt` datetime NOT NULL,
  `id_sp` int(11) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_khuyen_mai`
--

INSERT INTO `tb_khuyen_mai` (`id_km`, `ma_km`, `pt_km`, `ngay_bd`, `ngay_kt`, `id_sp`, `trang_thai`) VALUES
(13, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Hết hạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lien_he`
--

CREATE TABLE `tb_lien_he` (
  `id_lh` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_lien_he`
--

INSERT INTO `tb_lien_he` (`id_lh`, `id_nguoi_dung`, `noi_dung`, `trang_thai`) VALUES
(1, 2, 'abc', 'hoạt động'),
(3, 0, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id_sp` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mau_sac` varchar(50) NOT NULL,
  `bao_hanh` varchar(255) NOT NULL,
  `thong_tin_sp` varchar(310) NOT NULL,
  `bo_nho` varchar(50) NOT NULL,
  `gia_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id_sp`, `id_dm`, `ten_sp`, `anh_sp`, `trang_thai`, `so_luong`, `mau_sac`, `bao_hanh`, `thong_tin_sp`, `bo_nho`, `gia_sp`) VALUES
(9, 20, 'Iphone 15', 'ip15.jpg', 'Còn hàng', 100, 'Hồng', '1 năm', 'iPhone 15 256 GB trở thành tâm điểm đáng chú ý tại sự kiện ra mắt thường niên của Apple vào tháng 09/2023. Điện thoại được nâng cấp đáng kể với các thông số đầy ấn tượng như: Camera chính 48 MP, chipset Apple A16 Bionic cùng việc thay đổi định dạng cổng k', '128G', 20000000),
(10, 20, 'Iphone 15 pro', 'ip15proo.jpg', 'Còn hàng', 50, 'Đen', '1 năm', 'iPhone 15 256 GB trở thành tâm điểm đáng chú ý tại sự kiện ra mắt thường niên của Apple vào tháng 09/2023. Điện thoại được nâng cấp đáng kể với các thông số đầy ấn tượng như: Camera chính 48 MP, chipset Apple A16 Bionic cùng việc thay đổi định dạng cổng k', '258G', 25000000),
(12, 20, 'Iphone 15 pro max', '15 prm.jpg', 'Còn hàng', 81, 'Titan', '1 năm', 'iPhone 15 pro max 256 GB trở thành tâm điểm đáng chú ý tại sự kiện ra mắt thường niên của Apple vào tháng 09/2023. Điện thoại được nâng cấp đáng kể với các thông số đầy ấn tượng như: Camera chính 48 MP, chipset Apple A16 Bionic cùng việc thay đổi định dạn', '258G', 30000000),
(13, 21, 'Samsung s23 ultra', 'ssu23.jpg', 'Còn hàng', 42, 'Trắng', '1 năm', 'Điện thoại Samsung Galaxy S23 Ultra liệu có gì mới? Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuô', '258G', 20000000),
(14, 24, 'Xiaomi 13 pro', 'x13.jpg', 'Còn hàng', 11, 'Đen', '1 năm', 'Xiaomi 13 Pro là mẫu flagship mới sở hữu màn hình OLED 6.7 inch cùng tần số quét lên tới 120 Hz. Điện thoại sở hữu một cấu hình vượt trội với con chip Snapdragon gen 2 thế hệ mới, viên pin 4800 mAh hỗ trợ sạc nhanh công suất 120W. Camera máy mang lại cho ', '258G', 15000000),
(15, 22, 'Oppo A58', 'o15pro.jpg', 'Còn hàng', 21, 'Trắng', '1 năm', 'OPPO A58 - Siêu phẩm trong phân khúc smartphone bình dân OPPO A58 là dòng smartphone được OPPO dành cho phân khúc giá rẻ. Tuy nhiên chiếc smartphone này vẫn đảm bảo được mọi yếu tố từ ngoại hình, cấu hình, pin, tính năng… Hãy cùng khám phá liệu phiên bản ', '258G', 10000000),
(19, 21, 'Samsung Galaxy S20 Ultra', 'samsung-galaxy-s20-ultra-600x600-1-600x600.jpg', 'Còn hàng', 57, 'Đen', '1 năm', 'Samsung Galaxy S20 Ultra siêu phẩm công nghệ hàng đầu của Samsung mới ra mắt với nhiều đột phá công nghệ, màn hình tràn viền không khuyết điểm, hiệu năng đỉnh cao, camera độ phân giải siêu khủng 108 MP cùng khả năng zoom 100X thách thức mọi giới hạn smartphone. Đột phá màn hình siêu tràn viền kích thước lớn G', '258G', 17000000),
(20, 22, 'Điện thoại Oppo A93', 'opa93.jpg', 'Còn hàng', 17, 'Trắng', '1 năm', 'Điện thoại Oppo A93 8GB/128GB Trắng - Hàng chính hãng Thiết kế nguyên khối, chất liệu hợp kim phủ nhựa mặt lưng thủy tinh độc đáo Điện thoại Oppo A93 8GB/128GB Trắng sở hữu thiết kế với độ mỏng chỉ 7.48mm vô cùng gọn nhẹ tạo cảm giác thoải mái khi cầm trên tay. Các góc cạnh được bo tròn mềm mại, hai bên vát c', '128G', 12000000),
(21, 22, 'OPPO Reno4 Pro', 'r4.jpg', 'Còn hàng', 23, 'Trắng', '1 năm', 'OPPO chính thức trình làng chiếc smartphone có tên OPPO Reno4 Pro. Máy trang bị cấu hình vô cùng cao cấp với vi xử lý Snapdragon 720G, bộ 4 camera ấn tượng, cùng công nghệ sạc siêu nhanh 65 W nhưng được bán với mức giá vô ưu đãi, dễ tiếp cận. Thiết kế tràn viền siêu ấn tượng Điện thoại OPPO Reno4 Pro được tra', '256G', 9000000),
(22, 24, 'Xiaomi Redmi Note 12 ', 'xiaomi-redmi-note-12-xanh-duong-1-thumb-200x200.jpg', 'Còn hàng', 61, 'Xanh', '1 năm', 'Xiaomi Redmi Note 12 8GB/128GB là mẫu điện thoại tầm trung vừa được ra mắt tại thị trường Việt Nam, máy thu hút sự chú ý đến từ người dùng nhờ được trang bị con chip Snapdragon 685 và camera 50 MP nổi bật trong phân khúc. Tỏa sáng với diện mạo đẹp mắt Redmi Note 12 sở hữu cho mình một dáng vẻ vuông vắn đầy th', '128G', 3800000),
(23, 24, 'Xiaomi Redmi 12', 'xiaomi-redmi-note-12-xanh-duong-1-thumb-200x200.jpg', 'Còn hàng', 31, 'Xanh', '1 năm', 'Xiaomi Redmi 12 - chiếc điện thoại giá rẻ với thiết kế tinh tế, màn hình lớn cùng camera sắc nét và tích hợp vi xử lý MediaTek Helio G88 mạnh mẽ trong phân khúc. Sản phẩm sẽ là sự lựa chọn lý tưởng cho những người muốn trải nghiệm công nghệ tiên tiến với mức giá phải chăng. Diện mạo thời thượng trẻ trung Xiao', '128G', 3900000),
(24, 20, 'Iphone 14 Pro Max', 'ip14prm.jpg', 'Còn hàng', 73, 'Vàng Gold', '1 năm', 'iPhone 14 pro max 256 GB trở thành tâm điểm đáng chú ý tại sự kiện ra mắt thường niên của Apple vào tháng 09/2022. Điện thoại được nâng cấp đáng kể với các thông số đầy ấn tượng như: Camera chính 48 MP, chipset Apple A16 Bionic cùng việc thay đổi định dạng cổng kết nối Type-C. Ngoại hình vuông vức đặc trưng M', '258G', 28000000),
(25, 20, 'Iphone 13 Pro Max', '13prm.jpg', 'Còn hàng', 49, 'Xanh', '1 năm', 'Đánh giá thông số iPhone 13 Pro Max – Hiệu năng vô đối, camera cực đỉnh iPhone 12 ra mắt cách đây chưa lâu, thì những tin đồn mới nhất về iPhone 13 Pro Max đã khiến bao tín đồ công nghệ ngóng chờ. Cụm camera được nâng cấp, màu sắc mới, đặc biệt là màn hình 120Hz với phần notch được làm nhỏ gọ', '128G', 18000000),
(26, 20, 'Iphone Xs Max', 'xsm.jpg', 'Còn hàng', 32, 'Gold', '1 năm', 'Hoàn toàn xứng đáng với những gì được mong chờ, phiên bản cao cấp nhất iPhone Xs Max 64 GB của Apple năm nay nổi bật với chip A12 Bionic mạnh mẽ, màn hình rộng đến 6.5 inch, cùng camera kép trí tuệ nhân tạo và Face ID được nâng cấp. Thiết kế cao cấp với viền thép không gỉ và mặt kính cường lực Điện thoại iPho', '128G', 6900000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tai_khoan`
--

CREATE TABLE `tb_tai_khoan` (
  `id_nguoidung` int(11) NOT NULL,
  `ten_nguoidung` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `gioi_tinh` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `trang_thai` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_tai_khoan`
--

INSERT INTO `tb_tai_khoan` (`id_nguoidung`, `ten_nguoidung`, `mat_khau`, `gmail`, `sdt`, `anh`, `ngay_sinh`, `dia_chi`, `gioi_tinh`, `role`, `trang_thai`, `name`) VALUES
(1, 'sang', 'abc', 'abc@gmail.com', 123456789, 'ao1.jpg', '2004-11-21 08:44:54', 'NĐ', 'Nam', 1, 'Hoạt động', 'Phan Văn Sang'),
(2, 'hiep', 'abc', 'abcd@gmail.com', 123456789, '', '2004-12-10 07:41:45', 'hn', 'Nam', 0, 'hoạt động', 'Hiep');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Chỉ mục cho bảng `tb_bienthe`
--
ALTER TABLE `tb_bienthe`
  ADD PRIMARY KEY (`id_bienthe`);

--
-- Chỉ mục cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Chỉ mục cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id_chucvu`);

--
-- Chỉ mục cho bảng `tb_ct_hoadon`
--
ALTER TABLE `tb_ct_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `tb_gio_hang`
--
ALTER TABLE `tb_gio_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  ADD PRIMARY KEY (`id_hoa_don`);

--
-- Chỉ mục cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  ADD PRIMARY KEY (`id_km`);

--
-- Chỉ mục cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  ADD PRIMARY KEY (`id_lh`);

--
-- Chỉ mục cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `tb_tai_khoan`
--
ALTER TABLE `tb_tai_khoan`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_bai_viet`
--
ALTER TABLE `tb_bai_viet`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_bienthe`
--
ALTER TABLE `tb_bienthe`
  MODIFY `id_bienthe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id_chucvu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_ct_hoadon`
--
ALTER TABLE `tb_ct_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tb_gio_hang`
--
ALTER TABLE `tb_gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  MODIFY `id_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tb_tai_khoan`
--
ALTER TABLE `tb_tai_khoan`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
