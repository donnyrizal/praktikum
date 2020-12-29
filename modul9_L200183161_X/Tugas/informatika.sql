-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 01:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` char(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_gudang` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `kode_gudang`) VALUES
('', '', 'GD001'),
('BR001', 'M15', 'GD002'),
('BR002', 'Sabun', 'GD001'),
('Siala', 'aaa', 'GD001');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(50) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `kode_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `nama_buku`, `kode_jenis`) VALUES
('IND_XI', 'Bahasa Indonesia Kelas IX', 'A0002'),
('PAN123456', 'Biologi', 'A0002');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `kode_gudang` char(5) NOT NULL,
  `nama_gudang` varchar(50) NOT NULL,
  `lokasi_gudang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`kode_gudang`, `nama_gudang`, `lokasi_gudang`) VALUES
('GD001', 'Gudang X', 'Laweyan'),
('GD002', 'Gudang Y', 'Joyosoongoo'),
('LALAL', 'Gudang OLX', 'Rembang');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `kode_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `keterangan_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`kode_jenis`, `nama_jenis`, `keterangan_jenis`) VALUES
('A0002', 'Paket', 'SMK'),
('NA0228', 'Buku Pegangan Guru', 'SMA');

-- --------------------------------------------------------

--
-- Stand-in structure for view `khs`
-- (See below for the actual view)
--
CREATE TABLE `khs` (
`NIM` varchar(10)
,`Nama_MK` varchar(50)
,`Nilai_Angka` int(3)
,`Nilai_Huruf` varchar(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `Nama` char(50) DEFAULT NULL,
  `Kelas` char(5) DEFAULT NULL,
  `Alamat` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Kelas`, `Alamat`) VALUES
('asdas', 'asfas', 'B', 'asfas'),
('L200080001', 'Ari Wibowo', 'A', 'Solo'),
('L200080080', 'Agustina Anggraini', 'B', 'Sragen');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NIM` varchar(10) NOT NULL DEFAULT '',
  `Nama_MK` varchar(50) DEFAULT NULL,
  `Nilai_Angka` int(3) DEFAULT NULL,
  `Nilai_Huruf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIM`, `Nama_MK`, `Nilai_Angka`, `Nilai_Huruf`) VALUES
('', NULL, NULL, NULL),
('L200080002', 'Kapita Selekta', 60, 'BC'),
('L200080010', 'Pemrogramman Web', 87, 'A'),
('L200080080', 'Pemrogramman Web', 90, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `status`) VALUES
('admin', '1234', 'admin aplikasi', 'administrator'),
('adul', '1111', 'adul abdullah', 'member');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vbuku`
-- (See below for the actual view)
--
CREATE TABLE `vbuku` (
`kode_buku` varchar(50)
,`nama_buku` varchar(50)
,`nama_jenis` varchar(50)
,`keterangan_jenis` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `khs`
--
DROP TABLE IF EXISTS `khs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `khs`  AS SELECT `mahasiswa`.`NIM` AS `NIM`, `nilai`.`Nama_MK` AS `Nama_MK`, `nilai`.`Nilai_Angka` AS `Nilai_Angka`, `nilai`.`Nilai_Huruf` AS `Nilai_Huruf` FROM (`mahasiswa` join `nilai` on(`mahasiswa`.`NIM` = `nilai`.`NIM`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vbuku`
--
DROP TABLE IF EXISTS `vbuku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vbuku`  AS SELECT `buku`.`kode_buku` AS `kode_buku`, `buku`.`nama_buku` AS `nama_buku`, `jenis_buku`.`nama_jenis` AS `nama_jenis`, `jenis_buku`.`keterangan_jenis` AS `keterangan_jenis` FROM (`buku` join `jenis_buku` on(`buku`.`kode_jenis` = `jenis_buku`.`kode_jenis`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `barang_FKIndex1` (`kode_gudang`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`kode_gudang`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kode_gudang`) REFERENCES `gudang` (`kode_gudang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis_buku` (`kode_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
