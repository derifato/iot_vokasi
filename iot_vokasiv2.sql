-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 02:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot_vokasiv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampu`
--

CREATE TABLE `lampu` (
  `id_lampu` int(11) NOT NULL,
  `nama_lampu` varchar(255) NOT NULL,
  `mode` varchar(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_aktual` varchar(200) NOT NULL,
  `jam_hidup` int(5) NOT NULL,
  `menit_hidup` int(5) NOT NULL,
  `detik_hidup` int(5) NOT NULL,
  `jam_mati` int(5) NOT NULL,
  `menit_mati` int(5) NOT NULL,
  `detik_mati` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id_lampu`, `nama_lampu`, `mode`, `status`, `status_aktual`, `jam_hidup`, `menit_hidup`, `detik_hidup`, `jam_mati`, `menit_mati`, `detik_mati`) VALUES
(1, 'lampu1', 'manual', 'on', 'mati', 13, 17, 5, 13, 19, 10),
(2, 'lampu2', 'manual', 'off', 'mati', 15, 58, 20, 20, 59, 20);

-- --------------------------------------------------------

--
-- Table structure for table `log_lampu`
--

CREATE TABLE `log_lampu` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_lampu` int(30) NOT NULL,
  `nama_lampu` varchar(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_lampu`
--

INSERT INTO `log_lampu` (`waktu`, `id_lampu`, `nama_lampu`, `status`) VALUES
('2020-05-08 19:50:15', 1, 'Lampu Kerto', 'on'),
('2020-05-08 19:50:21', 2, 'Lampu Kerto', 'off'),
('2020-05-08 19:50:31', 3, 'Lampu Kerto', 'on'),
('2020-05-08 19:50:42', 4, 'Lampu Kerto', 'off'),
('2020-05-08 19:51:40', 5, 'Lampu Kerto', 'on'),
('2020-05-08 19:51:44', 6, 'Lampu Kerto', 'off'),
('2020-05-08 19:51:51', 7, 'Lampu Kerto', 'on'),
('2020-05-08 19:51:55', 8, 'Lampu Kerto', 'off'),
('2020-05-08 19:52:01', 9, 'Lampu Kerto', 'on'),
('2020-05-08 19:53:02', 10, 'Lampu Kerto', ''),
('2020-05-08 19:54:26', 11, 'Lampu Kerto', 'off'),
('2020-05-08 19:55:04', 12, 'Lampu Kerto', 'on'),
('2020-05-08 19:55:38', 13, 'Lampu Kerto', 'off'),
('2020-05-08 19:55:50', 14, 'Lampu Kerto', 'on'),
('2020-05-08 23:13:01', 15, 'Lampu Kerto', 'off'),
('2020-05-08 23:13:09', 16, 'Lampu Kerto', 'on'),
('2020-05-08 23:13:27', 17, 'Lampu Kerto', 'off'),
('2020-05-08 23:13:59', 18, 'Lampu Kerto', 'on'),
('2020-05-08 23:14:04', 19, 'Lampu Kerto', 'off'),
('2020-05-08 23:14:08', 20, 'Lampu Kerto', 'on'),
('2020-05-08 23:14:14', 21, 'Lampu Kerto', 'off'),
('2020-05-08 23:14:18', 22, 'Lampu Kerto', 'on'),
('2020-05-08 23:14:23', 23, 'Lampu Kerto', 'off'),
('2020-05-08 23:14:28', 24, 'Lampu Kerto', 'on'),
('2020-05-08 23:14:34', 25, 'Lampu Kerto', 'off'),
('2020-05-08 23:14:45', 26, 'Lampu Kerto', 'on'),
('2020-05-08 23:14:58', 27, 'Lampu Kerto', 'off'),
('2020-05-08 23:22:25', 28, 'Lampu Kerto', 'on'),
('2020-05-08 23:22:30', 29, 'Lampu Kerto', 'off'),
('2020-05-08 23:27:46', 30, 'Lampu Kerto', 'on'),
('2020-05-08 23:27:52', 31, 'Lampu Kerto', 'off'),
('2020-05-09 00:15:03', 32, 'Lampu Kerto', 'on'),
('2020-05-09 00:15:22', 33, 'Lampu Kerto', 'off'),
('2020-05-09 00:15:26', 34, 'Lampu Kerto', 'on'),
('2020-05-09 00:16:27', 35, 'Lampu Kerto', 'off'),
('2020-05-09 00:16:33', 36, 'Lampu Kerto', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_login`
--

CREATE TABLE `tabel_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_login`
--

INSERT INTO `tabel_login` (`username`, `password`, `status`) VALUES
('admin', 'admin123', 'admin'),
('tamu', 'tamu123', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampu`
--
ALTER TABLE `lampu`
  ADD PRIMARY KEY (`id_lampu`);

--
-- Indexes for table `log_lampu`
--
ALTER TABLE `log_lampu`
  ADD PRIMARY KEY (`id_lampu`);

--
-- Indexes for table `tabel_login`
--
ALTER TABLE `tabel_login`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lampu`
--
ALTER TABLE `lampu`
  MODIFY `id_lampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_lampu`
--
ALTER TABLE `log_lampu`
  MODIFY `id_lampu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
