-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2024 at 04:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-tiketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_penerbangan`
--

CREATE TABLE `jadwal_penerbangan` (
  `id_jadwal` int NOT NULL,
  `id_rute` int NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_tiba` time NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jadwal_penerbangan`
--

INSERT INTO `jadwal_penerbangan` (`id_jadwal`, `id_rute`, `waktu_berangkat`, `waktu_tiba`, `harga`) VALUES
(27, 3, '02:39:00', '11:41:00', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'palembang'),
(2, 'dki jakarta'),
(3, 'surabaya'),
(4, 'madura'),
(5, ' bali'),
(6, 'jaya pura'),
(7, 'aceh');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `id_maskapai` int NOT NULL,
  `logo_maskapai` text NOT NULL,
  `nama_maskapai` varchar(50) NOT NULL,
  `kapasitas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id_maskapai`, `logo_maskapai`, `nama_maskapai`, `kapasitas`) VALUES
(1, 'Lion Air Groub.jpeg', 'LION AIR GRUB', 150),
(3, 'Air Asia.jpeg', 'Air Asia Air Line', 100),
(14, 'Garuda Indonesia.jpeg', 'GARUDA INDONESIA', 1231231),
(78, 'citilink.png', 'citilink', 100),
(79, 'sriwijaya air line.jpg', 'sriwijaya air line', 150),
(80, 'Garuda Indonesia.jpeg', 'garuda indonesia 2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_ditail` int NOT NULL,
  `id_user` int NOT NULL,
  `id_jadwal` int NOT NULL,
  `Id_order` varchar(20) NOT NULL,
  `jumlah_tiket` int NOT NULL,
  `total_harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_tiket`
--

CREATE TABLE `order_tiket` (
  `id_order` varchar(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `struk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int NOT NULL,
  `id_maskapai` int NOT NULL,
  `rute_asal` varchar(100) NOT NULL,
  `rute_tujuan` varchar(100) NOT NULL,
  `tanggal_pergi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `id_maskapai`, `rute_asal`, `rute_tujuan`, `tanggal_pergi`) VALUES
(1, 14, 'jakarta', 'palembang', '2024-02-27'),
(3, 79, 'madura', 'jaya pura', '2024-02-28'),
(5, 80, 'dki jakarta', 'surabaya', '2024-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` enum('Admin','Petugas','Penumpang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `password`, `roles`) VALUES
(10, 'admin', 'france', '123456', 'Admin'),
(11, 'petugas', 'jimi', '123456', 'Petugas'),
(12, 'penumpang', 'jeje', '123456', 'Penumpang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `id_rute` (`id_rute`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_ditail`),
  ADD UNIQUE KEY `Id_order` (`Id_order`),
  ADD UNIQUE KEY `id_jadwal` (`id_jadwal`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `order_tiket`
--
ALTER TABLE `order_tiket`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD UNIQUE KEY `id_maskapai` (`id_maskapai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id_maskapai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_ditail` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_penerbangan`
--
ALTER TABLE `jadwal_penerbangan`
  ADD CONSTRAINT `jadwal_penerbangan_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Id_order`) REFERENCES `order_tiket` (`id_order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_detail_ibfk_3` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_penerbangan` (`id_jadwal`);

--
-- Constraints for table `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `maskapai` (`id_maskapai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
