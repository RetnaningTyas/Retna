-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 03:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb_tugaspweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', '8b283e8957f744ae5a1a6add05fc354f'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_daftar` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telepon` int(15) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `total_un` varchar(5) NOT NULL,
  `nama_bpk` varchar(100) NOT NULL,
  `pendidikan_bpk` varchar(100) NOT NULL,
  `pekerjaan_bpk` varchar(100) NOT NULL,
  `penghasilan_bpk` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_daftar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_daftar`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jk`, `agama`, `telepon`, `sekolah_asal`, `alamat_sekolah`, `total_un`, `nama_bpk`, `pendidikan_bpk`, `pekerjaan_bpk`, `penghasilan_bpk`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `email`, `password`, `tanggal_daftar`) VALUES
(8, 'Raya', 'Sengkubang', '2017-12-05', '', 'Perempuan', 'Islam', 0, 'darussalam', 'sengkubang', '90', 'madi', 'S1', 'dosen', '>5 Juta', 'tri', 'S1', 'guru', '3-5 Juta', 'raya@gmail.com', 'd52b1baf1bfd5fe68811707bf16e4a18', '2021-06-16'),
(9, 'RETNANING TYAS UTAMI', 'Mempawah', '2021-06-18', '', 'Perempuan', 'Islam', 0, 'Smanda', 'Jl. Panitisan BTN. Bestari Permai', '80', 'wisnu', 'S1', 'pns', '3-5 Juta', 'siti', 'SMA', 'irt', '<1 Juta', 'retnatyasutami@student.untan.ac.id', 'aecf25e810452f964bababe3e22662fe', '2021-06-18'),
(27, 'retna', 'Mempawah', '2021-06-24', '', 'Laki-Laki', 'Islam', 0, 'Smanda', 'Jl. Panitisan BTN. Bestari Permai', '80', 'wisnu', 'SD', 'pns', '<1 Juta', 'siti', 'SD', 'irt', '<1 Juta', 'retnatyasutami@student.untan.ac.id', '754e44c9444541c6d63819e8b3e34a1c', '2021-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_daftar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
