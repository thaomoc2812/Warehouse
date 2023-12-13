-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 04:49 PM
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
-- Cơ sở dữ liệu: `warehouse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calam`
--

CREATE TABLE `calam` (
  `id` bigint(20) NOT NULL,
  `ca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkycalam`
--

CREATE TABLE `dangkycalam` (
  `id` bigint(20) NOT NULL,
  `idnhanvien` bigint(20) NOT NULL,
  `idcalam` bigint(20) NOT NULL,
  `ngay` date NOT NULL,
  `trangthai` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` bigint(20) NOT NULL,
  `tendanhmuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idphanloai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `tendanhmuc`, `idphanloai`) VALUES
(8, 'Áo khoác', 1),
(9, 'Áo dài tay', 1),
(10, 'Áo phông', 1),
(11, 'Quần short', 9),
(12, 'Quần jean ống đứng', 9),
(13, 'Quần jean ống loe', 9),
(14, 'Quần vải', 9),
(15, 'Set váy yếm', 10),
(16, 'Set váy dạ', 10),
(17, 'Đồ ngủ mùa hè', 11),
(18, 'Đồ ngủ mùa đông', 11),
(21, 'Khác', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `idkhachhang` bigint(20) NOT NULL,
  `noiban` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangkhuyenmai`
--

CREATE TABLE `hangkhuyenmai` (
  `id` bigint(20) NOT NULL,
  `idlohang` bigint(20) NOT NULL,
  `idthongtinkhuyenmai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhsanpham`
--

CREATE TABLE `hinhanhsanpham` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `hinhanhchinh` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhanhphu1` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hinhanhphu2` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hinhanhphu3` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanhsanpham`
--

INSERT INTO `hinhanhsanpham` (`id`, `idsanpham`, `hinhanhchinh`, `hinhanhphu1`, `hinhanhphu2`, `hinhanhphu3`) VALUES
(2, 2, 'babytee.jpg', 'babytee.jpg', 'babytee.jpg', 'babytee.jpg'),
(3, 3, '1.jpg', '1.jpg', '1.jpg', '1.jpg'),
(4, 4, 'phong.jpg', 'phong.jpg', 'phong.jpg', 'phong.jpg'),
(5, 5, 'yem.jpg', 'yem.jpg', 'yem.jpg', 'yem.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(20) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `hoten`, `sdt`, `ngaysinh`, `diachi`, `matkhau`) VALUES
(1, '', '0111111111', '0000-00-00', '', 'khach01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` bigint(20) NOT NULL,
  `makhuyenmai` text NOT NULL,
  `idsoluong` bigint(20) NOT NULL,
  `masanpham` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `makhuyenmai`, `idsoluong`, `masanpham`) VALUES
(16, 'KM02', 8, 'SP02'),
(17, 'KM02', 6, 'SP02'),
(18, 'KM02', 1, 'SP03'),
(21, 'KM01', 7, 'SP02'),
(22, 'KM01', 2, 'SP03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuoc`
--

CREATE TABLE `kichthuoc` (
  `id` int(11) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `kichthuoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lohang`
--

CREATE TABLE `lohang` (
  `id` bigint(20) NOT NULL,
  `malohang` varchar(20) NOT NULL,
  `ngaynhaphang` date NOT NULL,
  `idnhanvien` bigint(20) NOT NULL,
  `idnhacungcap` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `lohang`
--

INSERT INTO `lohang` (`id`, `malohang`, `ngaynhaphang`, `idnhanvien`, `idnhacungcap`) VALUES
(23, 'lohang1212', '2023-12-12', 0, 1),
(25, 'lohang1213', '2023-12-13', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `mausac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` bigint(20) NOT NULL,
  `manhacungcap` varchar(50) NOT NULL,
  `tennhacungcap` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `manhacungcap`, `tennhacungcap`, `sdt`, `diachi`, `trangthai`) VALUES
(1, 'teplinhhiep', 'Tép', '0111222333', 'Linh Hiệp, Hà Nội', 1),
(2, 'phuonganh', 'Phương Anh', '0444555666', 'Vĩnh Phúc', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `vitri` bigint(20) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoten`, `sdt`, `diachi`, `vitri`, `matkhau`, `trangthai`) VALUES
(10, 'Kiều Phương Thảo', '0969068710', 'Hoàng Mai, Hà Nội', 30, 'nhanvien', 1),
(11, 'Trần Văn A', '0111111111', 'Thanh Xuân, Hà Nội', 31, '', 0),
(16, 'Trần Thu Hà', '0147852369', 'Hoàng Mai, Hà Nội', 30, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaphang`
--

CREATE TABLE `nhaphang` (
  `id` bigint(20) NOT NULL,
  `idlohang` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomquyen`
--

CREATE TABLE `nhomquyen` (
  `id` bigint(11) NOT NULL,
  `tennhomquyen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomquyen`
--

INSERT INTO `nhomquyen` (`id`, `tennhomquyen`) VALUES
(30, 'Nhân viên bán hàng'),
(31, 'Nhân viên kho hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloaisanpham`
--

CREATE TABLE `phanloaisanpham` (
  `id` bigint(20) NOT NULL,
  `loaisanpham` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `phanloaisanpham`
--

INSERT INTO `phanloaisanpham` (`id`, `loaisanpham`) VALUES
(1, 'Áo'),
(9, 'Quần'),
(10, 'Bộ'),
(11, 'Đồ ngủ'),
(13, 'Váy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` bigint(20) NOT NULL,
  `idnhomquyen` bigint(20) NOT NULL,
  `idquyentruycap` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `idnhomquyen`, `idquyentruycap`) VALUES
(106, 31, 2),
(107, 31, 3),
(108, 31, 4),
(109, 31, 5),
(110, 31, 12),
(111, 31, 13),
(112, 31, 14),
(113, 31, 15),
(117, 30, 3),
(118, 30, 4),
(119, 30, 8),
(120, 30, 9),
(121, 30, 10),
(122, 30, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyentruycap`
--

CREATE TABLE `quyentruycap` (
  `id` bigint(20) NOT NULL,
  `tenquyentruycap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyentruycap`
--

INSERT INTO `quyentruycap` (`id`, `tenquyentruycap`) VALUES
(2, 'Thêm sản phẩm'),
(3, 'Tìm kiếm sản phẩm'),
(4, 'Xem danh sách sản phẩm'),
(5, 'Xóa/Sửa sản phẩm'),
(8, 'Quản lý đơn hàng'),
(9, 'Quản lý xác nhận đơn hàng'),
(10, 'Quản lý đơn hàng bị hoàn lại'),
(11, 'Quản lý khách hàng'),
(12, 'Quản lý số lượng tồn kho'),
(13, 'Quản lý lô hàng sản phẩm'),
(14, 'Phân loại sản phẩm'),
(15, 'Quản lý nhà cung cấp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint(20) NOT NULL,
  `masanpham` varchar(50) NOT NULL,
  `tensanpham` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idthongtinsanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `idthongtinsanpham`) VALUES
(2, 'SP01', 'Áo babytee chữ', 2),
(3, 'SP02', 'Quần short vải có khóa', 3),
(4, 'SP03', 'Áo phông chữ Hot Memato', 4),
(5, 'SP04', 'Yếm bò kèm áo', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soluong`
--

CREATE TABLE `soluong` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `masanpham` text NOT NULL,
  `mausac` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kichthuoc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giabanra` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `soluong`
--

INSERT INTO `soluong` (`id`, `idsanpham`, `masanpham`, `mausac`, `kichthuoc`, `giabanra`, `soluong`) VALUES
(1, 4, 'SP03', 'Đỏ', 'S', 60000, 30),
(2, 4, 'SP03', 'Đỏ', 'M', 60000, 30),
(5, 3, 'SP02', 'Đen', 'S', 160000, 20),
(6, 3, 'SP02', 'Đen', 'M', 160000, 20),
(7, 3, 'SP02', 'Xanh', 'S', 160000, 10),
(8, 3, 'SP02', 'Xanh', 'M', 160000, 10),
(9, 2, 'SP01', 'Trắng', 'Freesize', 150000, 50),
(10, 2, 'SP01', 'Đen', 'Freesize', 150000, 50),
(12, 5, 'SP04', 'Bò', 'Freesize', 170000, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soluongtonkho`
--

CREATE TABLE `soluongtonkho` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `idsoluong` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinkhuyenmai`
--

CREATE TABLE `thongtinkhuyenmai` (
  `id` bigint(20) NOT NULL,
  `makhuyenmai` varchar(50) NOT NULL,
  `giam` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinkhuyenmai`
--

INSERT INTO `thongtinkhuyenmai` (`id`, `makhuyenmai`, `giam`, `ngaybatdau`, `ngayketthuc`, `trangthai`) VALUES
(20, 'KM02', 10, '2023-12-13', '2023-12-14', 0),
(22, 'KM01', 10, '2023-12-14', '2023-12-15', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinlohang`
--

CREATE TABLE `thongtinlohang` (
  `id` bigint(20) NOT NULL,
  `gianhapvao` int(11) NOT NULL,
  `idlohang` bigint(20) NOT NULL,
  `masanpham` text NOT NULL,
  `mausac` text NOT NULL,
  `kichthuoc` text NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinlohang`
--

INSERT INTO `thongtinlohang` (`id`, `gianhapvao`, `idlohang`, `masanpham`, `mausac`, `kichthuoc`, `soluong`) VALUES
(7, 40000, 23, 'SP03', 'Đỏ', 'S', 30),
(8, 40000, 23, 'SP03', 'Đỏ', 'M', 30),
(11, 100000, 23, 'SP02', 'Đen', 'S', 20),
(12, 100000, 23, 'SP02', 'Đen', 'M', 20),
(13, 100000, 23, 'SP02', 'Xanh', 'S', 10),
(14, 100000, 23, 'SP02', 'Xanh', 'M', 10),
(15, 90000, 23, 'SP01', 'Trắng', 'Freesize', 50),
(16, 90000, 23, 'SP01', 'Đen', 'Freesize', 50),
(20, 140000, 25, 'SP04', 'Bò', 'Freesize', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsanpham`
--

CREATE TABLE `thongtinsanpham` (
  `id` bigint(20) NOT NULL,
  `masanpham` text NOT NULL,
  `iddanhmuc` bigint(20) NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinsanpham`
--

INSERT INTO `thongtinsanpham` (`id`, `masanpham`, `iddanhmuc`, `mota`) VALUES
(2, 'SP01', 10, 'Áo freesize dưới 65kg'),
(3, 'SP02', 11, 'Quần dài 40 - 50 cm'),
(4, 'SP03', 10, 'Áo freesize dưới 65kg'),
(5, 'SP04', 15, 'Freesize dưới 1m7, dưới 70kg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calam`
--
ALTER TABLE `calam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dangkycalam`
--
ALTER TABLE `dangkycalam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idphanloai` (`idphanloai`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachhang` (`idkhachhang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Chỉ mục cho bảng `hangkhuyenmai`
--
ALTER TABLE `hangkhuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlohang` (`idlohang`),
  ADD KEY `idthongtinkhuyenmai` (`idthongtinkhuyenmai`);

--
-- Chỉ mục cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanhsanpham_ibfk_1` (`idsanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsoluong` (`idsoluong`);

--
-- Chỉ mục cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kichthuoc_ibfk_1` (`idsanpham`);

--
-- Chỉ mục cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnhanvien` (`idnhanvien`),
  ADD KEY `idnhacungcap` (`idnhacungcap`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mausac_ibfk_1` (`idsanpham`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vitri` (`vitri`);

--
-- Chỉ mục cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlohang` (`idlohang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Chỉ mục cho bảng `nhomquyen`
--
ALTER TABLE `nhomquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanloaisanpham`
--
ALTER TABLE `phanloaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnhomquyen` (`idnhomquyen`),
  ADD KEY `phanquyen_ibfk_2` (`idquyentruycap`);

--
-- Chỉ mục cho bảng `quyentruycap`
--
ALTER TABLE `quyentruycap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idthongtinsanpham` (`idthongtinsanpham`);

--
-- Chỉ mục cho bảng `soluong`
--
ALTER TABLE `soluong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soluong_ibfk_1` (`idsanpham`);

--
-- Chỉ mục cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soluongtonkho_ibfk_1` (`idsanpham`),
  ADD KEY `idsoluong` (`idsoluong`);

--
-- Chỉ mục cho bảng `thongtinkhuyenmai`
--
ALTER TABLE `thongtinkhuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtinlohang`
--
ALTER TABLE `thongtinlohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlohang` (`idlohang`);

--
-- Chỉ mục cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calam`
--
ALTER TABLE `calam`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dangkycalam`
--
ALTER TABLE `dangkycalam`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hangkhuyenmai`
--
ALTER TABLE `hangkhuyenmai`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lohang`
--
ALTER TABLE `lohang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhomquyen`
--
ALTER TABLE `nhomquyen`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `phanloaisanpham`
--
ALTER TABLE `phanloaisanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT cho bảng `quyentruycap`
--
ALTER TABLE `quyentruycap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `soluong`
--
ALTER TABLE `soluong`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongtinkhuyenmai`
--
ALTER TABLE `thongtinkhuyenmai`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `thongtinlohang`
--
ALTER TABLE `thongtinlohang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD CONSTRAINT `danhmucsanpham_ibfk_1` FOREIGN KEY (`idphanloai`) REFERENCES `phanloaisanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkhachhang`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `hangkhuyenmai`
--
ALTER TABLE `hangkhuyenmai`
  ADD CONSTRAINT `hangkhuyenmai_ibfk_1` FOREIGN KEY (`idlohang`) REFERENCES `lohang` (`id`),
  ADD CONSTRAINT `hangkhuyenmai_ibfk_2` FOREIGN KEY (`idthongtinkhuyenmai`) REFERENCES `thongtinkhuyenmai` (`id`);

--
-- Các ràng buộc cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD CONSTRAINT `hinhanhsanpham_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`idsoluong`) REFERENCES `soluong` (`id`);

--
-- Các ràng buộc cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD CONSTRAINT `kichthuoc_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD CONSTRAINT `lohang_ibfk_2` FOREIGN KEY (`idnhacungcap`) REFERENCES `nhacungcap` (`id`);

--
-- Các ràng buộc cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD CONSTRAINT `mausac_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`vitri`) REFERENCES `nhomquyen` (`id`);

--
-- Các ràng buộc cho bảng `nhaphang`
--
ALTER TABLE `nhaphang`
  ADD CONSTRAINT `nhaphang_ibfk_1` FOREIGN KEY (`idlohang`) REFERENCES `lohang` (`id`),
  ADD CONSTRAINT `nhaphang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`idnhomquyen`) REFERENCES `nhomquyen` (`id`),
  ADD CONSTRAINT `phanquyen_ibfk_2` FOREIGN KEY (`idquyentruycap`) REFERENCES `quyentruycap` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idthongtinsanpham`) REFERENCES `thongtinsanpham` (`id`);

--
-- Các ràng buộc cho bảng `soluong`
--
ALTER TABLE `soluong`
  ADD CONSTRAINT `soluong_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD CONSTRAINT `soluongtonkho_ibfk_1` FOREIGN KEY (`idsoluong`) REFERENCES `soluong` (`id`);

--
-- Các ràng buộc cho bảng `thongtinlohang`
--
ALTER TABLE `thongtinlohang`
  ADD CONSTRAINT `thongtinlohang_ibfk_1` FOREIGN KEY (`idlohang`) REFERENCES `lohang` (`id`);

--
-- Các ràng buộc cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD CONSTRAINT `thongtinsanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmucsanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
