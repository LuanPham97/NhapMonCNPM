-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: ql_nhatu
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bophan`
--

DROP TABLE IF EXISTS `bophan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `bophan` (
  `MaBoPhan` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TenBoPhan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaBoPhan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `canbo`
--

DROP TABLE IF EXISTS `canbo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `canbo` (
  `MaCanBo` int(11) NOT NULL AUTO_INCREMENT,
  `HoTen` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BoPhan` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaCanBo`),
  KEY `canbo_bophan_idx` (`BoPhan`),
  KEY `canbo_tendangnhap_idx` (`TenDangNhap`),
  CONSTRAINT `canbo_bophan` FOREIGN KEY (`BoPhan`) REFERENCES `bophan` (`MaBoPhan`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `canbo_taikhoan` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hinhphat`
--

DROP TABLE IF EXISTS `hinhphat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `hinhphat` (
  `MaHinhPhat` int(11) NOT NULL,
  `TenHinhPhat` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaHinhPhat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `khenthuong`
--

DROP TABLE IF EXISTS `khenthuong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `khenthuong` (
  `MaKhenThuong` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhenThuong` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `SoThangDuocGiam` int(11) DEFAULT NULL COMMENT 'số tháng được giảm án tù',
  PRIMARY KEY (`MaKhenThuong`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `khenthuong_phamnhan`
--

DROP TABLE IF EXISTS `khenthuong_phamnhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `khenthuong_phamnhan` (
  `MaKhenThuong` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `MaPhamNhan` int(11) NOT NULL,
  `CanBoDeNghi` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaKhenThuong`,`MaPhamNhan`),
  KEY `ktpn_phannhan_idx` (`MaPhamNhan`),
  KEY `ktpn_canbo_idx` (`CanBoDeNghi`),
  CONSTRAINT `ktpn_canbo` FOREIGN KEY (`CanBoDeNghi`) REFERENCES `canbo` (`MaCanBo`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `ktpn_khenthuong` FOREIGN KEY (`MaKhenThuong`) REFERENCES `khenthuong` (`MaKhenThuong`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ktpn_phannhan` FOREIGN KEY (`MaPhamNhan`) REFERENCES `phamnhan` (`MaPhamNhan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lichthamnuoi`
--

DROP TABLE IF EXISTS `lichthamnuoi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lichthamnuoi` (
  `IDLichThamNuoi` int(11) NOT NULL AUTO_INCREMENT,
  `NgayThamNuoi` date DEFAULT NULL,
  `PhamNhanDuocThamNuoi` int(11) DEFAULT NULL,
  `CanBoGiamSat` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDLichThamNuoi`),
  KEY `lichthamnuoi_phamnhan_idx` (`PhamNhanDuocThamNuoi`),
  KEY `lichthamnuoi_canbo_idx` (`CanBoGiamSat`),
  CONSTRAINT `lichthamnuoi_canbo` FOREIGN KEY (`CanBoGiamSat`) REFERENCES `canbo` (`MaCanBo`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `lichthamnuoi_phamnhan` FOREIGN KEY (`PhamNhanDuocThamNuoi`) REFERENCES `phamnhan` (`MaPhamNhan`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `loaitaikhoan`
--

DROP TABLE IF EXISTS `loaitaikhoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(10) NOT NULL,
  `TenLoaiTaiKhoan` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaLoaiTaiKhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mucdocaitao`
--

DROP TABLE IF EXISTS `mucdocaitao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mucdocaitao` (
  `MaMucDo` int(11) NOT NULL,
  `TenMucDo` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaMucDo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mucdophamtoi`
--

DROP TABLE IF EXISTS `mucdophamtoi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mucdophamtoi` (
  `MaMucDo` int(10) NOT NULL,
  `TenMucDo` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaMucDo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `nangkhieu`
--

DROP TABLE IF EXISTS `nangkhieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `nangkhieu` (
  `MaNangKhieu` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `TenNangKhieu` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaNangKhieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `phamnhan`
--

DROP TABLE IF EXISTS `phamnhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `phamnhan` (
  `MaPhamNhan` int(11) NOT NULL AUTO_INCREMENT,
  `TenPhamNhan` varchar(50) CHARACTER SET utf8 NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `TinhTrangSucKhoe` int(11) DEFAULT NULL,
  `MucDoPhamToi` int(10) DEFAULT NULL,
  `NgayKTDinhKy` date DEFAULT NULL,
  `GapNguoiThan` bit(1) DEFAULT NULL,
  `MucDoCaiTao` int(11) DEFAULT NULL,
  `NangKhieu` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayVaoTu` date DEFAULT NULL,
  `NgayRaTuDuKien` date DEFAULT NULL,
  `ThanNhan` int(11) DEFAULT NULL,
  `HinhPhat` int(11) DEFAULT NULL,
  `HoatDongDeNghi` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CheDoTheoDoi` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaPhamNhan`),
  KEY `phamnhan_nangkhieu_idx` (`NangKhieu`),
  KEY `phamnhan_mucdophamtoi_idx` (`MucDoPhamToi`),
  KEY `phamnhan_mucdocaitao_idx` (`MucDoCaiTao`),
  KEY `phamnhan_thannhan_idx` (`ThanNhan`),
  KEY `phamnhan_hinhphat_idx` (`HinhPhat`),
  KEY `phamnhan_tinhtrangsuckhoe_idx` (`TinhTrangSucKhoe`),
  CONSTRAINT `phamnhan_hinhphat` FOREIGN KEY (`HinhPhat`) REFERENCES `hinhphat` (`MaHinhPhat`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `phamnhan_mucdocaitao` FOREIGN KEY (`MucDoCaiTao`) REFERENCES `mucdocaitao` (`MaMucDo`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `phamnhan_mucdophamtoi` FOREIGN KEY (`MucDoPhamToi`) REFERENCES `mucdophamtoi` (`MaMucDo`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `phamnhan_nangkhieu` FOREIGN KEY (`NangKhieu`) REFERENCES `nangkhieu` (`MaNangKhieu`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `phamnhan_thannhan` FOREIGN KEY (`ThanNhan`) REFERENCES `thannhan` (`MaThanNhan`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `phamnhan_tinhtrangsuckhoe` FOREIGN KEY (`TinhTrangSucKhoe`) REFERENCES `tinhtrangsuckhoe` (`MaTinhTrang`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `TenHienThi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaLoaiTaiKhoan` int(10) DEFAULT NULL,
  PRIMARY KEY (`TenDangNhap`),
  KEY `taikhoan_loaitaikhoan_idx` (`MaLoaiTaiKhoan`),
  CONSTRAINT `taikhoan_loaitaikhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `thannhan`
--

DROP TABLE IF EXISTS `thannhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `thannhan` (
  `MaThanNhan` int(11) NOT NULL AUTO_INCREMENT,
  `TenThanNhan` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `SDT` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaThanNhan`),
  KEY `thannhan_taikhoan_idx` (`TenDangNhap`),
  CONSTRAINT `thannhan_taikhoan` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tinhtrangsuckhoe`
--

DROP TABLE IF EXISTS `tinhtrangsuckhoe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tinhtrangsuckhoe` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `MoTa` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`MaTinhTrang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-30 19:42:21
