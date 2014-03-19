-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2014 at 11:01 AM
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

--
-- Dumping data for table `chuyenvienthuly`
--

INSERT INTO `chuyenvienthuly` (`idChuyenVienThuLy`, `NameCB`, `NgaySinh`, `idDonViThuLy`) VALUES
(4, 'Kết', '2014-03-25', 1);

--
-- Dumping data for table `congdan`
--

INSERT INTO `congdan` (`idCongDan`, `Name`, `Ngaysinh`, `QueQuan`, `SDT`, `email`) VALUES
(1, 'Ngyễn hữu Kết', '2014-03-05', 'HN', '38530', 'abc@xyz');

--
-- Dumping data for table `donvithuly`
--

INSERT INTO `donvithuly` (`idDonViThuLy`, `NameDonViThuLy`) VALUES
(1, 'Nhà đất');

--
-- Dumping data for table `hosotthc`
--

INSERT INTO `hosotthc` (`idHoSoTTHC`, `idTTHC`, `idCongDan`, `idDonViThuLy`, `NgayNhan`, `NgayHenTra`, `idTinhTrangThuLy`, `idDinhKemGui`, `idDinhKemNhan`, `IsSentDVTL`, `IsRecieveDVTL`) VALUES
(4, 1, 1, 1, '2014-03-02', '2014-03-27', 1, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`idLinhVuc`, `NameDV`, `MoTaLinhVuc`) VALUES
(1, 'nha đất', 'nhà đất');

--
-- Dumping data for table `tinhtrangthuly`
--

INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(1, 'xong', '2014-03-05 00:00:00', 4, 2);

--
-- Dumping data for table `tthc`
--

INSERT INTO `tthc` (`idTTHC`, `NameTTHC`, `idLinhVuc`, `idDonViThuLy`, `NoiDungThucHien`, `GiayToHoSo`, `ThoiGianGiaiQuyet`, `idDinhKem`, `idVanBanLienQuan`, `PhanQuyen`, `IsHide`) VALUES
(1, 'Nhà đất', 1, 1, 'Bán đất', 'dlfkajfs', '1 tháng', NULL, NULL, 1, 1),
(2, 'Đất', 1, 1, 'Bán đất', 'Hồ sơ', '1 tháng', NULL, NULL, 0, 0),
(3, 'Vườn', 1, 1, 'ao', 'chuồng ', 'chuồng', NULL, NULL, 1, 1);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `isActive`, `Thontincanhan_id`) VALUES
(1, 'kate', '123456', NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
