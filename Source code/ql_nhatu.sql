-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2019 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_nhatu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bophan`
--

CREATE TABLE `bophan` (
  `MaBoPhan` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TenBoPhan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bophan`
--

INSERT INTO `bophan` (`MaBoPhan`, `TenBoPhan`) VALUES
('cd', 'Cấp Dưỡng'),
('ct', 'Cải Tạo'),
('qg', 'Quản Giáo'),
('qly', 'Quản Lý'),
('tnp', 'Tiếp Nhân & Phóng Thích'),
('yte', 'Y Tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `MaCanBo` int(11) NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BoPhan` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`MaCanBo`, `HoTen`, `SDT`, `BoPhan`, `TenDangNhap`) VALUES
(1, 'Cán bộ A', '123456789', 'qly', 'tk5'),
(2, 'Cán bộ B', '65324789', 'ct', 'tk6'),
(3, 'Cán bộ C', '6532478921', 'tnp', 'tk3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhphat`
--

CREATE TABLE `hinhphat` (
  `MaHinhPhat` int(11) NOT NULL,
  `TenHinhPhat` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhphat`
--

INSERT INTO `hinhphat` (`MaHinhPhat`, `TenHinhPhat`) VALUES
(0, 'Tù có thời hạn'),
(1, 'Tù chung thân'),
(2, 'Tử hình'),
(3, 'Tù treo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khenthuong`
--

CREATE TABLE `khenthuong` (
  `MaKhenThuong` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhenThuong` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `SoThangDuocGiam` int(11) DEFAULT NULL COMMENT 'số tháng được giảm án tù'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khenthuong`
--

INSERT INTO `khenthuong` (`MaKhenThuong`, `TenKhenThuong`, `SoThangDuocGiam`) VALUES
('ctrt', 'Cải tạo rất tốt', 4),
('ctt', 'Cải tạo tốt', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khenthuong_phamnhan`
--

CREATE TABLE `khenthuong_phamnhan` (
  `MaKhenThuong` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhamNhan` int(11) NOT NULL,
  `CanBoDeNghi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khenthuong_phamnhan`
--

INSERT INTO `khenthuong_phamnhan` (`MaKhenThuong`, `MaPhamNhan`, `CanBoDeNghi`) VALUES
('ctt', 2, 1),
('ctt', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthamnuoi`
--

CREATE TABLE `lichthamnuoi` (
  `IDLichThamNuoi` int(11) NOT NULL,
  `NgayThamNuoi` date DEFAULT NULL,
  `PhamNhanDuocThamNuoi` int(11) DEFAULT NULL,
  `CanBoGiamSat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichthamnuoi`
--

INSERT INTO `lichthamnuoi` (`IDLichThamNuoi`, `NgayThamNuoi`, `PhamNhanDuocThamNuoi`, `CanBoGiamSat`) VALUES
(1, '2019-06-08', 1, 1),
(2, '2019-06-09', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(10) NOT NULL,
  `TenLoaiTaiKhoan` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(0, 'Admin'),
(1, 'Quản Giáo'),
(2, 'Y Tế'),
(3, 'Tiếp Nhận & Phóng Thích'),
(4, 'Cấp Dưỡng'),
(5, 'Quản Lý'),
(6, 'Cải Tạo'),
(7, 'Thân Nhân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mucdocaitao`
--

CREATE TABLE `mucdocaitao` (
  `MaMucDo` int(11) NOT NULL,
  `TenMucDo` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mucdocaitao`
--

INSERT INTO `mucdocaitao` (`MaMucDo`, `TenMucDo`, `MoTa`) VALUES
(1, 'Xuất Sắc', NULL),
(2, 'Tốt', NULL),
(3, 'Khá', NULL),
(4, 'Trung Bình', NULL),
(5, 'Yếu', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mucdophamtoi`
--

CREATE TABLE `mucdophamtoi` (
  `MaMucDo` int(10) NOT NULL,
  `TenMucDoPT` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mucdophamtoi`
--

INSERT INTO `mucdophamtoi` (`MaMucDo`, `TenMucDoPT`, `MoTa`) VALUES
(1, 'Đặc biệt nghiêm trọng', NULL),
(2, 'Rất nghiêm trọng', NULL),
(3, 'Nghiêm Trọng', NULL),
(4, 'Ít nghiêm trọng', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nangkhieu`
--

CREATE TABLE `nangkhieu` (
  `MaNangKhieu` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TenNangKhieu` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nangkhieu`
--

INSERT INTO `nangkhieu` (`MaNangKhieu`, `TenNangKhieu`, `MoTa`) VALUES
('dan', 'chơi đàn', NULL),
('hat', 'ca hát', NULL),
('kch', 'kể chuyện', NULL),
('mc', 'làm mc', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phamnhan`
--

CREATE TABLE `phamnhan` (
  `MaPhamNhan` int(11) NOT NULL,
  `TenPhamNhan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TinhTrangSucKhoe` int(11) DEFAULT NULL,
  `MucDoPhamToi` int(10) DEFAULT NULL,
  `NgayKTDinhKy` date DEFAULT NULL,
  `GapNguoiThan` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MucDoCaiTao` int(11) DEFAULT NULL,
  `NangKhieu` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayVaoTu` date DEFAULT NULL,
  `NgayRaTuDuKien` date DEFAULT NULL,
  `ThanNhan` int(11) DEFAULT NULL,
  `HinhPhat` int(11) DEFAULT NULL,
  `HoatDongDeNghi` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CheDoTheoDoi` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phamnhan`
--

INSERT INTO `phamnhan` (`MaPhamNhan`, `TenPhamNhan`, `DiaChi`, `TinhTrangSucKhoe`, `MucDoPhamToi`, `NgayKTDinhKy`, `GapNguoiThan`, `MucDoCaiTao`, `NangKhieu`, `NgayVaoTu`, `NgayRaTuDuKien`, `ThanNhan`, `HinhPhat`, `HoatDongDeNghi`, `CheDoTheoDoi`) VALUES
(1, 'Đình Luân', '22 Nguyễn Thị Minh Khai, P4, Q1, TP.HCM', 1, 4, '2019-05-18', 'Được Gặp', 2, 'dan', '2017-05-01', '2019-05-30', 1, 3, 'Tham Gia Văn Nghệ', '7/7'),
(2, 'Thùy Linh', '172 Trần Phú, P4, Quận 5, TP.HCM', 1, 3, '2019-02-18', 'Được Gặp', 3, 'hat', '2017-02-10', '2019-08-30', 2, 0, 'Tham Gia Văn Nghệ', '7/7'),
(3, 'Đức thịnh', '123 Nguyễn Trãi, P4, Quận 5, TP.HCM', 1, 3, '2019-02-18', 'Được Gặp', 3, 'kch', '2016-04-16', '2019-03-21', 3, 0, 'Tham Gia Văn Nghệ', '7/7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `TenHienThi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaLoaiTaiKhoan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `MatKhau`, `TenHienThi`, `MaLoaiTaiKhoan`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 0),
('ThuyLinh', '1597c3bcdcaffdf240e2ffe4737ace0c', 'Thùy Linh', 7),
('tk2', 'b79c9d8b7ce99df33cf3fa5bb96d0c51', 'Cán Bộ Y Tế', 2),
('tk3', 'f3d5d8fa1baa65a4ae3d01cd383e94da', 'Tiếp Nhận & Phóng Thích', 3),
('tk5', '625fdf9120aab33774083c04c6e346ed', 'Cán Bộ Quản Lý', 5),
('tk6', '14e092db9ab16bad7f6eef1e1bb8ae98', 'Cán Bộ Cải Tạo', 6),
('tk7', '650638e5c645aa42aeacc3a1177a9c80', 'Thân Nhân', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thannhan`
--

CREATE TABLE `thannhan` (
  `MaThanNhan` int(11) NOT NULL,
  `TenThanNhan` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DiaChiThanNhan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thannhan`
--

INSERT INTO `thannhan` (`MaThanNhan`, `TenThanNhan`, `DiaChiThanNhan`, `SDT`, `TenDangNhap`) VALUES
(1, 'Gia Đình của Luân', '22 Nguyễn Thị Minh Khai, P4, Q1, TP.HCM', '012345689', 'tk7'),
(2, 'Gia Đình của Linh', '172 Trần Phú, P4, Quận 5, TP.HCM', '012345678', 'ThuyLinh'),
(3, 'Gia Đình của Thịnh', '123 Nguyễn Trãi, P4, Quận 5, TP.HCM', '012345678', 'tk7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrangsuckhoe`
--

CREATE TABLE `tinhtrangsuckhoe` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrangsuckhoe`
--

INSERT INTO `tinhtrangsuckhoe` (`MaTinhTrang`, `TenTinhTrang`, `MoTa`) VALUES
(1, 'Bình thường', NULL),
(2, 'Sốt', NULL),
(3, 'Ho', NULL),
(4, 'Suy nhược', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`MaBoPhan`);

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`MaCanBo`),
  ADD KEY `canbo_bophan_idx` (`BoPhan`),
  ADD KEY `canbo_tendangnhap_idx` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `hinhphat`
--
ALTER TABLE `hinhphat`
  ADD PRIMARY KEY (`MaHinhPhat`);

--
-- Chỉ mục cho bảng `khenthuong`
--
ALTER TABLE `khenthuong`
  ADD PRIMARY KEY (`MaKhenThuong`);

--
-- Chỉ mục cho bảng `khenthuong_phamnhan`
--
ALTER TABLE `khenthuong_phamnhan`
  ADD PRIMARY KEY (`MaKhenThuong`,`MaPhamNhan`),
  ADD KEY `ktpn_phannhan_idx` (`MaPhamNhan`),
  ADD KEY `ktpn_canbo_idx` (`CanBoDeNghi`);

--
-- Chỉ mục cho bảng `lichthamnuoi`
--
ALTER TABLE `lichthamnuoi`
  ADD PRIMARY KEY (`IDLichThamNuoi`),
  ADD KEY `lichthamnuoi_phamnhan_idx` (`PhamNhanDuocThamNuoi`),
  ADD KEY `lichthamnuoi_canbo_idx` (`CanBoGiamSat`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `mucdocaitao`
--
ALTER TABLE `mucdocaitao`
  ADD PRIMARY KEY (`MaMucDo`);

--
-- Chỉ mục cho bảng `mucdophamtoi`
--
ALTER TABLE `mucdophamtoi`
  ADD PRIMARY KEY (`MaMucDo`);

--
-- Chỉ mục cho bảng `nangkhieu`
--
ALTER TABLE `nangkhieu`
  ADD PRIMARY KEY (`MaNangKhieu`);

--
-- Chỉ mục cho bảng `phamnhan`
--
ALTER TABLE `phamnhan`
  ADD PRIMARY KEY (`MaPhamNhan`),
  ADD KEY `phamnhan_nangkhieu_idx` (`NangKhieu`),
  ADD KEY `phamnhan_mucdophamtoi_idx` (`MucDoPhamToi`),
  ADD KEY `phamnhan_mucdocaitao_idx` (`MucDoCaiTao`),
  ADD KEY `phamnhan_thannhan_idx` (`ThanNhan`),
  ADD KEY `phamnhan_hinhphat_idx` (`HinhPhat`),
  ADD KEY `phamnhan_tinhtrangsuckhoe_idx` (`TinhTrangSucKhoe`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`),
  ADD KEY `taikhoan_loaitaikhoan_idx` (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  ADD PRIMARY KEY (`MaThanNhan`),
  ADD KEY `thannhan_taikhoan_idx` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `tinhtrangsuckhoe`
--
ALTER TABLE `tinhtrangsuckhoe`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `MaCanBo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lichthamnuoi`
--
ALTER TABLE `lichthamnuoi`
  MODIFY `IDLichThamNuoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phamnhan`
--
ALTER TABLE `phamnhan`
  MODIFY `MaPhamNhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  MODIFY `MaThanNhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `canbo_bophan` FOREIGN KEY (`BoPhan`) REFERENCES `bophan` (`MaBoPhan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `canbo_taikhoan` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khenthuong_phamnhan`
--
ALTER TABLE `khenthuong_phamnhan`
  ADD CONSTRAINT `ktpn_canbo` FOREIGN KEY (`CanBoDeNghi`) REFERENCES `canbo` (`MaCanBo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ktpn_khenthuong` FOREIGN KEY (`MaKhenThuong`) REFERENCES `khenthuong` (`MaKhenThuong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ktpn_phannhan` FOREIGN KEY (`MaPhamNhan`) REFERENCES `phamnhan` (`MaPhamNhan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichthamnuoi`
--
ALTER TABLE `lichthamnuoi`
  ADD CONSTRAINT `lichthamnuoi_canbo` FOREIGN KEY (`CanBoGiamSat`) REFERENCES `canbo` (`MaCanBo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthamnuoi_phamnhan` FOREIGN KEY (`PhamNhanDuocThamNuoi`) REFERENCES `phamnhan` (`MaPhamNhan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phamnhan`
--
ALTER TABLE `phamnhan`
  ADD CONSTRAINT `phamnhan_hinhphat` FOREIGN KEY (`HinhPhat`) REFERENCES `hinhphat` (`MaHinhPhat`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `phamnhan_mucdocaitao` FOREIGN KEY (`MucDoCaiTao`) REFERENCES `mucdocaitao` (`MaMucDo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `phamnhan_mucdophamtoi` FOREIGN KEY (`MucDoPhamToi`) REFERENCES `mucdophamtoi` (`MaMucDo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `phamnhan_nangkhieu` FOREIGN KEY (`NangKhieu`) REFERENCES `nangkhieu` (`MaNangKhieu`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `phamnhan_thannhan` FOREIGN KEY (`ThanNhan`) REFERENCES `thannhan` (`MaThanNhan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `phamnhan_tinhtrangsuckhoe` FOREIGN KEY (`TinhTrangSucKhoe`) REFERENCES `tinhtrangsuckhoe` (`MaTinhTrang`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_loaitaikhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thannhan`
--
ALTER TABLE `thannhan`
  ADD CONSTRAINT `thannhan_taikhoan` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
