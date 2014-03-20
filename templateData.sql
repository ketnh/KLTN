INSERT INTO `linhvuc` (`idLinhVuc`, `NameDV`, `MoTaLinhVuc`) VALUES
(1, 'nha đất', 'nhà đất');

INSERT INTO `donvithuly` (`idDonViThuLy`, `NameDonViThuLy`) VALUES
(1, 'Nhà đất');
INSERT INTO `chuyenvienthuly` (`NameCB`, `NgaySinh`, `idDonViThuLy`) VALUES
( 'Kết', '2014-03-25', 1);

INSERT INTO `user` (`id`, `username`, `password`, `email`, `isActive`, `Thontincanhan_id`) VALUES
(1, 'kate', '123456', NULL, NULL, 1);

INSERT INTO `congdan` (`idCongDan`, `Name`, `Ngaysinh`, `QueQuan`, `SDT`, `email`) VALUES
(1, 'Ngyễn hữu Kết', '2014-03-05', 'HN', '38530', 'abc@xyz');

INSERT INTO `kateteddy`.`chuyenvienthuly` (`NameCB`, `NgaySinh`, `idChuyenVienThuLy`, `idDonViThuLy`) VALUES 
('a', '2014-03-03', NULL, '1');

INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(1, 'xong', '2014-03-05 00:00:00', 1, 2);
INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(2, 'da tham khao y kien cap tren', '2014-03-05 00:00:00', 4, 2);
INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(3, 'chua co y kien chinh thuc', '2014-03-05 00:00:00', 4, 2);
INSERT INTO `tinhtrangthuly` (`idTinhTrangThuLy`, `TinhTrangThuLy`, `Time`, `idChuyenVienThuLy`, `ThuTuThuLy`) VALUES
(4, 'chua du giay to', '2014-03-05 00:00:00', 4, 2);


INSERT INTO `tthc` (`idTTHC`, `NameTTHC`, `idLinhVuc`, `idDonViThuLy`, `NoiDungThucHien`, `GiayToHoSo`, `ThoiGianGiaiQuyet`, `idDinhKem`, `idVanBanLienQuan`, `PhanQuyen`, `IsHide`) VALUES
(5, 'Nhà đất', 1, 1, 'Bán đất', 'dlfkajfs', '1 tháng', NULL, NULL, 1, 1),
(6, 'Đất', 1, 1, 'Bán đất', 'Hồ sơ', '1 tháng', NULL, NULL, 0, 0),
(9, 'Vườn', 1, 1, 'ao', 'chuồng ', 'chuồng', NULL, NULL, 1, 1);

INSERT INTO `kateteddy`.`hosotthc` (`idHoSoTTHC`, `idTTHC`, `idCongDan`, `idDonViThuLy`, `NgayNhan`, `NgayHenTra`, `idTinhTrangThuLy`, `idDinhKemGui`, `idDinhKemNhan`, `IsSentDVTL`, `IsRecieveDVTL`) VALUES
(NULL, '3', '1', '1', '2014-03-11', '2014-03-19', '3', NULL, NULL, NULL, NULL);
INSERT INTO `kateteddy`.`hosotthc` (`idHoSoTTHC`, `idTTHC`, `idCongDan`, `idDonViThuLy`, `NgayNhan`, `NgayHenTra`, `idTinhTrangThuLy`, `idDinhKemGui`, `idDinhKemNhan`, `IsSentDVTL`, `IsRecieveDVTL`) VALUES
(NULL, '3', '1', '1', '2014-03-11', '2014-03-19', '3', NULL, NULL, NULL, NULL);

`