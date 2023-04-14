-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 06:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw-oase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_pegawai` int(20) NOT NULL,
  `nip` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `bagian` varchar(15) NOT NULL,
  `tanggal_masuk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_pegawai`, `nip`, `nama`, `jabatan`, `bagian`, `tanggal_masuk`) VALUES
(1, '876231742', 'Via Choirul', 'PIC', 'Supervisor', '19-04-2021'),
(2, '6149171921', 'Fuad Putra', 'Karyawan', 'Promotor', '08-01-2022'),
(3, '9826243193', 'Rushy Tobati', 'Pusat', 'Sales', '2023-04-07'),
(11, '876265872365', 'Joko Subarto', 'PIC', 'Gudang', '2023-04-18'),
(14, '782364232315', 'Redno Jeisuke', 'Manajer', 'Gudang', '2023-03-21'),
(15, '612512499', 'Jason Suprado', 'Pusat', 'Promotor', '2023-03-26'),
(17, '21314325234', 'Jhono Keanu', 'Manajer', 'Promotor', '2023-03-20'),
(20, '81265321234', 'Adam Arnap', 'Manajer', 'Gudang', '2023-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(20) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `bobot`) VALUES
(7, 'Presensi', '20'),
(8, 'Kemampuan Kerjasama', '20'),
(9, 'Kedisiplinan', '10'),
(10, 'Penjualan', '35'),
(14, 'Lembur', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_normalisasi`
--

CREATE TABLE `tb_normalisasi` (
  `id_normalisasi` int(20) NOT NULL,
  `K1` float NOT NULL,
  `K2` float NOT NULL,
  `K3` float NOT NULL,
  `K4` float NOT NULL,
  `K5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(20) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `kemampuan_kerjasama` int(20) NOT NULL,
  `presensi` int(20) NOT NULL,
  `kedisiplinan` int(20) NOT NULL,
  `penjualan` int(20) NOT NULL,
  `lembur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `alternatif`, `kemampuan_kerjasama`, `presensi`, `kedisiplinan`, `penjualan`, `lembur`) VALUES
(1, 'Via Choirul', 21, 34, 56, 78, 98),
(14, 'Fuad Putra', 21, 43, 56, 67, 78),
(15, 'Redno Jeisuke', 12, 35, 76, 34, 76),
(16, 'Joko Subarto', 45, 43, 22, 29, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_preferensi`
--

CREATE TABLE `tb_preferensi` (
  `id_preferensi` int(20) NOT NULL,
  `K1` float NOT NULL,
  `K2` float NOT NULL,
  `K3` float NOT NULL,
  `K4` float NOT NULL,
  `K5` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Fuad Saputra', 'admin', '12345', 'admin'),
(2, 'Via Choirul', 'user', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tb_preferensi`
--
ALTER TABLE `tb_preferensi`
  ADD PRIMARY KEY (`id_preferensi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  MODIFY `id_normalisasi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_preferensi`
--
ALTER TABLE `tb_preferensi`
  MODIFY `id_preferensi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
