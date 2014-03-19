-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2014 at 11:00 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kateteddy`
--
CREATE DATABASE IF NOT EXISTS `kateteddy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kateteddy`;

-- --------------------------------------------------------

--
-- Table structure for table `chuyenvienthuly`
--

CREATE TABLE IF NOT EXISTS `chuyenvienthuly` (
  `idChuyenVienThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `NameCB` varchar(45) NOT NULL,
  `NgaySinh` date NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  PRIMARY KEY (`idChuyenVienThuLy`),
  KEY `FK_CanBo_DVThuLy_idx` (`idDonViThuLy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `chuyenvienthuly`
--

INSERT INTO `chuyenvienthuly` (`idChuyenVienThuLy`, `NameCB`, `NgaySinh`, `idDonViThuLy`) VALUES
(4, 'Kết', '2014-03-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `congdan`
--

CREATE TABLE IF NOT EXISTS `congdan` (
  `idCongDan` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `QueQuan` varchar(45) NOT NULL,
  `SDT` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idCongDan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `congdan`
--

INSERT INTO `congdan` (`idCongDan`, `Name`, `Ngaysinh`, `QueQuan`, `SDT`, `email`) VALUES
(1, 'Ngyễn hữu Kết', '2014-03-05', 'HN', '38530', 'abc@xyz');

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemguihs`
--

CREATE TABLE IF NOT EXISTS `dinhkemguihs` (
  `idDinhKemGuiHS` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDinhKem` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemGuiHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemnhanhs`
--

CREATE TABLE IF NOT EXISTS `dinhkemnhanhs` (
  `idDinhKemNhanHS` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDinhKem` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemNhanHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemtthc`
--

CREATE TABLE IF NOT EXISTS `dinhkemtthc` (
  `idDinhKemTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDK` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemTTHC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donvithuly`
--

CREATE TABLE IF NOT EXISTS `donvithuly` (
  `idDonViThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `NameDonViThuLy` varchar(45) NOT NULL,
  PRIMARY KEY (`idDonViThuLy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donvithuly`
--

INSERT INTO `donvithuly` (`idDonViThuLy`, `NameDonViThuLy`) VALUES
(1, 'Nhà đất');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `idFAQ` int(11) NOT NULL AUTO_INCREMENT,
  `idTTHC` int(11) NOT NULL,
  `NDCauHoi` varchar(45) NOT NULL,
  `NDCauTraLoi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFAQ`),
  KEY `FK_FAQ_DichVu_idx` (`idTTHC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hoidaptt`
--

CREATE TABLE IF NOT EXISTS `hoidaptt` (
  `idHoiDapTT` int(11) NOT NULL AUTO_INCREMENT,
  `idDonViThuLy` int(11) NOT NULL,
  `idTTHC` int(11) NOT NULL,
  `idCongDan` int(11) NOT NULL,
  `CauHoi` varchar(45) NOT NULL,
  `CauTraLoi` varchar(45) DEFAULT NULL,
  `isHide` tinyint(1) NOT NULL,
  PRIMARY KEY (`idHoiDapTT`),
  KEY `FK_HoiDapTT_DichVu_idx` (`idTTHC`),
  KEY `FK_HoiDapTT_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_HoiDapTT_CongDan_idx` (`idCongDan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosotthc`
--

CREATE TABLE IF NOT EXISTS `hosotthc` (
  `idHoSoTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `idTTHC` int(11) NOT NULL,
  `idCongDan` int(11) NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  `NgayNhan` date NOT NULL,
  `NgayHenTra` date NOT NULL,
  `idTinhTrangThuLy` int(11) NOT NULL,
  `idDinhKemGui` int(11) DEFAULT NULL,
  `idDinhKemNhan` int(11) DEFAULT NULL,
  `IsSentDVTL` tinyint(1) DEFAULT NULL,
  `IsRecieveDVTL` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idHoSoTTHC`),
  KEY `FK_HSTTHC_CongDan_idx` (`idCongDan`),
  KEY `FK_HSTTHC_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_HSTTHC_TTTL_idx` (`idTinhTrangThuLy`),
  KEY `FK_HSTTHC_DKNhan_idx` (`idDinhKemNhan`),
  KEY `FK_HSTTHC_DKGui_idx` (`idDinhKemGui`),
  KEY `FK_HSTTHC_TTHC_idx` (`idTTHC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hosotthc`
--

INSERT INTO `hosotthc` (`idHoSoTTHC`, `idTTHC`, `idCongDan`, `idDonViThuLy`, `NgayNhan`, `NgayHenTra`, `idTinhTrangThuLy`, `idDinhKemGui`, `idDinhKemNhan`, `IsSentDVTL`, `IsRecieveDVTL`) VALUES
(4, 1, 1, 1, '2014-03-02', '2014-03-27', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE IF NOT EXISTS `linhvuc` (
  `idLinhVuc` int(11) NOT NULL AUTO_INCREMENT,
  `NameDV` varchar(45) NOT NULL,
  `MoTaLinhVuc` varchar(255) NOT NULL,
  PRIMARY KEY (`idLinhVuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`idLinhVuc`, `NameDV`, `MoTaLinhVuc`) VALUES
(1, 'nha đất', 'nhà đất');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chucvu` varchar(45) DEFAULT NULL,
  `trachnhiem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_user`
--

CREATE TABLE IF NOT EXISTS `role_has_user` (
  `Role_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  PRIMARY KEY (`Role_id`,`User_id`),
  KEY `fk_Role_has_User_User1_idx` (`User_id`),
  KEY `fk_Role_has_User_Role1_idx` (`Role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thontincanhan`
--

CREATE TABLE IF NOT EXISTS `thontincanhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(45) DEFAULT NULL,
  `quequan` varchar(45) DEFAULT NULL,
  `CMTND` varchar(45) DEFAULT NULL,
  `SDT` varchar(45) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangthuly`
--

CREATE TABLE IF NOT EXISTS `tinhtrangthuly` (
  `idTinhTrangThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `TinhTrangThuLy` varchar(45) NOT NULL,
  `Time` datetime NOT NULL,
  `idChuyenVienThuLy` int(11) NOT NULL,
  `ThuTuThuLy` int(11) NOT NULL,
  PRIMARY KEY (`idTinhTrangThuLy`),
  KEY `FK_TTTL_ChuyenVienTL_idx` (`idChuyenVienThuLy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tinhtrangthuly`
--

INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(1, 'xong', '2014-03-05 00:00:00', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tthc`
--

CREATE TABLE IF NOT EXISTS `tthc` (
  `idTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `NameTTHC` varchar(45) NOT NULL,
  `idLinhVuc` int(11) NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  `NoiDungThucHien` varchar(255) NOT NULL,
  `GiayToHoSo` varchar(45) NOT NULL,
  `ThoiGianGiaiQuyet` varchar(45) NOT NULL,
  `idDinhKem` int(11) DEFAULT NULL,
  `idVanBanLienQuan` int(11) DEFAULT NULL,
  `PhanQuyen` int(11) NOT NULL,
  `IsHide` tinyint(1) NOT NULL,
  PRIMARY KEY (`idTTHC`),
  KEY `FK_TTHC_DichVu_idx` (`idLinhVuc`),
  KEY `FK_TTHC_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_TTHC_DinhKem_idx` (`idDinhKem`),
  KEY `FK_TTHC_VBLQ_idx` (`idVanBanLienQuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tthc`
--

INSERT INTO `tthc` (`idTTHC`, `NameTTHC`, `idLinhVuc`, `idDonViThuLy`, `NoiDungThucHien`, `GiayToHoSo`, `ThoiGianGiaiQuyet`, `idDinhKem`, `idVanBanLienQuan`, `PhanQuyen`, `IsHide`) VALUES
(1, 'Nhà đất', 1, 1, 'Bán đất', 'dlfkajfs', '1 tháng', NULL, NULL, 1, 1),
(2, 'Đất', 1, 1, 'Bán đất', 'Hồ sơ', '1 tháng', NULL, NULL, 0, 0),
(3, 'Vườn', 1, 1, 'ao', 'chuồng ', 'chuồng', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `Thontincanhan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isActive_UNIQUE` (`isActive`),
  KEY `fk_User_Thontincanhan1_idx` (`Thontincanhan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `isActive`, `Thontincanhan_id`) VALUES
(1, 'kate', '123456', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vanbanlienquan`
--

CREATE TABLE IF NOT EXISTS `vanbanlienquan` (
  `idVanBanLienQuan` int(11) NOT NULL AUTO_INCREMENT,
  `TenVBLQ` varchar(45) NOT NULL,
  `PathToVBLQ` varchar(45) NOT NULL,
  PRIMARY KEY (`idVanBanLienQuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenvienthuly`
--
ALTER TABLE `chuyenvienthuly`
  ADD CONSTRAINT `FK_CanBo_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `FK_FAQ_DichVu` FOREIGN KEY (`idTTHC`) REFERENCES `tthc` (`idTTHC`) ON UPDATE CASCADE;

--
-- Constraints for table `hoidaptt`
--
ALTER TABLE `hoidaptt`
  ADD CONSTRAINT `FK_HoiDapTT_DichVu` FOREIGN KEY (`idTTHC`) REFERENCES `linhvuc` (`idLinhVuc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HoiDapTT_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HoiDapTT_CongDan` FOREIGN KEY (`idCongDan`) REFERENCES `congdan` (`idCongDan`) ON UPDATE CASCADE;

--
-- Constraints for table `hosotthc`
--
ALTER TABLE `hosotthc`
  ADD CONSTRAINT `FK_HSTTHC_TTHC` FOREIGN KEY (`idTTHC`) REFERENCES `tthc` (`idTTHC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_CongDan` FOREIGN KEY (`idCongDan`) REFERENCES `congdan` (`idCongDan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DKGui` FOREIGN KEY (`idDinhKemGui`) REFERENCES `dinhkemguihs` (`idDinhKemGuiHS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DKNhan` FOREIGN KEY (`idDinhKemNhan`) REFERENCES `dinhkemnhanhs` (`idDinhKemNhanHS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_TTTL` FOREIGN KEY (`idTinhTrangThuLy`) REFERENCES `tinhtrangthuly` (`idTinhTrangThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `role_has_user`
--
ALTER TABLE `role_has_user`
  ADD CONSTRAINT `fk_Role_has_User_Role1` FOREIGN KEY (`Role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Role_has_User_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tinhtrangthuly`
--
ALTER TABLE `tinhtrangthuly`
  ADD CONSTRAINT `FK_TTTL_ChuyenVienTL` FOREIGN KEY (`idChuyenVienThuLy`) REFERENCES `chuyenvienthuly` (`idChuyenVienThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `tthc`
--
ALTER TABLE `tthc`
  ADD CONSTRAINT `FK_TTHC_DichVu` FOREIGN KEY (`idLinhVuc`) REFERENCES `linhvuc` (`idLinhVuc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_DinhKem` FOREIGN KEY (`idDinhKem`) REFERENCES `dinhkemtthc` (`idDinhKemTTHC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_VBLQ` FOREIGN KEY (`idVanBanLienQuan`) REFERENCES `vanbanlienquan` (`idVanBanLienQuan`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Thontincanhan1` FOREIGN KEY (`Thontincanhan_id`) REFERENCES `thontincanhan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
