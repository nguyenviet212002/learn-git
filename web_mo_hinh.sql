-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2024 lúc 05:56 AM
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
-- Cơ sở dữ liệu: `web_mo_hinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_ad` varchar(11) NOT NULL,
  `ten_ad` varchar(255) NOT NULL,
  `email_ad` varchar(255) NOT NULL,
  `sdt_ad` varchar(10) NOT NULL,
  `dia_chi_ad` varchar(255) DEFAULT NULL,
  `mat_khau_ad` varchar(50) NOT NULL,
  `role` int(10) NOT NULL,
  `ngay_tao_ad` date NOT NULL,
  `ngay_sua_doi_ad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgias`
--

CREATE TABLE `danhgias` (
  `id_dg` varchar(10) NOT NULL,
  `id_kh` varchar(10) NOT NULL,
  `id_sp` varchar(10) NOT NULL,
  `binh_luan` text NOT NULL,
  `ngay_bl` date NOT NULL,
  `ngay_tao_bl` date NOT NULL,
  `ngay_sua_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucs`
--

CREATE TABLE `danhmucs` (
  `id_danhmuc` varchar(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `id_kh` varchar(11) NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `sdt_kh` varchar(10) NOT NULL,
  `email_kh` varchar(255) NOT NULL,
  `dia_chi_kh` varchar(255) DEFAULT NULL,
  `mat_khau_kh` varchar(50) NOT NULL,
  `ngay_tao_kh` date NOT NULL,
  `ngay_sua_doi_kh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `id_sp` varchar(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `id_anh` int(10) NOT NULL,
  `mota_sp` text NOT NULL,
  `id_danhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Chỉ mục cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
