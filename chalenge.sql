-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 06:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chalenge`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `nis` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `nilai_web` int(5) NOT NULL,
  `nilai_pbo` int(5) NOT NULL,
  `nilai_basdat` int(5) NOT NULL,
  `nilai_progdas` int(5) NOT NULL,
  `nilai_desain` int(5) NOT NULL,
  `ratarata` int(5) NOT NULL,
  `predikat` varchar(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap`
--

INSERT INTO `rekap` (`nis`, `nama`, `jurusan`, `kelas`, `alamat`, `nilai_web`, `nilai_pbo`, `nilai_basdat`, `nilai_progdas`, `nilai_desain`, `ratarata`, `predikat`, `keterangan`) VALUES
(18561, 'Muhammad Arifin', 'RPL', 'X', 'Bojonegoro', 92, 97, 96, 93, 95, 95, 'A', 'Sangat Baik'),
(18562, 'Satmika Antargata Ozora', 'RPL', 'X', 'Banyuwangi', 90, 87, 80, 92, 96, 89, 'B', 'Baik'),
(19234, 'Ruqul Adam Himawan', 'RPL', 'X', 'Blitar', 90, 92, 87, 89, 98, 91, 'A', 'Sangat Baik'),
(19235, 'Ahmad Setiawan', 'TKJ', 'XI', 'Malang', 90, 90, 80, 88, 92, 88, 'B', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
