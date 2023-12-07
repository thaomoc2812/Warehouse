-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 02:50 PM
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
  `trangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` bigint(20) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `idphanloai` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `tendanhmuc`, `idphanloai`) VALUES
(1, 'Áo khoác', 1),
(4, 'Áo phông', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `idkhachhang` bigint(20) NOT NULL,
  `noiban` varchar(50) NOT NULL,
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
  `hinhanhchinh` char(255) NOT NULL,
  `hinhanhphu1` char(255) NOT NULL,
  `hinhanhphu2` char(255) NOT NULL,
  `hinhanhphu3` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
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
-- Cấu trúc bảng cho bảng `lohang`
--

CREATE TABLE `lohang` (
  `id` bigint(20) NOT NULL,
  `malohang` varchar(20) NOT NULL,
  `ngaynhaphang` date NOT NULL,
  `idnhanvien` bigint(20) NOT NULL,
  `idsanpham` bigint(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gianhapvao` int(11) NOT NULL,
  `giabanra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` bigint(20) NOT NULL,
  `manhacungcap` varchar(50) NOT NULL,
  `tennhacungcap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(11, 'Trần Văn A', '0111111111', 'Thanh Xuân, Hà Nội', 30, '', 0);

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
  `loaisanpham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `phanloaisanpham`
--

INSERT INTO `phanloaisanpham` (`id`, `loaisanpham`) VALUES
(1, 'Áo');

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
  `tensanpham` varchar(50) NOT NULL,
  `idthongtinsanpham` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soluongtonkho`
--

CREATE TABLE `soluongtonkho` (
  `id` bigint(20) NOT NULL,
  `idlohang` bigint(20) NOT NULL,
  `soluong` bigint(20) NOT NULL
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
  `ngayketthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsanpham`
--

CREATE TABLE `thongtinsanpham` (
  `id` bigint(20) NOT NULL,
  `iddanhmuc` bigint(20) NOT NULL,
  `idnhacungcap` bigint(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iddhinhanh` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnhanvien` (`idnhanvien`),
  ADD KEY `idsanpham` (`idsanpham`);

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
-- Chỉ mục cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlohang` (`idlohang`);

--
-- Chỉ mục cho bảng `thongtinkhuyenmai`
--
ALTER TABLE `thongtinkhuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `idnhacungcap` (`idnhacungcap`),
  ADD KEY `iddhinhanh` (`iddhinhanh`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lohang`
--
ALTER TABLE `lohang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nhomquyen`
--
ALTER TABLE `nhomquyen`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `phanloaisanpham`
--
ALTER TABLE `phanloaisanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `quyentruycap`
--
ALTER TABLE `quyentruycap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongtinkhuyenmai`
--
ALTER TABLE `thongtinkhuyenmai`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD CONSTRAINT `lohang_ibfk_1` FOREIGN KEY (`idnhanvien`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `lohang_ibfk_2` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`vitri`) REFERENCES `nhomquyen` (`id`);

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
-- Các ràng buộc cho bảng `soluongtonkho`
--
ALTER TABLE `soluongtonkho`
  ADD CONSTRAINT `soluongtonkho_ibfk_1` FOREIGN KEY (`idlohang`) REFERENCES `lohang` (`id`);

--
-- Các ràng buộc cho bảng `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD CONSTRAINT `thongtinsanpham_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmucsanpham` (`id`),
  ADD CONSTRAINT `thongtinsanpham_ibfk_2` FOREIGN KEY (`idnhacungcap`) REFERENCES `nhacungcap` (`id`),
  ADD CONSTRAINT `thongtinsanpham_ibfk_3` FOREIGN KEY (`iddhinhanh`) REFERENCES `hinhanhsanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
